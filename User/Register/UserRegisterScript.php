<?php session_start(); /*pornim sesiunea */
?>
<!DOCTYPE html>
<html>
<head>
<title>Check Register</title>
</head>
<body>
<?php
include "..\..\DB.php";
use GuzzleHttp\Client;
require '../../vendor/autoload.php';

/* preluam datele preluate din forma de pe pagina anterioara */
$email=$_SESSION['inputEmailUserSession'];
$password=md5( $_SESSION['inputPasswordUserSession']);
$prefix=$_SESSION['inputPrefixPhoneUserSession'];
$phone=$_SESSION['inputPhoneUserSession'];
$code=$_SESSION['code'];
$phoneForSms=$prefix.$phone;

/* afisare date */
echo "Email: ".$email."<br>";
echo "Password: ".$password."<br>";
echo "Prefix: ".$prefix."<br>";
echo "Phone".$phone."<br>";
echo "PhoneForSms".$phoneForSms."<br>";
echo "Code: ".$code."<br>";

unset($_SESSION['counter']);
/* asigura trimiterea unui sms per numar de telefon si nu face spam la fiecare post*/
if (empty($_SESSION['counter']))
$_SESSION['counter']=1; else $_SESSION['counter']++;
echo "Count Refresh Page:".$_SESSION['counter']."<br>";
if($_SESSION['counter']==1)
{sendSms($phoneForSms,$code);}

/* */
$DB=new DB();
$sqlInsertCommand="INSERT INTO `user`(`Email`,`PasswordU`) VALUES ('$email','$password')";
$q=$DB::obtine_conexiune()->prepare($sqlInsertCommand);

 /*functie pentru trimis mesaje */
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

var_dump(json_decode($request->getBody()->getContents()));}


/* 1.forma pentru verificarea codului
   2.forma pentru gresirea numarului de telefon in formular
   3.resend code in caz de api raspunde greu
*/
?>
<form id='formCodeCheck' method='post' ><p>Te-ai inregistrat cu succes! Un sms a fost trimis catre numarul de telefon: <?php echo $phone; ?>. Pentru activarea contului vei avea nevoie de codul primit pe telefon:</p>
<p>Introdu codul aici:</p>
<input name='inputCodeCheck' id='inputCodeCheck'> </input>
<input name='buttonCodeCheck' type='submit' value='buttonCodeCheck' >
</form>


<button id='buttonWrongNumber' type="button" onclick="showWrongNumber()" >Daca ai gresit numarul de telefon click aici</button>
<form id='newPhoneUserForm' style="display:none" method='post'>
<p>Daca ai gresit numarul de telefon trece noul numar aici:</p>
<input id='newPhoneUser' name='newPhoneUser'></input>
<button onclick="hideWrongNumber()" type='submit' name='buttonNewPhoneChecked' >trimitere la numar nou </button>
</form>

<form method='post'>
<button type="submit" name="resendCodeUser">Resend Sms to number: <?php $phoneForSms ?> </button>
</form>

<?php
/* verificare codului si introducerea in baza de date a userului */
if(isset($_POST['buttonCodeCheck']))
{
if(isset($_POST['inputCodeCheck'])&&!empty($_POST['inputCodeCheck']))
         {   if($q->execute()){} else {echo "Eroare baza de date.";}
            if($_POST['inputCodeCheck']!=$code) /* daca codurile sunt la fel ne redirectioneaza catre pagina de login si se sterg salvarile */
               { echo "Cod gresit! Reincearca!"; } else {header("Location: ..\Login\LoginUser.php"); session_destroy();  }    
        }
}

/* schimbare a numarului de telefon */
if(isset($_POST['buttonNewPhoneChecked']))
{
   if(isset($_POST['newPhoneUser'])&&!empty($_POST['newPhoneUser']))
   {  unset($_SESSION['inputPhoneUserSession']);
      $_SESSION['inputPhoneUserSession']=$_POST['newPhoneUser'];
      $_SESSION['code']=rand(1000,9999);
      header('Location: '.$_SERVER['PHP_SELF']);
   }

}

/*resend code pentru raspuns greu */
if(isset($POST['resendCodeUser']))
{
    sendSms($phoneForSms,$code);
    
}
?>


</body>
<script>

function showWrongNumber(){
document.getElementById('newPhoneUserForm').style.display="block";
document.getElementById('buttonWrongNumber').style.display="none";
}
function hideWrongNumber(){
document.getElementById('newPhoneUserForm').style.display="none";
document.getElementById('buttonWrongNumber').style.display="block";   
}
var a=<?php echo "123";?>;
</script>
</html>