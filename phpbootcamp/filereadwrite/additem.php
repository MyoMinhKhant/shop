<?php
/*$data=$_SERVER["REQUEST_URI"];
var_dump($data);
die();*/
$name=$_POST["name"];
$birthday=$_POST["birthday"];
$gender=$_POST["gender"];
$language=$_POST["language"];

$profile=$_FILES["photo"];
/*echo $profile["name"];*/

if($profile["size"]>0){
	/*echo"yes";*/
	$photoname=$profile["name"];
	$photopath="image/".time().$photoname;
	move_uploaded_file($profile["tmp_name"],$photopath);
}

$logo=$_FILES["logo"];
if($logo["size"]>0){
	/*echo"yes";*/
	$logoname=$logo["name"];
	$logopath="image/logo/".time().$logoname;
	move_uploaded_file($logo["tmp_name"],$logopath);
}
$member=['profile'=>$photopath,'logo'=>$logopath,'name'=>$name,'birthday'=>$birthday,'gender'=>$gender,'Language'=>$language,];
var_dump($member);
$file=file_get_contents('list.json');
$file_array=json_decode($file);
if(!$file_array){
	$file_array=[];

}
array_push($file_array,$member);
$file_string=json_encode($file_array,JSON_PRETTY_PRINT);
file_put_contents("list.json",$file_string)?
header('location:index.php'):print("fail to add");
?>