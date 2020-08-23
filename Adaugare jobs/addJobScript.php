<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Adăugare Job</title>
</head>
<body>

<?php
include "../DB.php";
$DB=new DB();
$job=$_SESSION["job"];				//aici preiau datele din formular
$oras=$_SESSION["oras"];		
$studii=$_SESSION["studii"];				
$dep=$_SESSION["dep"];
$salariu=$_SESSION["salariu"];
$cariera=$_SESSION["cariera"];
$tip=$_SESSION["tip"];
$permis=$_SESSION["permis"];
$candidat=$_SESSION["candidat"];
$descriere=$_SESSION["descriere"];
$descriereC=$_SESSION["descriereC"];

$sql="INSERT INTO `jobs`(`Titlu`,`Oras`,`Nivel_studii`,`Departament`,`Salariu`,`Nivel_cariera`,`Tip`,`Permis`,`Candidatul_ideal`,`Descriere_job`,`Descriere_companie`) VALUES ('$job','$oras','$studii','$dep','$salariu','$cariera','$tip','$permis','$candidat','$descriere','$descriereC')";


$q=$DB::obtine_conexiune()->prepare($sql);	//fac conexiunea la baza de date


if ($q->execute()) {
  echo "Ai adăugat jobul cu success!"; session_destroy();
} else {
  echo "Eroare.";		
}
?>
</html>