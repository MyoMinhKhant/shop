<?php
$category_name=$_POST['category_name'];
$category_code=$_POST['category_code'];
$data=[
'category_name'=>$category_name,'category_code'=>$category_code];
/*var_dump($data);*/
require 'connection.php';
$sql="INSERT INTO categories(category_name,category_code)VALUES(:category_name,:category_code)";
$stmt=$pdo->prepare($sql);
$result=$stmt->execute($data);
/*var_dump($result);*/
if($result){
	header("location:categories.php?status=1");

}else{
	echo "Error!";
}


?>