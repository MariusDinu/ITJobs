<?php
var_dump($_FILES);
$email=$_POST['user'];
$path='C:\xampp\htdocs\ITJobs\Employer\uploads/'.$email;
mkdir($path, 0777, true);
$name=basename($_FILES["file"]["name"]);$targetPath=$path."/".$name;

echo $targetPath;
if(move_uploaded_file($_FILES["file"]["tmp_name"],"$targetPath"))
echo "true";
else echo "false";

?>