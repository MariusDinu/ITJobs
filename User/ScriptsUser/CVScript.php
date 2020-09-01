<?php
session_start();
include "../../DB.php";
$DB=new DB();
$limbaje=$_POST["limbaje"];				
$tehnologii=$_POST["tehnologii"];		
$joburi=$_POST["joburi"];				
$nume=$_POST["nume"];
$prenume=$_POST["prenume"];
$nastere=$_POST["nastere"];
$gen=$_POST["gen"];
$email=$_POST["email"];
$telefon=$_POST["phone"];
$descriere=$_POST["descriere"];
$sql="INSERT INTO `cv`( `Nume`, `Prenume`, `Data_nastere`, `Descriere`, `Email`, `Telefon`, `Gen`, `Limbaje`, `Joburi`, `Tehnologii`) VALUES ('$nume','$prenume','$nastere','$descriere','$email','$telefon','$gen','$limbaje','$joburi','$tehnologii')";

$q=$DB::obtine_conexiune()->prepare($sql);
if($q->execute())
	{echo "true";}
else
	{echo "false";}


?>
