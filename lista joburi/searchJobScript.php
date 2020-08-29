<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it-jobs</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
</head>
<body>

<?php
include "../DB.php";
$DB=new DB();
$job=$_POST['job']	;			
$oras=$_POST['oras'];		

if(empty($oras)){
$sql="SELECT * FROM job WHERE Titlu LIKE '%$job%'";

}
else
	{$sql="SELECT * FROM job WHERE Titlu LIKE '%$job%' AND Oras LIKE '%$oras%'";
	
}

$q=$DB::obtine_conexiune();
$lista=$q->prepare($sql);	
$lista->execute();
//$numar=$q->query($sql_number);
//$numarJoburi=$numar->fetch_array(MYSQLI_NUM);
//echo $numarJoburi[0];
foreach ($q->query($sql) as $row) {
	//echo "<button id='".$row['ID']."'onclick='aplica(this)'>Aplica</button>";
	echo "
            <div
                class='h-auto max-w-4xl mx-auto my-5 bg-white border border-gray-400 rounded-lg shadow appearance-none'>
                <ul>
                    <li id='jobNumber' class='flex items-center justify-between p-5 border-b-2 border-gray-400 hover:bg-gray-100'>
                        <a href='#'>
                            
                            <span class='text-lg text-primary'>".$row['Titlu']."</span>
                            <div class='flex items-center'>
                                <!-- Company -->
                                <div class='flex items-center mr-2'>
                                    <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 briefcase'><path fill-rule='evenodd' d='M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z' clip-rule='evenodd'></path><path d='M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z'></path></svg>
                                    <span class='ml-1 text-gray-600'>".$row['Departament']."</span>
                                </div>
                                <!-- Location -->
                                <div class='flex items-center mr-2'>
                                    <svg viewBox='0 0 20 20' fill='#ED7D26' class='inline-block w-4 h-4 location-marker'><path fill-rule='evenodd' d='M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z' clip-rule='evenodd'></path></svg>
                                    <span class='ml-1 text-gray-600'>".$row['Oras']."</span>
                                </div>
                            </div>
                        </a>
                        <button class='px-4 py-2 font-bold text-white rounded-full bg-ternary hover:bg-primary' onclick='aplica(`".$_SESSION['user']."`,`".$row['ID']."`)'>Aplica acum</button>
                    </li></ul></div>";
}

echo "</div>";
?>
</body>
</html>