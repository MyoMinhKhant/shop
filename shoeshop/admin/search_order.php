<?php
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

require('connection.php');
$data=[
    'start_date'=>$start_date,
    'end_date'=>$end_date
];



$sql="SELECT product_orders.* ,users.user_name from product_orders inner join users on product_orders.user_id=users.id where product_orders.order_date>=:start_date AND product_orders.order_date<=:end_date";

$stmt=$pdo->prepare($sql);
$stmt->execute($data);
$result=$stmt->fetchAll();
$order_list=json_encode($result);
echo $order_list;
?>