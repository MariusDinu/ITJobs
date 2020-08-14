<!DOCTYPE html>
<html>
<head>
<title>Completare CV</title>
<script type="text/javascript">
    /*
    functia aceasta pune un placeholder random pentru fiecare textarea atunci cand dam refresh

    */
function test(){
  var items = Array("Exemplu: PHP - nivel mediu","Exemplu: C++ - avansat", "Exemplu: Java - Începător");
  var item = items[Math.floor(Math.random()*items.length)];
  document.getElementById("limbaje").placeholder=item;

  var jobs = Array("Exemplu: IT-Labs - full stack developer - 2 ani","Exemplu: student", "Exemplu: Absolvent");
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
<textarea id="limbaje" name="limbaje" cols="50" rows="5"></textarea>

<br>

<p> Joburi anterioare:</p><br>
<textarea id="joburi" name="joburi"  cols="50" rows="5"></textarea>
<br>
<p> Tehnologii cunoscute:</p><br>
<textarea id="tehnologii" name="tehnologii" cols="50" rows="4"></textarea>
<br>
<input type="submit" name="submit" value="Completează CV">
</form>
<?php
if()


?>
</body>


</html>