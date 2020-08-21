<?php 
session_start();
?>

<form  id="formaIntrebari"  >
    
<?php
$items=simplexml_load_file("testLogicaSecventiala.xml") or die("Error: Cannot create object");
$i=0;

foreach ($items as $item){
if($i<5)
 {   print '</br>';
    $i=$i+1;

    $question =$item[0]->question;
    $ans1=$item[0]->answer1;
    $ans2=$item[0]->answer2;
    $ans3=$item[0]->answer3;
    print "<div id='divFormQuestion$i'>"; 
    print "<P>$i.";print $question;print "</p>";
    if($item[0]->answer1->attributes() == 'y')
        {$ans=$item[0]->answer1;
        print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '";print $ans['correct'];print "' >"; print $ans1;print "</p>";
        print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '' >";print $ans2;print "</p>";
        print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '' >";print $ans3;print "</p>";
        }
    else if ($item[0]->answer2->attributes() == 'y')
        {$ans=$item[0]->answer2;
            print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '' >"; print $ans1;print "</p>";
            print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '";print $ans['correct'];print "' >";print $ans2;print "</p>";
            print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '' >";print $ans3;print "</p>";
        }
    else {$ans=$item[0]->answer3;
        print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '' >"; print $ans1;print "</p>";
        print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '' >";print $ans2;print "</p>";
        print "<p><INPUT TYPE = 'Radio' Name ='$i' value= '";print $ans['correct'];print "' >";print $ans3;print "</p>";
    }
    print $ans;
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


if(parseInt(checkAllInput())==parseInt(raspunsuri.length/3))
{for(let raspuns of raspunsuri)
if(raspuns.checked && raspuns.value == 'y')
    {
    raspuns.parentNode.style.background="green";
    rate=parseInt(rate)+1;
    } 
else{
    if(raspuns.value == 'y')
    
    raspuns.parentNode.style.background="green";}     



document.getElementById('errorTest').innerHTML="";
//script pentru trimiterea in baza de date
console.log(rate); 
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
