<?php
$user=$_POST['userName'];

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
$idCv=$arrayUserCV[0]["ID_CV"];


$sqlSearchCommandIDJob="SELECT ID_Job FROM `job/cv` WHERE `ID_CV`='$idCv'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandIDJob);
$prepare->execute();
$arrayJobCV=$prepare->fetchAll();

foreach($arrayJobCV as $item){
$sqlSearchCommandJob="SELECT * FROM `job` WHERE `ID`='$item[0]'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
$prepare->execute();
$arrayJob=$prepare->fetchAll();
echo "<div id='job".$arrayJob[0]['ID']."'> 
<p>".$arrayJob[0]['Titlu']."</p>
<p>".$arrayJob[0]['Oras']."</p>
<p>".$arrayJob[0]['NivelCariera']."</p>
<p>".$arrayJob[0]['TipJob']."</p>
<p>".$arrayJob[0]['Departament']."</p>

</div>
";}
?>