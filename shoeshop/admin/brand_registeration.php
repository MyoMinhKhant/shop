<?php
$brand_name=$_POST['brand_name'];
$brand_code=$_POST['brand_code'];
$data=[
'brand_name'=>$brand_name,'brand_code'=>$brand_code];
/*var_dump($data);*/
require 'connection.php';
$sql="INSERT INTO brands(brand_name,brand_code)VALUES(:brand_name,:brand_code)";
$stmt=$pdo->prepare($sql);
$result=$stmt->execute($data);
/*var_dump($result);*/
if($result){
	header("location:brands.php?status=1");

}else{
	echo "Error!";
}


?>