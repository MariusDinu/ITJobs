<?php
$items=simplexml_load_file("testMBTI (1).xml") or die("Error: Cannot create object");

$_SESSION["punctaj"]=0;

//print($items->item[0]->question['index']);

?>