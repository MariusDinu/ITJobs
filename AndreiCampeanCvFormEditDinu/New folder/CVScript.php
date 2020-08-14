<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Completare CV</title>
</head>
<body>

<?php
include "DB.php";
$DB=new DB();


$limbaje=$_SESSION['limbaje'];				//aici preiau datele din formular.. o sa modific cu session cand va fi nevoie..
$tehnologii=$_SESSION['tehnologii'];		//it's just for testing
$joburi=$_SESSION['joburi'];
echo $limbaje; /*  afisare de test */
echo $tehnologii;/*  afisare de test */
echo $joburi;/*  afisare de test */
//cand refac aici o sa pun si validari/restrictii
//$server="localhost";
//$username="root";
//$password="";
//$DB="itlabs";
$sql="INSERT INTO `cv`(`limbaje`,`joburi`,`tehnologii`) VALUES ('$limbaje','$joburi','$tehnologii')";

$q=$DB::obtine_conexiune()->prepare($sql);	//fac conexiunea la baza de date


if ($q->execute()) {
  echo "Ai completat CV-ul cu success!"; session_destroy();
} else {
  echo "Eroare.";		
}

?>
</html>