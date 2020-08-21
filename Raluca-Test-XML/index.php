<?php

include "items.php";

foreach ($items as $item){
    print '</br>';
  
    //print($item->question);
    $question =$item[0]->question;
    $ans1=$item[0]->answer1;
   // $qindex = $_POST[$item[0]->question['index']]; 

    include "form.php";
}

?>

<input type="submit" value="Submit">
<P><INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Click here to vote" getPunctaj() >
<INPUT TYPE = "Hidden" id="id1" Name = "h1" VALUE = <?PHP print $_SESSION["punctaj"]; ?>>

<script language="JavaScript" type="text/javascript">
function getPunctaj(){

    <?PHP $_SESSION["punctaj"] = 10; ?>
    <?PHP print $_SESSION["punctaj"]; ?>
    //$('#id1').setAttribute('type','visible');
    allert("A INTRAT");

}
</script>

