<?php
$cv=$_GET['cv'];

include "../../DB.php";
$DB=new DB();
$sqlSearchCommandCV="SELECT * FROM `cv` WHERE `ID`='$cv'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandCV);
$prepare->execute();
$arrayCV=$prepare->fetchAll();
if($arrayCV!=null)
foreach($arrayCV as $cv)
{
echo "
<div>CV:".$cv['Nume']." ".$cv['Prenume']." </div>
<div id='cv".$cv['ID']."'>
<p>".$cv['Nume']."</p><p>".$cv['Prenume']."</p>
<p>"."".$cv['Data_nastere']."</p>
<p>".$cv['Descriere']."</p>
<p>".$cv['Email']."</p>
<p>".$cv['Telefon']."</p>
<p>".$cv['Gen']."</p>
<p>".$cv['Limbaje']."</p>
<p>".$cv['Joburi']."</p>
<p>".$cv['Tehnologii']."</p>
</div>";

}



?>