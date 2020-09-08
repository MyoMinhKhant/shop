<!DOCTYPE html>
<html>
<head>
	<title>Exc9</title>
</head>
<body>
	<?php
	$member=['old'=>['name'=>'U Ba','age'=>'30'],
	'young'=>
	[
		'name'=>'Mg Sai','age'=>'20']];

		foreach ($member as $key=>$value)
			{
			echo "$key people info are";
			echo"<br>";
			foreach($value as $k=>$v){
				echo "the $k is $v";
				echo"<br>";
			}

		}
	
		# code...

	?>

</body>
</html>