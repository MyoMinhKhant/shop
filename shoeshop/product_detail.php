<!doctype html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
 <?php require 'nav.php'; ?>
 <main role="main">
  <?php
  $id=$_REQUEST['id'];
  require 'admin/connection.php';
  $data=['id'=>$id];
  $sql="SELECT p.*,c.category_name as category_name,b.brand_name as brand_name,g.gender_name as gender_name from products p INNER JOIN categories c ON p.product_category_id=c.id INNER JOIN brands b ON p.product_brand_id=b.id INNER JOIN gender g ON p.product_gender_id=g.id where p.id=:id";
  $stmt=$pdo->prepare($sql);
  $stmt->execute($data);
  $result=$stmt->fetchALL();
/*  var_dump($result);*/
  ?>

 <div class="container"><br><br>
  <?php
  $i=1;
  foreach($result as $key => $product){
    $product_name=$product['product_name'];
    $product_price=$product['product_price'];
    $product_code=$product['product_code'];
    $product_photo=$product['product_photo'];
    $id=$product['id'];
    $brand_name=$product['brand_name'];
    $category_name=$product['category_name'];
    $gender_name=$product['gender_name'];
    $product_description=$product['product_description'];
    if($i%3==1){
      echo "<div class='row'>";

    }
    echo "<div class='col-md-4'>";
    echo "<h2>$product_name</h2>";
    echo "<img class='img img-fluid img-thumbnail' src='admin/$product_photo'>";
    echo "<p>$product_price MMK</p>";
    echo "<p>$product_code</p>";
    echo "<p>$brand_name</p>";
    echo "<p>$category_name</p>";
    echo "<p>$gender_name</p>";
    echo "<p>$product_description</p>";
    echo "<a href='#' class='btn btn-info btn_add_to_cart' data-id=$id 
    data-product_name='$product_name' 
    data-product_price=$product_price 
    data-product_photo=$product_photo>Add To Cart</a>";
    echo "</div>";
    echo "</div> <br>";
  /*  if($i%3==0){
      echo "</div>";
    }
    $i++;*/
  }
  ?>
    
    <hr>

  </div> <!-- /container -->
</main>
<footer class="container">
  <p>&copy; copy right</p>
</footer>
 <script src="assets/dist/js/jquery.min.js"></script>
 <script src="assets/dist/js/bootstrap.bundle.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
    update_cart_count();
    $(".btn_add_to_cart").click(function(){
      /*console.log('hello');*/
      var id = $(this).data('id');
      var product_name=$(this).data('product_name');
      var product_price=$(this).data('product_price');
      var product_photo=$(this).data('product_photo');
   /*   console.log(id,product_name,product_price,product_photo)*/
   var product={
    id:id,
    product_name:product_name,
    product_price:product_price,
    product_photo:product_photo,
    quantity:1
   }
/*   console.log(product);*/

 //local storage
add_to_cart(product);
update_cart_count();
    })
    function add_to_cart(product){
      var mycart=localStorage.getItem('mycart');
     // to create mycart (json string)
      if(!mycart){
        mycart='{"product_list":[]}'
      }
      var mycart_obj=JSON.parse(mycart);
      console.log(mycart_obj);
     //push product into mycart_obj
     var has_id=false;
     $.each(mycart_obj.product_list,function(i,v){
      if(v.id==product.id){
        has_id=true;
        v.quantity+=1;
      }

     })
     if(!has_id){
     mycart_obj.product_list.push(product);
   }
     //convert mycart to json string and store in local stroage
     localStorage.setItem('mycart',JSON.stringify(mycart_obj));


    }

    function update_cart_count(){
      var mycart=localStorage.getItem('mycart');
      if(mycart){
        //json string to obj
        var mycart_obj=JSON.parse(mycart);
        // check product_list array
        if(mycart_obj.product_list.length){
          var total=0;
          $.each(mycart_obj.product_list,function(i,v){
         /*   console.log(i,v);*/
         total+=v.quantity;
          })
          $(".cart_item_count").html(total);
        }
      }

    }
   })
 </script>
</body>
  
  </html>
