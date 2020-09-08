<?php
include('dbconnect.php');
$id=$_GET['id'];
echo $id;
$query="DELETE FROM member WHERE id=:id";
	$stmt=$conn->prepare($query);
	$stmt->bindParam(':id',$id);
	if($stmt->execute()){
		header('Location:index.php');

	}else{
		echo "something wrong";
	}
?>