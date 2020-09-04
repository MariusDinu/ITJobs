<?php
include "../../DB.php";
$emailSearch=$_POST['email'];
$DB=new DB();
$sqlSearchCommand="SELECT E-mail FROM `angajator` WHERE E-mail='$emailSearch'";

$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
if($prepare->rowCount()==1)
{
echo "false";
}
else {echo "true";}
?>