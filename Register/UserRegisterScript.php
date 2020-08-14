<?php session_start(); /*pornim sesiunea */
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

//afisam codul pentru noi cat lucram la proiect 
echo $code;


$DB=new DB();
$sqlInsertCommand="INSERT INTO `user`(`Email`,`PasswordU`) VALUES ('$email','$password')";

$q=$DB::obtine_conexiune()->prepare($sqlInsertCommand);

/* daca inserarea reuseste inseamna ca contul abia a fost creat si este nevoie de activare */
if($q->execute())
{?><form id='formCodeCheck' method='post' ><p>Te-ai inregistrat cu succes! Pentru activarea contului vei avea nevoie de codul primit pe telefon:</p>
<p>Introdu codul aici:</p>
<input name='inputCodeCheck' id='inputCodeCheck'> </input>
<input name='buttonCodeCheck' type='submit' value='buttonCodeCheck' ></form><?php

}   /* daca da fail inseamna ca emailul este deja in baza noastra si contul are nevoie de activare, trebuie sa adaug o conditie pentru a face diferenta dintre conturile activate si neactivate */
else {?>

<form id='formCodeCheck' method='post'  ><p>Contul a fost deja creat! Este nevoie doar de activare.</p>
<p>Introdu codul aici:</p>
<input name='inputCodeCheck' id='inputCodeCheck'> </input>
<input name='buttonCodeCheck' type='submit' value='buttonCodeCheck' ></form>
<?php

}
if(isset($_POST['buttonCodeCheck']))
{
if(isset($_POST['inputCodeCheck'])&&!empty($_POST['inputCodeCheck']))
         {   
            if($_POST['inputCodeCheck']!=$code) /* daca codurile sunt la fel ne redirectioneaza catre pagina de login si se sterg salvarile */
               { echo "Cod gresit! Reincearca!"; } else {header("Location: LoginUser.php"); session_destroy();  }    
        }
}
?>


</body>

</html>