<!DOCTYPE html>
<html>
<head>
	<title>PHP DATE</title>
</head>
<body>
	<H1>Current Time</H1>
	<?php
	echo date_default_timezone_get();

	echo"<br>";
	date_default_timezone_set('Asia/Yangon');
	echo date('y/m/d h:i:sa');	

	echo"</br>";
	echo date('Y/m/d',time());
	echo"</br>";


	$yes=strtotime('yesterday');
	echo date('Y/m/d',$yes);
	echo"</br>";


		$toyes=strtotime('tomorrow');
	echo date('Y/m/d',$toyes);
	?>

</body>
</html>