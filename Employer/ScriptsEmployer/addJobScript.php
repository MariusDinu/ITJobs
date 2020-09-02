<?php
session_start();

$user=$_SESSION['userE'];

include "../../DB.php";
$DB=new DB();
$titlu=$_POST["titlu"];				//aici preiau datele din formular
$oras=$_POST["oras"];		
$studii=$_POST["studii"];				
$salariu=$_POST["salariu"];
$cariera=$_POST["cariera"];
$tip=$_POST["tip"];
$candidat=$_POST["candidat"];
$companie=$_POST["companie"];
$job=$_POST["job"];


$sqlSearchCommand="SELECT ID FROM `angajator` WHERE `E-mail`='$user'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array=$prepare->fetchAll();
$idEmployer=$array[0]["ID"];


$sql="INSERT INTO `job`(`ID_angajator`, `Titlu`, `Oras`, `NivelStudii`, `Departament`, `Salariu`, `NivelCariera`, `TipJob`, `CandidatIdeal`, `DescriereJob`,`DescriereCompanie`) VALUES ('$idEmployer','$titlu','$oras','$studii','$salariu','$cariera','$tip','$candidat','$job','$companie')";
$q=$DB::obtine_conexiune()->prepare($sql);	//fac conexiunea la baza de date
echo $sql;
$q->execute();
?>
