<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<h1>Index Array</h1>
	<?php

$members=[[11,12,13],14,15,[16,17,18,[19,20,21]]];
echo $members[3][3][1];
?>

<h1>Associated Array</h1>
<?php
$student=['name'=>'Mg Mg','age'=>23,'gender'=>'male','language'=>['design'=>'html','script'=>'php','framework'=>'larvel']];
/*
var_dump($student);*/
echo $student['name']."/";
echo $student['age']."/";
echo $student['gender']."/";
echo $student['language']['design']."/";
echo $student['language']['framework']."<br>";

echo array_key_exists('age',$student)?$student['age']:"not found"."<br>";
echo array_key_exists('address',$student)?$student['address']:"not found";


?>

</body>
</html>