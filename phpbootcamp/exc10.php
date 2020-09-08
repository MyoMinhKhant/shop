<!DOCTYPE html>
<html>
<head>
	<title>Sorting</title>
</head>
<body>
	<h1>Sorting</h1>
	<?php

	$fruits=array('mango','dragon fruit','stawberry','apple','banana');

	sort($fruits);
	echo"<br><h3>Sorting->sort()</h3>";

	foreach($fruits as $fruits){
		echo "$fruits<br>";
	}

	?>
	<?php
	$fruits=array('mango','dragon fruit','stawberry','apple','banana');

	echo"<br><h3>Sorting->rsort()by Desc</h3>";

	rsort($fruits);
		foreach($fruits as $fruits){
		echo "$fruits<br>";
	}

	?>

	<?php
	$seating=[
		'breakfast'=>['coffee','cake'],'lunch'=>['rice','egg'],'dinner'=>['fried rice','coca cola']];
		ksort($seating);
		echo"<br><h3>Sorting->ksort()Kfey Sorting</h3>";
		foreach($seating as $key=>$value){
			echo "$key are";
			foreach($value as $k=>$v){
				echo "$v";
			}
			echo "<br>";
			}


			krsort($seating);
		echo"<br><h3>Sorting->krsort()Kfey Sorting</h3>";
		foreach($seating as $key=>$value){
			echo "$key are";
			foreach($value as $k=>$v){
				echo "$v";
			}
			echo "<br>";
			}


			echo"<br/>/<br/>";
			$cloth=[
				'shirt'=>'blue','pant'=>'navy',
				'neck'=>'gucci'];
				asort($cloth);
				foreach($cloth as $key=>$value){
					echo "$key is $value<br>";
				}

				arsort($cloth);
				foreach($cloth as $key=>$value){
					echo "$key is $value<br>";
				}
		
		
		?>

</body>
</html>