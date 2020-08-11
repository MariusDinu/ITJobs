<!DOCTYPE html>
<html>
<head>
<title>Completare CV</title>
</head>
<body>

<?php
$limbaje=$_POST["limbaje"];				//aici preiau datele din formular.. o sa modific cu session cand va fi nevoie..
$tehnologii=$_POST["tehnologii"];		//it's just for testing
$joburi=$_POST["joburi"];				//cand refac aici o sa pun si validari/restrictii
$server="localhost";
$username="root";
$password="";
$DB="itlabs";
$conn=new mysqli($server,$username,$password,$DB);		//fac conexiunea la baza de date

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); 		//verific conexiunea
}

$sql="INSERT INTO `CV`(`limbaje`,`joburi`,`tehnologii`) VALUES ('$limbaje','$joburi','$tehnologii')";
if ($conn->query($sql) === TRUE) {
  echo "Ai completat CV-ul cu success!";
} else {
  echo "Eroare: " . $sql . "<br>" . $conn->error;			
}

$conn->close();
?>
</html>