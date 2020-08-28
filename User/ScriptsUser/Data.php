<?php

$user = $_POST['userName'];
include "../../DB.php";
$DB = new DB();

$sqlSearchCommand = "SELECT * FROM `user` WHERE `Email`='$user'";
$prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array = $prepare->fetchAll();


echo "
<p class='mb-5 text-xl font-medium sm:text-2xl md:text-4xl' id='profilNameUser'>" . $user . "</p>
<span class='mr-10 text-gray-600'>Email:</span>
<span id='profilEmailUser'>" . $array[0]['Email'] . "</span>
<hr class='my-3'> 
<span class='mr-6 text-gray-600'>Telefon:</span>
<span id='profilPhoneUser'>(+40)" . $array[0]['PhoNumber'] . "</span>
<hr class='my-3'>";
