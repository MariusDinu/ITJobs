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
if(isset($arrayUserCV[0]["ID_CV"]))
{$idCv=$arrayUserCV[0]["ID_CV"];

$sqlSearchCommandIDJob="SELECT ID_Job FROM `job/cv` WHERE `ID_CV`='$idCv'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandIDJob);
$prepare->execute();
$arrayJobCV=$prepare->fetchAll();
if(isset($arrayJobCV[0])){
foreach($arrayJobCV as $item){

$sqlSearchCommandJob="SELECT * FROM `job` WHERE `ID`='$item[0]'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
$prepare->execute();

$arrayJob=$prepare->fetchAll();
echo "
<div id='job' class='flex items-center justify-between p-5 border-b-2 border-gray-400 hover:bg-gray-100'".$arrayJob[0]['ID']."> 
    <a href='../User/ScriptsUser/Job.php?jobId=".$arrayJob[0]['ID']."'>
        <span class='text-lg text-primary'>".$arrayJob[0]['Titlu']."</span>
        <div class='flex items-center'>
            <div class='flex items-center mr-2'>
                <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 briefcase'><path fill-rule='evenodd' d='M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z' clip-rule='evenodd'></path><path d='M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z'></path></svg>
                <span class='ml-1 text-gray-600'>".$arrayJob[0]['TipJob']."</span>
            </div>
            <div class='flex items-center mr-2'>
                <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 location-marker'><path fill-rule='evenodd' d='M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z' clip-rule='evenodd'></path></svg>
                <span class='ml-1 text-gray-600'>".$arrayJob[0]['Oras']."</span>
            </div>
        </div>
    </a>
</div>
";}} else { echo "<div> Nu ai aplicat inca la un job!</div>";}
}
else {echo "<div>Nu ti-ai completat cv-ul!</div>";}
