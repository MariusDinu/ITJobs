<?php
include "../../DB.php";


$email=$_POST['email'];
$password=md5($_POST['password']);
$phone=$_POST['phone'];
$prefix="+40";
$phoneForSms=$prefix.$phone;
addInDatabase($email,$password,$phoneForSms);


function addInDatabase($email,$password,$phoneForSms){
$DB=new DB();
$sqlInsertCommand="INSERT INTO `user`(`Email`,`Password`,`PhoNumber`) VALUES ('$email','$password','$phoneForSms')";
$q=$DB::obtine_conexiune()->prepare($sqlInsertCommand);
if($q->execute())
{echo "true";}else {echo "false";}
}



?>