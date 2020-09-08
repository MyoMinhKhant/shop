<!doctype html>
<html lang="en">
<?php
  require 'head.php';
?>
  <body>
    <?php
  require 'nav.php';
?>
    

<div class="container-fluid">
  <div class="row">
        <?php
  require 'sidebar.php';
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product List</h1>
      </div>
         <?php
          if(isset($_REQUEST['status'])){
            $status=$_REQUEST['status'];
            if($status==1){
              echo"<div class='alert alert-success col-lg-6'>Product Registered Successfully!</div>";
            }
            elseif ($status==2) {
               echo"<div class='alert alert-success col-lg-6'>Product Updated Successfully!</div>";
              
            }
                 elseif ($status==3) {
               echo"<div class='alert alert-success col-lg-6'>Product Deleted Successfully!</div>";
             }
          }
          ?>
      <div class="row">
        <div class="col-lg-8">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Price</th>
              <th>Detail</th>
              <th>Edit</th>
              <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require 'connection.php';
              $sql="SELECT * FROM products ORDER BY id DESC LIMIT 10";
              $stmt=$pdo->prepare($sql);
              $stmt->execute();
              $result=$stmt->fetchAll();
             /* var_dump($result);*/
             $i=1;
             foreach($result as $key => $product){
              $id=$product['id'];
              $product_name=$product['product_name'];
              $product_photo=$product['product_photo'];
              $product_price=$product['product_price'];
              echo"<tr>
              <td>$i</td>
              <td>$product_name</td>
              <td><img src='$product_photo' width=120 height=100></td>
              <td>$product_price</td>
              <td><a href='#' class='btn btn-info btn_detail' data-id=$id>Detail</td>
              <td>
              <a href='edit_product.php?id=$id' class='btn btn-warning'>Edit</a></td>
              <td>
              <form action='delete_product.php' method='POST' onclick='return confirm(\"Are You Sure?\")'>
              <input type='hidden' name='id' value=$id>
              <input type='hidden' name='product_photo' value='$product_photo'>
              <input type='submit' class='btn btn-danger' value='Delete'>
              </form>
              </td>
              </tr>";
             $i++;
             }
              ?>
              
            </tbody>
          </table>
        </div>
      </div>

<div class="modal" id="product_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Product Detail Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="product_detail">

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

      

      
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
        <script type="text/javascript" src="../assets/dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $(".btn_detail").click(function(){
               var id=$(this).data('id');
               console.log(id);
               $.post('get_product_detail_info.php',{id:id}).done(function(data){
                console.log(data);
                //convert string to object
                var product_obj=JSON.parse(data);
                console.log(product_obj); 
                console.log(product_obj.product_name);
                var product_name=product_obj.product_name;
                var product_photo=product_obj.product_photo;
                var product_price=product_obj.product_price;
                var product_brand_name=product_obj.brand_name;
                var product_category_name=product_obj.category_name;
                var product_gender_name=product_obj.gender_name;
                var product_description=product_obj.product_description;
                var product_code=product_obj.product_code;
                var html=`Name:${product_name}<br>
                Price:${product_price}<br>
                Code:${product_code}<br>
                Photo:<img src='${product_photo}' width=120 height=100><br>
                Category:${product_category_name}<br>
                Brands:${product_brand_name}<br>
                Gender:${product_gender_name}<br>
                Description:${product_description}`;
                $("#product_detail").html(html);

               })
              $("#product_modal").modal('show');
            })
          })
        </script></body>
</html>
