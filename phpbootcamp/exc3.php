<!DOCTYPE html>
<html>
<head>
	<title>PHP String</title>
</head>
<body>
	<h1>Getting String Length </h1>
	<?php

	$name="Myo Minh Khant";
	$length=strlen($name);

	echo $length;
	?>


	<h1>Getting Word Count</h1>
	<?php
	$greet="Hello World";
	$Word_count=str_word_count($greet);
	echo $Word_count;
	?>



	<h1>Compare Two String</h1>
	<?php
	$str1="John";
	$str2="Smith";
	echo strcasecmp($str2,$str1)>0?"big":"small";
	?>

	<h1>Cutting Out of String</h1>
	<?php
	$str4="photo.jpg";
	$var1=substr($str4,-4);
	$myname="changephoto";
	$fullname=$myname.$var1;
	echo $fullname;
	?>

	<h1>Replacing String</h1>
	<?php
	$student_name="Smith";
	$mystudent_name=str_replace('Smith','Harry',$student_name);
	echo $mystudent_name;
	?>

	<h1>Transformation of string</h1>
	<?php
	$str3="Tomorrow is very very happy holiday";
	echo strtoupper($str3);
	echo"<br>";
	echo strtolower($str3);
	?>

</body>
</html>