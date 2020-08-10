<!DOCTYPE html>
<html>
<head>
<title>Check Register</title>
</head>
<body>
<?php
include "..\DB.php";

$DB=new DB();
session_start();
/* preluam datele preluate din forma de pe pagina anterioara */
$temp=$_SESSION['POST'];

$email=$temp['inputEmailUser'];

$password=md5($temp['inputPasswordUser']);

$phone=$temp['inputPhoneUser'];

$sqlInsertCommand="INSERT INTO `user`(`Email`,`PasswordU`) VALUES ('$email','$password')";

$q=$DB::obtine_conexiune()->prepare($sqlInsertCommand);

if($q->execute())
{echo "Te-ai inregistrat cu succes! Pentru activarea contului vei avea nevoie de codul primit pe telefon:";
 echo "Introdu codul aici:";
 echo "<input> </input>";
 echo "<input type='submit'>";
}   
else echo "Eroare Sql";
?>

</body>

</html>