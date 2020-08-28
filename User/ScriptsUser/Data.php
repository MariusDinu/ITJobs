<?php

$user=$_POST['userName'];
include "../../DB.php";
$DB=new DB();

$sqlSearchCommand="SELECT * FROM `user` WHERE `Email`='$user'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array=$prepare->fetchAll();


echo "<p id='profilEmailUser'>Email:".$array[0]['Email']."</p> 
<p id='profilPhoneUser'>Telefon:".$array[0]['PhoNumber']."</p>";
?>