<?php 


use GuzzleHttp\Client;
require '../../vendor/autoload.php';
$phone=$_POST['phone'];
$prefix="+40";
$phoneForSms=$prefix.$phone;
$code=rand(1000,9999);
sendSms($phoneForSms,$code);
echo $code;

function sendSms($phoneForSms,$code){

$client = new Client;
$request = $client->request('POST', 'https://app.smso.ro/api/v1/send', [
        'headers' => [
            'X-Authorization' => 'mTr3xmoP3M9usuncicnqdD57DbxHlXWTpz4uePpz',
        ],
       'form_params' => [
           'to' => "$phoneForSms",
           'body' => "Activation code: $code",
           'sender' => '4',
       ],
]);

}
?>