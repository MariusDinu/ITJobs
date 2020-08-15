<?php
include "..\..\DB.php"

?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>


<form method="POST"> 
<label>Email:</label>
<input id="inputEmailLoginUser" name="inputEmailLoginUser"></input>
<label>Password:</label>
<input id="inputPasswordLoginUser" name="inputPasswordLoginUser"></input>
<button id="buttonLoginUser" name="buttonLoginUser" type="submit">Login</button>


<?php 
if(isset($_POST['buttonLoginUser']))
{
$email=$_POST['inputEmailLoginUser'];  
$password=$_POST['inputPasswordLoginUser'];
$md5Password=md5($password);


$DB=new DB();
$sqlSearchEmail="SELECT Email FROM `user` WHERE Email='$email' and PasswordU='$md5Password'";

$conn=$DB::obtine_conexiune();
$prepare=$conn->prepare($sqlSearchEmail);
$prepare->execute();
$values=$prepare->fetchAll();

if($prepare->rowCount()==1)
{
  header("Location: ..\..\UserPage.php");
}
else 
{
    echo "Acest email nu exista! Este nevoie de inregistrare!";
}
}
?>
</form>


</body>
</html>