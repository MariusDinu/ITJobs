<?php 
$job=$_GET['myJob'];
include "../../DB.php";
$DB=new DB();
$sqlSearchCommandJob="SELECT * FROM `job/cv` WHERE `ID_Job`='$job'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
$prepare->execute();
$arrayJob=$prepare->fetchAll();

if($arrayJob!=null)
{foreach($arrayJob as $item)
{
     $idCV=$item['ID_CV'];
     $sqlSearchCommandCV="SELECT * FROM `cv` WHERE `ID`='$idCV'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandCV);
$prepare->execute();
$arrayCV=$prepare->fetchAll();
if($arrayCV!=null)
foreach($arrayCV as $cv)
{
echo "<div id='cv".$cv['ID']."'>
<a href='../ScriptsEmployer/CV.php?cv=".$cv['ID']."'>
<p>".$cv['Nume']."</p>
<p>".$cv['Prenume']."</p>
<p>".$cv['ID']."</p></a></div><br>";

}
}




}
else {echo "Nu a aplicat nimeni!";}
?>