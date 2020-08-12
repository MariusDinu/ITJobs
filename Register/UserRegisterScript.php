<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Check Register</title>
</head>
<body>
<?php
include "..\DB.php";



/* preluam datele preluate din forma de pe pagina anterioara */
$email=$_SESSION['inputEmailUserSession'];


$password=md5( $_SESSION['inputPasswordUserSession']);

$phone=$_SESSION['inputPhoneUserSession'];
$code=$_SESSION['code'];
echo $code;
$DB=new DB();
$sqlInsertCommand="INSERT INTO `user`(`Email`,`PasswordU`) VALUES ('$email','$password')";

$q=$DB::obtine_conexiune()->prepare($sqlInsertCommand);

if($q->execute())
{?><form id='formCodeCheck' method='post' ><p>Te-ai inregistrat cu succes! Pentru activarea contului vei avea nevoie de codul primit pe telefon:</p>
<p>Introdu codul aici:</p>
<input name='inputCodeCheck' id='inputCodeCheck'> </input>
<input name='buttonCodeCheck' type='submit' value='buttonCodeCheck' ></form><?php

}   
else {?>
<form id='formCodeCheck' method='post' ><p>Contul a fost deja creat! Este nevoie doar de activare.</p>
<p>Introdu codul aici:</p>
<input name='inputCodeCheck' id='inputCodeCheck'> </input>
<input name='buttonCodeCheck' type='submit' value='buttonCodeCheck' ></form>
<?php

}
if(isset($_POST['buttonCodeCheck']))
{
if(isset($_POST['inputCodeCheck'])&&!empty($_POST['inputCodeCheck']))
         {   echo $_POST['inputCodeCheck'];
             echo $code;
            
            if($_POST['inputCodeCheck']!=$code) 
               {} else {header("Location: LoginUser.php"); session_destroy();  }    
        }
}
?>
<?php

?>

</body>

</html>