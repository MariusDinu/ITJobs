<?php 
$user=$_POST['userName'];
$idJob=$_POST['idJob'];

include "../../DB.php";
$DB=new DB();

$sqlSearchCommand="SELECT ID FROM `user` WHERE `Email`='$user'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array=$prepare->fetchAll();
$id=$array[0]["ID"];

$sqlSearchCommandIDCV="SELECT ID_CV FROM `user/cv` WHERE `ID_User`='$id'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandIDCV);
$prepare->execute();
$arrayUserCV=$prepare->fetchAll();
if(isset($arrayUserCV[0]["ID_CV"]))
{$idCv=$arrayUserCV[0]["ID_CV"];


    $sqlSearchCommandInsertCV="INSERT INTO `job/cv`(`ID_Job`, `ID_CV`) VALUES ($idJob,$idCv)";
    $prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandInsertCV);
    if($prepare->execute())
    echo "true";
    else echo "false";



}




?>