<?php
session_start();
include "..\DB.php";
$emailSearch=$_POST['email'];
$password=md5($_POST['password']);
$DB=new DB();
$_SESSION['userE']=$emailSearch;
$sqlSearchCommand="SELECT * FROM `angajator` WHERE `E-mail`='$emailSearch' AND `Password`='$password'";

$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();

if($prepare->rowCount()==1)
{
echo "true";
}
else {echo "false";}
?>