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
include "../../DB.php";
$DB=new DB();
$limbaje=$_SESSION["limbaje"];				//aici preiau datele din formular.. o sa modific cu session cand va fi nevoie..
$tehnologii=$_SESSION["tehnologii"];		//it's just for testing
$joburi=$_SESSION["joburi"];				//cand refac aici o sa pun si validari/restrictii
$expLimbaj=$_SESSION["expLimbaj"];
$expJob=$_SESSION["expJob"];

$sql="INSERT INTO `cv`(`limbaje`,`expLimbaj`,`joburi`,`expJob`,`tehnologii`) VALUES ('$limbaje','$expLimbaj','$joburi','$expJob','$tehnologii')";


$q=$DB::obtine_conexiune()->prepare($sql);	//fac conexiunea la baza de date


if ($q->execute()) {
  echo "Ai completat CV-ul cu success!"; session_destroy();
} else {
  echo "Eroare.";		
}
?>
</html>