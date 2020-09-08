<?php
$id=$_GET['id'];
/*echo $id;*/
$file=file_get_contents('list.json');
$file_array=json_decode($file,true);
unset($file_array[$id]);
$file_String=json_encode($file_array,JSON_PRETTY_PRINT);
echo file_put_contents('list.json',$file_String)? "success":"failed";
?>