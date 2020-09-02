<?php
session_start();
include "../../DB.php";
$emailSearch=$_POST['email'];
$password=md5($_POST['password']);

$DB=new DB();
$_SESSION['userE']=$emailSearch;
$sqlSearchCommand="SELECT * FROM `angajator` WHERE `E-mail`='$emailSearch' AND `Password`='$password' ";

$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array=$prepare->fetchAll();

if($prepare->rowCount()==1)
{
    if($array[0]['Active']==1)
        echo "true";
        else "falseActive";
}
else {echo "false";}
?>