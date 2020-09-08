<?php
$user_id=$_POST['user_id'];
$mycart=$_POST['mycart'];
$mycart_obj=json_decode($mycart);
/*var_dump($mycart_obj->product_list);*/

$product_list=$mycart_obj->product_list;
date_default_timezone_set('Asia/Rangoon');
$voucherid=date('dmy-his').uniqid();
/*var_dump($voucherid);*/


require 'admin/connection.php';
foreach ($product_list as $key => $product) 
{

	$product_id=$product->id;
	$product_price=$product->product_price;
	$product_quantity=$product->quantity;
$data=[
'voucherid'=>$voucherid,
'product_id'=>$product_id,
'product_price'=>$product_price,
'product_quantity'=>$product_quantity
];
$sql="INSERT INTO product_orders_detail(voucherid,product_id,product_price,product_quantity)VALUES(:voucherid,:product_id,:product_price,:product_quantity)";
$stmt=$pdo->prepare($sql);
$result=$stmt->execute($data);
if(!$result){
	echo "Error";
}

	# code...
}
$today=date('Y-m-d');
$data2=[
'user_id'=>$user_id,
'voucherid'=>$voucherid,
'order_date'=>$today];
$sql="INSERT INTO product_orders(voucherid,user_id,order_date)VALUES(:voucherid,:user_id,:order_date)";
$stmt=$pdo->prepare($sql);
$result=$stmt->execute($data2);
if(!$result){
	echo "Error2";
}else{
	echo json_encode($data2);
}



?>