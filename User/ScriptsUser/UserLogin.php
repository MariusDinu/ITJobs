<?php
session_start();
include "..\DB.php";
$emailSearch=$_POST['email'];
$password=md5($_POST['password']);
$DB=new DB();
$_SESSION['user']=$emailSearch;
$sqlSearchCommand="SELECT * FROM `user` WHERE `Email`='$emailSearch' AND `Password`='$password'";

$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();

if($prepare->rowCount()==1)
{
echo "true";
}
else {echo "false";}
?>