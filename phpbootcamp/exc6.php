<!DOCTYPE html>
<html>
<head>
	<title>looping</title>
</head>
<body>

</body>
<h1>For looping</h1>
<?php
for($i=1;$i<=5;$i++)
{
	echo $i."<br>";
}?>

<h1>While Looping</h1>
<?php

$i=1;
while ($i<=5){
	if($i==3){
		break;
	}
	else
		{
			echo $i."<br>";
			$i++;
		}
	}?>

	<h1>Do While</h1>
	<?php
	$e=1;
	{
	do{
		echo $e."<br>";
		$e++;
	}
	while($e<=5);
	}


	?>
</html>