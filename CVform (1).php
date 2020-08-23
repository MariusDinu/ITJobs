<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Completare CV</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body onload="test()">


<h1>Completare CV</h1>
<form id="form">
  <h3> Informații cu caracter personal</h3>
  <p>Nume:</p>
  <input type="text" name="nume">
  <p>Prenume:</p>
  <input type="text" name="prenume">
  <p> Despre mine:</p>
  <textarea name="descriere" cols="50" rows="5"></textarea>
  <p>Data nașterii:</p>
  <input type="text" name="day" placeholder="Ziua">
  <input type="text" name="month" placeholder="Luna">
  <input type="text" name="year" placeholder="Anul">
  <p>Gen:</p>
  <select name="gen" >
  <option>Selectează din listă</option>
  <option>Masculin</option>
  <option>Feminin</option>
</select>
<br>
<h3> Contact</h3>
<p>Email:</p>
<input type="text" name="email">
<p>Număr telefon:</p>
<input type="text" name="phone">
<h3>Experiență profesională</h3>

<div id="jobs"> <h></h>
<p> Limbaje cunoscute:</p>
<input type="text" id="limbaje" name="limbaje" >
<br>
<p> Experiență în limbajul adăugat:</p>

<select name="expLimbaj" id="expLimbaj">
  <option>Începător</option>
  <option>Mediu</option>
  <option>Avansat</option>
</select>
<button onclick="adaugaLimbaj()">Adaugă limbaj</button>
</div>
<p> Joburi anterioare:</p>
<input type="text" id="joburi" name="joburi">
<br>
<p>Experiență la jobul anterior:</p>
<select name="expJob" id="expJob">
  <option>0-2 ani</option>
  <option>2-5 ani</option>
  <option>5-10 ani</option>
  <option>10-15 ani</option>
  <option>15+ ani</option>
</select>
<p> Tehnologii cunoscute:</p>
<input type="text" id="tehnologii" name="tehnologii" >
<br>

<br>
<button type="button" onclick="submitForm()" name="submitCvForm" value="Completează CV">Completeaza CV</button>

</form>

<script>
 
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

var limbajGlobal=0;
function adaugaLimbaj(){
  limbajGlobal=limbajGlobal+1;
  var form=document.getElementById("jobs");
  var nume=document.getElementById("limbaje").value;
  var selected=document.getElementById("expLimbaj");
  var selectedNumber=selected.options[selected.selectedIndex].value;
  console.log(selectedNumber);

  var divJobs = document.createElement("DIV");
  divJobs.setAttribute("id","limbaj"+limbajGlobal);
  var pJobs=document.createElement("P");
  pJobs.setAttribute("id","dateLimbaj"+limbajGlobal);
  
  var completData=nume+" : "+selectedNumber;
  pJobs.setAttribute("value",completData);
  pJobs.innerHTML = completData;
  var buttonDelete=document.createElement("BUTTON");
  buttonDelete.innerHTML="Delete";

  buttonDelete.setAttribute("onclick","deleteLimbaj(this)");
  form.appendChild(divJobs);
  divJobs.appendChild(pJobs);
  divJobs.appendChild(buttonDelete);
  
event.preventDefault();
}


function deleteLimbaj(current)
{
var a=current.parentNode;
console.log(a.id);
a.remove();

event.preventDefault();
}


var limbaj="";
var limbaje="";
function submitForm(){


/*<--doar pentru limbaje -->*/
for(var i=1;i<=limbajGlobal;i++)
{
var limbajId="dateLimbaj"+i;

if(limbaje=="")
{var limbaj=document.getElementById(limbajId).innerHTML;
limbaje=limbaj;
console.log(limbaj);} 
else 
{
var limbaj=limbaje+","+document.getElementById(limbajId).innerHTML;
limbaje=limbaj;
console.log(limbaj);}
}

/* same for joburi */


var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "CvRegister.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("nume=" + nume + "&password=" + password + "&limbaje=" + limbaj);
                xmlhttp.onload = function() {
                  if (this.response == "true") {}else {}
                   
                }
}
</script>
</body>
<?php 

/*if(isset($_POST['submitCvForm']))
{
    
   $_SESSION['limbaje']=$_POST['limbaje'];
   $_SESSION['expLimbaj']=$_POST['expLimbaj'];
   $_SESSION['joburi']=$_POST['joburi'];
   $_SESSION['expJob']=$_POST['expJob'];
   $_SESSION['tehnologii']=$_POST['tehnologii'];
   header("Location:CVScript.php");
  
  
}
*/
?>

</html>