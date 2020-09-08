<?php
$file="create.txt";
$handler=fopen($file,"w");
fwrite($handler,
"hello bootcampers");
fclose($handler);
?>