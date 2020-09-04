<?php
$user = $_POST['userName'];

include "../../DB.php";
$DB = new DB();

$sqlSearchCommand = "SELECT ID FROM `user` WHERE `Email`='$user'";
$prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommand);
$prepare->execute();
$array = $prepare->fetchAll();
$id = $array[0]["ID"];

$sqlSearchCommandIDCV = "SELECT ID_CV FROM `user/cv` WHERE `ID_User`='$id'";
$prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommandIDCV);
$prepare->execute();
$arrayUserCV = $prepare->fetchAll();
if (isset($arrayUserCV[0]["ID_CV"])) {
    $idCv = $arrayUserCV[0]["ID_CV"];

    $sqlSearchCommandIDJob = "SELECT ID_Job FROM `job/cv` WHERE `ID_CV`='$idCv'";
    $prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommandIDJob);
    $prepare->execute();
    $arrayJobCV = $prepare->fetchAll();
    if (isset($arrayJobCV)) {
        foreach ($arrayJobCV as $item) {

            $sqlSearchCommandJob = "SELECT * FROM `job` WHERE `ID`='$item[0]'";
            $prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
            $prepare->execute();

            $arrayJob = $prepare->fetchAll();
            echo "
<div id='job' class='flex items-center justify-between p-5 border-b-2 border-gray-400 hover:bg-gray-100'" . $arrayJob[0]['ID'] . "> 
    <a href='../User/ScriptsUser/Job.php?jobId=" . $arrayJob[0]['ID'] . "'>
        <span class='text-lg text-primary'>" . $arrayJob[0]['Titlu'] . "</span>
        <div class='flex items-center'>
            <div class='flex items-center mr-2'>
                <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 briefcase'><path fill-rule='evenodd' d='M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z' clip-rule='evenodd'></path><path d='M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z'></path></svg>
                <span class='ml-1 text-gray-600'>" . $arrayJob[0]['TipJob'] . "</span>
            </div>
            <div class='flex items-center mr-2'>
                <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 location-marker'><path fill-rule='evenodd' d='M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z' clip-rule='evenodd'></path></svg>
                <span class='ml-1 text-gray-600'>" . $arrayJob[0]['Oras'] . "</span>
            </div>
        </div>
    </a>
</div>
";
        }
    } else {
        echo "
        <div class='flex flex-col items-center justify-center h-48 max-w-md p-5 mx-auto my-10 bg-white border border-gray-400 rounded-lg shadow appearance-none md:max-w-xl'>
            <svg viewBox='0 0 20 20' fill='#F9A826' class='w-16 h-16 exclamation'>
                <path fill-rule='evenodd' d='M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z' clip-rule='evenodd'></path>
            </svg>
            <p class='text-2xl'>Nu ai aplicat la nici un job!</p>
            <p>Cauta job-uri folosind bara de cautare de pe prima pagina. </p>
        </div>
    ";
    }
} else {
    echo "
        <div class='flex flex-col items-center justify-center h-48 max-w-md p-5 mx-auto my-10 bg-white border border-gray-400 rounded-lg shadow appearance-none md:max-w-xl'>
            <svg viewBox='0 0 20 20' fill='#F9A826' class='w-16 h-16 exclamation'>
                <path fill-rule='evenodd' d='M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z' clip-rule='evenodd'></path>
            </svg>
            <p class='text-2xl'>Nu ti-ai completat CV-ul!</p>
            <p>Pentru a putea aplica la job-uri trebuie sa iti completezi CV-ul mai intai.</p>
        </div>
    ";
}
