<?php
require 'admin/connection.php';
$id=$_POST['id'];
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];
$user_password=$_POST['user_password'];
$data=['id'=>$id,'user_name'=>$user_name,'user_email'=>$user_email,'user_phone'=>$user_phone,'user_password'=>$user_password];
$sql=" UPDATE users SET user_name=:user_name,user_email=:user_email,user_phone=:user_phone,user_password=:user_password WHERE id=:id";
$stmt=$pdo->prepare($sql);
$result=$stmt->execute($data);
/*var_dump($result);*/
if($result){
	header("location:index.php?status=2");
	}else{
		echo "Error";
	
}
?>