<!DOCTYPE html>
<html>
<head>
	<title>Exercise 5</title>
</head>
<body>
	<h1>Arithmetic operators</h1>
	<?php
	$var1=4;
	$var2=2;
	echo "Adition:".($var1+$var2)."<br>";

	echo "Minus:".($var1-$var2)."<br>";

	echo "Multi:".($var1*$var2)."<br>";

	echo "Div:".($var1/$var2)."<br>";
	?>

	<h1>Conditional Statement</h1>
	<?php
	$myanmar=50;
	$english=90;
	$mathematics=80;
	if($myanmar>=40&$english>=40&$mathematics>=40){
		if($myanmar>=80 || $english>=80 || $mathematics>=80)
		 {
		 	echo "D";
		 }
		 else{
		 	echo "success";
		 }

		/*echo "Success";*/
	}
	 else {
	   echo "fail";
	}
	
	?>

	<h1>Comapare And Dicisons</h1>
	<?php
	$var3=40;
	$var4=50;
	echo $var3."<br>";
	$var3+=$var4;
	echo $var3."<br>";
	$string1="welcome to MMIT";
	$string1.="attend the class regularly";
	echo $string1."<br>";
	?>

	<h1>Formatting</h1>
	<?php
	$var5=400.54;
	$string2="I am so happy";
	echo sprintf("My pint is %d and %s",$var5,$string2)."<br>";
	echo sprintf("My pint is %0.2f and %s",$var5,$string2);

/*
	%d=integer and %s=string and sprintf=format*/

	?>


</body>
</html>