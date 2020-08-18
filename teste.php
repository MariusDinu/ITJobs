<!DOCTYPE html>
<html>
<head>
<title>test</title>

</head>
<body >
<?php
$xml=simplexml_load_file("testMBTI.xml") or die("Error: Cannot create object");
foreach ($xml->children() as $questions) {
   echo $questions->question."<br>";
   echo "<input type='radio'  name='answer'>".$questions->answer."<br>";
   echo "<input type='radio'  name='answer'>".$questions->answer2."<br>";
   echo "<input type='radio'  name='answer'>".$questions->answer3."<br>";
   echo "<input type='radio'  name='answer'>".$questions->answer4."<br>";
}
?>

</body>

</html>