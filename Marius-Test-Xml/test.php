<?php 
session_start();
?>

<form  id="formaIntrebari"  >
    
<?php
$items=simplexml_load_file("test.xml") or die("Error: Cannot create object");
$i=0;

foreach ($items as $item){

    print '</br>';
    $i=$i+1;

    $question =$item[0]->question;
    $ans1=$item[0]->answer1;
    $ans2=$item[0]->answer2;
    $ans3=$item[0]->answer3;
    $ans4=$item[0]->answer4;
   

    print "<div id='divFormQuestion$i'>"; 
    print "<P>";print $question;print "</p>";
    print "<INPUT TYPE = 'Radio' Name ='$i' value= '1' >"; print $ans1;print "";
    print "<INPUT TYPE = 'Radio' Name ='$i' value= '2' >";print $ans2;print "";
    print "<INPUT TYPE = 'Radio' Name ='$i' value= '3' >";print $ans3;print "";
    print"<INPUT TYPE = 'Radio' Name ='$i' value= '4' >"; print $ans4;print "";
    print "</div>";
}

?>


<button  id="submitTest" name="submitTest" onclick="result()"  >Submit</button>
</form>
<script>
var user=<?php $_SESSION['user']?>;
var rate=0;
function result(){
var children = document.getElementById('formaIntrebari').childNodes;
var raspunsuri=document.getElementsByTagName('input');
for(let raspuns of raspunsuri)
if(raspuns.checked)
{
    rate=parseInt(rate)+parseInt(raspuns.value);
     
}
//script pentru trimiterea in baza de date
console.log(rate); 
rate=0;
event.preventDefault();
}
</script>


