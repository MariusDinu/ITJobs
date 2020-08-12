<!DOCTYPE html>
<html>
<head>
<title>Check Register</title>
</head>
<body>
<?php
include "..\DB.php";


session_start();
/* preluam datele preluate din forma de pe pagina anterioara */
$email=$_SESSION['inputEmailUserSession'];
$_COOKIE=rand(1000,9999);
echo $_COOKIE;
$password=md5( $_SESSION['inputPasswordUserSession']);
echo $password;
echo $email;
$phone=$_SESSION['inputPhoneUserSession'];

$DB=new DB();
$sqlInsertCommand="INSERT INTO `user`(`Email`,`PasswordU`) VALUES ('$email','$password')";

$q=$DB::obtine_conexiune()->prepare($sqlInsertCommand);

if($q->execute())
{?><div id='formCodeCheck' <?php if(isset($condition)) if($condition==true) echo 'asdasd'; ?> ><p>Te-ai inregistrat cu succes! Pentru activarea contului vei avea nevoie de codul primit pe telefon:</p>
<p>Introdu codul aici:</p>
<input name='inputCodeCheck' id='inputCodeCheck'> </input>
<input name='buttonCodeCheck' type='submit' ></div><?php
}   
else echo "Eroare Sql";


?>

</body>
<?php 
if(isset($_POST['buttonCodeCheck']))
{
if(isset($_POST['inputCodeCheck'])&&!empty($_POST['inputCodeCheck']))
         { echo "Cont activat!"; $condition=true; 
           session_destroy();
        //header("Location: LoginUser.php");       
        }
}

?>
</html>