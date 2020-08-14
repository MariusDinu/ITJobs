<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Completare CV</title>
<script type="text/javascript">
    /*
    functia aceasta pune un placeholder random pentru fiecare textarea atunci cand dam refresh

    */
function test(){
  var items = Array("Exemplu: PHP ","Exemplu: C++", "Exemplu: Java");
  var item = items[Math.floor(Math.random()*items.length)];
  document.getElementById("limbaje").placeholder=item;

  var jobs = Array("Exemplu: Full stack developer","Exemplu: Student", "Exemplu: Absolvent");
  var item2=jobs[Math.floor(Math.random()*jobs.length)];
  document.getElementById("joburi").placeholder=item2;

  var tech = Array("Exemplu: Django", "Exemplu: ReactJS", "Exemplu: UXPin");
  var item3= tech[Math.floor(Math.random()*tech.length)];
  document.getElementById("tehnologii").placeholder=item3;
}
</script>
</head>
<body onload="test()">


<h1>Completare CV</h1>
<form  method="post" action="CVScript.php">
<p> Limbaje cunoscute:</p><br>
<input type="text" id="limbaje" name="limbaje" ></input>
<br>
<p> Experiență în limbajul adăugat:</p>
<select name="expLimbaj" id="expLimbaj">
  <option>Începător</option>
  <option>Mediu</option>
  <option>Avansat</option>
</select>
<p> Joburi anterioare:</p><br>
<input type="text" id="joburi" name="joburi"></input>
<br>
<p>Experiență la jobul anterior:</p>
<select name="expJob" id="expJob">
  <option>0 ani</option>
  <option>1 an</option>
  <option>2 ani</option>
  <option>3 ani</option>
  <option>4 ani</option>
  <option>5 ani</option>
</select>
<p> Tehnologii cunoscute:</p><br>
<input type="text" id="tehnologii" name="tehnologii" ></input>
<br>
<input type="submit" name="submitCvForm" value="Completează CV">
</form>
</body>
<?php 
if(isset($_POST['submitCvForm']))
{
    
   $_SESSION['limbaje']=$_POST['limbaje'];
   $_SESSION['expLimbaj']=$_POST['expLimbaj'];
   $_SESSION['joburi']=$_POST['joburi'];
   $_SESSION['expJob']=$_POST['expJob'];
   $_SESSION['tehnologii']=$_POST['tehnologii'];
   header("Location:CVScript.php");
  
  
}

?>

</html>