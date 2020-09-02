<?php
session_start();
include "../../DB.php";

$user=$_SESSION['user'];
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

$sqlUser="SELECT ID FROM `user` WHERE Email='$user'";
$sql="INSERT INTO `cv`( `Nume`, `Prenume`, `Data_nastere`, `Descriere`, `Email`, `Telefon`, `Gen`, `Limbaje`, `Joburi`, `Tehnologii`) VALUES ('$nume','$prenume','$nastere','$descriere','$email','$telefon','$gen','$limbaje','$joburi','$tehnologii')";
$qUser=$DB::obtine_conexiune()->prepare($sqlUser);
$q=$DB::obtine_conexiune()->prepare($sql);
$qUser->execute();
$array = $qUser->fetchAll();

if($q->execute())
{   $lastIdCv=$DB::obtine_conexiune()->lastInsertId();
	$string=$array[0]['ID'];
	$sqlCvUser="INSERT INTO `user/cv`(`ID_User`, `ID_CV`) VALUES ('$string','$lastIdCv')";
	$q2=$DB::obtine_conexiune()->prepare($sqlCvUser);
	if($q2->execute())
	{echo "true";}
	else {echo "false";}

}
else
	{echo "false";}


?>
