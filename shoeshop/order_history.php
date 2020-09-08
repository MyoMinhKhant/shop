<!doctype html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
 <?php require 'nav.php'; ?>
 <main role="main">
 <div class="container"><br><br>
 <h2>Your Order History</h2>  
 <hr>
 <div class="row">
   <div class="col-md-10">
     <table class="table table-bordered">
       <thead>
         <tr>
           <th>No.</th>
           <th>Date</th>
           <th>Voucher ID</th>
           <th>Status</th>
           <th>Detail</th>
         </tr>
       </thead>
       <tbody>
         <?php
                  require 'admin/connection.php';
                  $sql="SELECT p.*,s.status_name FROM product_orders p INNER JOIN order_status s ON s.id=p.order_status where p.user_id=:user_id";
                  session_start();
                  $user_id=$_SESSION['user_id'];
                  $data=['user_id'=>$user_id];
                  $stmt=$pdo->prepare($sql);
                  $stmt->execute($data);
                  $result=$stmt->fetchAll();
                  /*var_dump($result);*/
                  foreach ($result as $key => $order) {
                    $order_date=$order['order_date'];
                    $status_name=$order['status_name'];
                    $voucherid=$order['voucherid'];
                    echo "<tr>
                                <td>$i</td>
                                <td>$order_date</td>
                                <td><a href='order_detail.php?voucherid=$voucherid'>$voucherid</a></td>
                                <td>$status_name</td>
                                <td>
                                <a href='order_detail.php?voucherid=$voucherid' class='btn btn-info'>Detail</a></td>
                    </tr>";
                    $i++;
                    # code...
                  }

         ?>
       </tbody>
     </table>
   </div>
 </div>
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
