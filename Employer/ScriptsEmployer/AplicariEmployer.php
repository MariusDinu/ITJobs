<?php
$user=$_POST['userName'];

include "../../DB.php";
$DB=new DB();

$sqlSearchCommand="SELECT ID FROM `angajator` WHERE `E-mail`='$user'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array=$prepare->fetchAll();
$id=$array[0]["ID"];

$sqlSearchCommandJob="SELECT * FROM `job` WHERE `ID_angajator`='$id'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
$prepare->execute();

$arrayJob=$prepare->fetchAll();
if($arrayJob!=null)
{foreach($arrayJob as $item)
echo "
<div id='job' class='flex items-center justify-between p-5 border-b-2 border-gray-400 hover:bg-gray-100'".$item['ID']."> 
    <a href='./ScriptsEmployer/JobEmployer.php?myJob=".$item['ID']."'>
        <span class='text-lg text-primary'>".$item['Titlu']."</span>
        <div class='flex items-center'>
            <div class='flex items-center mr-2'>
                <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 briefcase'><path fill-rule='evenodd' d='M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z' clip-rule='evenodd'></path><path d='M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z'></path></svg>
                <span class='ml-1 text-gray-600'>".$item['TipJob']."</span>
            </div>
            <div class='flex items-center mr-2'>
                <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 location-marker'><path fill-rule='evenodd' d='M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z' clip-rule='evenodd'></path></svg>
                <span class='ml-1 text-gray-600'>".$item['Oras']."</span>
            </div>
        </div>
    </a>
</div>
";}
else {echo "<div>Nu ai joburi adaugate!</div>";}
