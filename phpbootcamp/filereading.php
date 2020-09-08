<?php
$file="create.txt";
$handler=fopen($file,'r');
$size=filesize($file);
$data=fread($handler,$size);
echo $data;
?>