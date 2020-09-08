<?php
include('dbconnect.php');
$name=$_POST["name"];
$birthday=$_POST['birthday'];
$gender=$_POST["gender"];
$language_id=$_POST["language"];
$class_id=$_POST["class"];
$profile=$_FILES["photo"];
$logo=$_FILES["logo"];


if($profile["size"]>0){
	/*echo"yes";*/
	$photoname=$profile["name"];
	$photopath="image/".time().$photoname;
	move_uploaded_file($profile["tmp_name"],$photopath);
}
if($logo["size"]>0){
	/*echo"yes";*/
	$logoname=$logo["name"];
	$logopath="image/logo/".time().$logoname;
	move_uploaded_file($logo["tmp_name"],$logopath);
}

	$query="INSERT INTO member(photo,logo,member_name,birthday,gender,language_id,class_id)VALUES(:photo,:logo,:member_name,:birthday,:gender,:language_id,:class_id)";
	$stmt=$conn->prepare($query);
	$stmt->bindParam(':photo',$photopath); 
	$stmt->bindParam(':logo',$logopath); 
	$stmt->bindParam(':member_name',$name); 
	$stmt->bindParam(':birthday',$birthday); 
	$stmt->bindParam(':gender',$gender); 
	$stmt->bindParam(':language_id',$language_id); 
	$stmt->bindParam(':class_id',$class_id); 
	if($stmt->execute()){
		header("location.index.php");
	}else{
			echo "someething wrong";
}
?>