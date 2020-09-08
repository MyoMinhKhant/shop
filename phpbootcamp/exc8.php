<!DOCTYPE html>
<html>
<head>
	<title>Array looping</title>
</head>
<body>
	<h1>Loopoing with array</h1>
	<?php
$student=['name'=>'Mg Mg','age'=>23,'gender'=>'male','language'=>['design'=>'html','script'=>'php','framework'=>'larvel']];


	foreach ($student as $key=>$value) {
		if(is_array($value)){
			foreach($value as $k=>$v){
				echo "$k is $v";
				echo"<br>";
			}

		}else
		{
			echo "$key is $value";
			echo"<br>";
		}

		# code...
	}
?>

</body>
</html>