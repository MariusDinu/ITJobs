<?php 
session_start();
?>

<form  id="formaIntrebari"  >
    
<?php
$items=simplexml_load_file("testConcentrareFINAL.xml") or die("Error: Cannot create object");
$i=0;

foreach ($items as $item){
if($i<5)
 {   print '</br>';
    $i=$i+1;

    $question =$item[0]->question;
    $ans1=$item[0]->answer1;
    $ans2=$item[0]->answer2;
    $ans3=$item[0]->answer3;
    $ans4=$item[0]->answer4;
   

    print "<div id='divFormQuestion$i'>"; 
    print "<P>$i.";print $question;print "</p>";
    print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '1' >"; print $ans1;print "</p>";
    print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '2' >";print $ans2;print "</p>";
    print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '3' >";print $ans3;print "</p>";
    print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '4' >"; print $ans4;print "</p>";
    print "</div>";}
}

?>

<p id="errorTest"></p>
<button  id="submitTest" name="submitTest" onclick="result()"  >Submit</button>
</form>
<script>
<?php 
if(isset($_SESSION['user'])){ $a=$_SESSION['user'];print "var user=$a";}
?>
var rate=0;
function result(){
var children = document.getElementById('formaIntrebari').childNodes;
var raspunsuri=document.getElementsByTagName('input');
if(parseInt(checkAllInput())==parseInt(raspunsuri.length/4))
{for(let raspuns of raspunsuri)
if(raspuns.checked)
{
    rate=parseInt(rate)+parseInt(raspuns.value);
     
}
document.getElementById('errorTest').innerHTML="";
//script pentru trimiterea in baza de date
console.log(rate); 

if(rate<10)
{window.alert("Iti este foarte greu sa te concentrezi cand factorii externi sunt intensi. Iti place sa lucrezi in liniste si armonie.");}
else if (rate>15)
    {window.alert("Cine spune ca lucrurile trebuie facute pe rand? Esti cel mai eficient sub stres cand trebuie sa fii multifunctional. Tine-o tot asa!");}
else {window.alert("Te descurci sa iti imparti cerintele astfel incat sa nu trebuiasca sa faci 2 lucruri simultan, insa nici asta nu ar fi o mare problema.");}
rate=0;}
else {document.getElementById('errorTest').innerHTML="completeaza tot!";}
event.preventDefault();
}



function checkAllInput(){
var check=0;
var raspunsuri=document.getElementsByTagName('input');

for(let raspuns of raspunsuri)
if(raspuns.checked)
{
check=parseInt(check)+1;
}
return check;
}
</script>
