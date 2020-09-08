<?php
$_Host="localhost";
$_Dname="members_list";
$_User="root";
$_Password="";

try{
	$conn=new PDO("mysql:host=$_Host;dbname=$_Dname",$_User,$_Password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
	echo $e->getmessage();

}
?>