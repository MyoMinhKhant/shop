<?php
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_brand_id=$_POST['product_brand_id'];
$product_category_id=$_POST['product_category_id'];
$gender=$_POST['gender'];
$product_description=$_POST['product_description'];
$product_code=$_POST['product_code'];
$product_photo_name=$_FILES['product_photo']['name'];
/*echo "$product_name,$product_price,$product_brand_id,$product_category_id,$product_photo_name,$product_code,$gender,$product_description";*/

/*Get file extension*/
$ext=pathinfo($product_photo_name,PATHINFO_EXTENSION);
echo  $product_photo_name;
echo "<br>";
echo $ext;
$my_photo_name=date('dmYhis').uniqid().".".$ext;    /* not photo name overwrite*/
echo "<br> $my_photo_name";
$file_path="images/".$my_photo_name;
echo "<br> $file_path";
require 'connection.php';

if(move_uploaded_file($_FILES['product_photo']['tmp_name'],$file_path))
{
	$sql="INSERT INTO products(product_name,product_code,product_brand_id,product_category_id,product_gender_id,product_price,product_photo,product_description)VALUES(:product_name,:product_code,:product_brand_id,:product_category_id,:product_gender_id,:product_price,:product_photo,:product_description)";
	$data=[
		'product_name'=>$product_name,'product_code'=>$product_code,'product_brand_id'=>$product_brand_id,'product_category_id'=>$product_category_id,'product_gender_id'=>$gender,'product_price'=>$product_price,'product_photo'=>$file_path,'product_description'=>$product_description];

		$stmt=$pdo->prepare($sql);
		$result=$stmt->execute($data);
		if($result){
			header("location:products.php?status=1");
		}else{
			echo "Error in db insert!";
		}
	}
else{
	echo "Error";
}
?>