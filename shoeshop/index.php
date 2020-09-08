<!doctype html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
 <?php require 'nav.php'; ?>
 <main role="main">
  <?php
  require 'admin/connection.php';
  $sql="SELECT * FROM products ORDER BY id DESC LIMIT 9";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $result=$stmt->fetchALL();
 /* var_dump($result);*/
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
    if($i%3==1){
      echo "<div class='row'>";

    }
    echo "<div class='col-md-4'>";
    echo "<h2>$product_name</h2>";
    echo "<img class='img img-fluid img-thumbnail' src='admin/$product_photo'>";
    echo "<p>$product_price MMK</p>";
    echo "<p>$product_code</p>";
    echo "<a href='product_detail.php?id=$id' class='btn btn-info'>Detail</a>";
    echo "</div>";
    if($i%3==0){
      echo "</div>";
    }
    $i++;
  }
  ?>
    
    <hr>

  </div> <!-- /container -->
</main>
<footer class="container">
  <p>copy right</p>
</footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="dashboard.js"></script></body>
  </html>
