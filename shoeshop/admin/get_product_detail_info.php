<?php
$id=$_POST['id'];
require 'connection.php';
$sql='SELECT p.*,c.category_name as category_name,b.brand_name as brand_name,g.gender_name as gender_name from products p INNER JOIN categories c ON p.product_category_id=c.id INNER JOIN brands b ON p.product_brand_id=b.id INNER JOIN gender g ON p.product_gender_id=g.id where p.id=:id';
$data=['id'=>$id];
$stmt=$pdo->prepare($sql);
$stmt->execute($data);
$result=$stmt->fetchALL();
/*
convert array to json*/
$product_info=json_encode($result[0]);
echo $product_info;
?>