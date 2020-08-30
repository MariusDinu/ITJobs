<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Completare CV</title>

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

<div id="limbaje"> <h></h>
<p> Limbaje cunoscute:</p>
<input type="text" id="limbajeNume" name="limbaje" >
<br>
<p> Experiență în limbajul adăugat:</p>

<select name="expLimbaj" id="expLimbaj">
  <option>Începător</option>
  <option>Mediu</option>
  <option>Avansat</option>
</select>
<button type="button" onclick="adaugaLimbaj()">Adaugă limbaj</button>
</div>
<div id="jobs">
<p> Joburi anterioare:</p>
<input type="text" id="joburiNume" name="joburi">
<br>
<p>Experiență la jobul anterior:</p>
<select name="expJob" id="expJob">
  <option>0-2 ani</option>
  <option>2-5 ani</option>
  <option>5-10 ani</option>
  <option>10-15 ani</option>
  <option>15+ ani</option>
</select>
<button type="button" onclick="adaugaJobCV()">Adaugă job</button>
</div>
<div id="tehnologii">
<p> Tehnologii cunoscute:</p>
<input type="text" id="tehnologii" name="tehnologii" >
<br>
<button type="button" onclick="adaugaTehnologii()">Adaugă job</button>
</div>
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
  document.getElementById("limbajeNume").placeholder=item;

  var jobs = Array("Exemplu: Full stack developer","Exemplu: Student", "Exemplu: Absolvent");
  var item2=jobs[Math.floor(Math.random()*jobs.length)];
  document.getElementById("joburiNume").placeholder=item2;

  var tech = Array("Exemplu: Django", "Exemplu: ReactJS", "Exemplu: UXPin");
  var item3= tech[Math.floor(Math.random()*tech.length)];
  document.getElementById("tehnologii").placeholder=item3;
}

var limbajGlobal=0;
function adaugaLimbaj(){
  limbajGlobal=limbajGlobal+1;
  var form=document.getElementById("limbaje");
  var nume=document.getElementById("limbajeNume").value;
  var selected=document.getElementById("expLimbaj");
  var selectedNumber=selected.options[selected.selectedIndex].value;
  console.log(selectedNumber);

  var divLimbaj = document.createElement("DIV");
  divLimbaj.setAttribute("id","limbaj"+limbajGlobal);
  var pLimbaj=document.createElement("P");
  pLimbaj.setAttribute("id","dateLimbaj"+limbajGlobal);
  
  var completData=nume+" : "+selectedNumber;
  pLimbaj.setAttribute("value",completData);
  pLimbaj.innerHTML = completData;
  var buttonDelete=document.createElement("BUTTON");
  buttonDelete.innerHTML="Delete";

  buttonDelete.setAttribute("onclick","deleteLimbaj(this)");
  form.appendChild(divLimbaj);
  divLimbaj.appendChild(pLimbaj);
  divLimbaj.appendChild(buttonDelete);
  
event.preventDefault();
}


function deleteLimbaj(current)
{
var a=current.parentNode;
console.log(a.id);
a.remove();

event.preventDefault();
}

var jobGlobal=0;
function adaugaJobCV(){
  jobGlobal=jobGlobal+1;
  var formJob=document.getElementById("jobs");
  var numeJob=document.getElementById("joburiNume").value;
  var selectedJob=document.getElementById("expJob");
  var selectedNumberJob=selectedJob.options[selectedJob.selectedIndex].value;
  console.log(selectedNumberJob);

  var divJobs = document.createElement("DIV");
  divJobs.setAttribute("id","job"+jobGlobal);
  var pJobs=document.createElement("P");
  pJobs.setAttribute("id","dateJob"+jobGlobal);
  
  var completDataJob=numeJob+" : "+selectedNumberJob;
  pJobs.setAttribute("value",completDataJob);
  pJobs.innerHTML = completDataJob;
  var buttonDeleteJob=document.createElement("BUTTON");
  buttonDeleteJob.innerHTML="Delete";

  buttonDeleteJob.setAttribute("onclick","deleteJob(this)");
  formJob.appendChild(divJobs);
  divJobs.appendChild(pJobs);
  divJobs.appendChild(buttonDeleteJob);
  
  event.preventDefault();
}


function deleteJob(current)
{
var aj=current.parentNode;
console.log(aj.id);
aj.remove();

event.preventDefault();
}

var limbaj="";
var limbaje="";
function submitForm(){


/*<--doar pentru limbaje -->*/
var i=1;
while(i<=limbajGlobal)
{
var limbajId="dateLimbaj"+i;
console.log(limbajId);
if(document.getElementById(limbajId)!=null)
{if(limbaje=="")
{var limbaj=document.getElementById(limbajId).innerHTML;
limbaje=limbaj;
console.log(limbaj);} 
else 
{
var limbaj=limbaje+","+document.getElementById(limbajId).innerHTML;
limbaje=limbaj;
console.log(limbaj);}
}
i=i+1;
}
limbaje="";

function adaugaTehnologii(){}


/* same for joburi */


}






</script>
</body>
<?php 


?>

</html>