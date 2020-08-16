<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Adăugare Job</title>

</head>
<body >


<h1>Completare CV</h1>
<form  method="post" >
<p>Titlu job:</p><br>
<input type="text" name="job" id="job">
<br>

<p>Oraș:</p><br>
<input type="text" name="oras" itd="oras">
<br>

<p>Nivel studii:</p><br>
<input type="text" name="studii" id="studii"><br>

<p>Departament:</p><br>
<input type="text" name="dep" id="dep"><br>

<p>Salariu:</p><br>
<input type="text" name="salariu" id="salariu"><br>

<p> Nivel carieră:</p><br>
<input type="text" name="cariera" id="cariera"><br>

<p>Tip job:</p><br>
<input type="text" name="tip" id="tip"><br>

<p> Permis conducere:</p><br>
<input type="text" name="permis" id="permis"><br>

<p> Candidatul ideal:</p><br>
<textarea id="candidat" name="candidat" rows="10" cols="50"></textarea><br>

<p> Descrierea jobului:</p><br>
<textarea id="descriere" name="descriere" rows="10" cols="50">
</textarea><br>

<p> Descrierea companiei:</p><br>
<textarea id="descriereC" name="descriereC" rows="10" cols="50"></textarea><br>

<input type="submit" name="submit" value="Adaugă job">
</form>
</body>
<?php 
if(isset($_POST['submit']))
{
    
   $_SESSION['job']=$_POST['job'];
   $_SESSION['oras']=$_POST['oras'];
   $_SESSION['studii']=$_POST['studii'];
   $_SESSION['dep']=$_POST['dep'];
   $_SESSION['salariu']=$_POST['salariu'];
   $_SESSION['cariera']=$_POST['cariera'];
   $_SESSION['tip']=$_POST['tip'];
   $_SESSION['permis']=$_POST['permis'];
   $_SESSION['candidat']=$_POST['candidat'];
   $_SESSION['descriere']=$_POST['descriere'];
   $_SESSION['descriereC']=$_POST['descriereC'];
   header("Location:addJobScript.php");
  
  
}

?>

</html>