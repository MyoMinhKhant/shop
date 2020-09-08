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
        <h1 class="h2">Brands Registeration</h1>
          </div>
          <?php
          if(isset($_REQUEST['status'])){
            $status=$_REQUEST['status'];
            if($status==1){
              echo"<div class='alert alert-success col-lg-6'>Brand Registered Successfully!</div>";
            }
            elseif ($status==2) {
               echo"<div class='alert alert-success col-lg-6'>Brand Updated Successfully!</div>";
              
            }
                 elseif ($status==3) {
               echo"<div class='alert alert-success col-lg-6'>Brand Deleted Successfully!</div>";
             }
          }
          ?>
        <form action="brand_registeration.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <label>Brand Name</label>
              <input type="text" class="form-control" name="brand_name" required="required">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label>Brand Code</label>
              <input type="text" class="form-control" name="brand_code" required="required">
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-lg-4">
              <input type="submit" class="btn btn-info" value="Register">
            </div>
          </div>
        </form>
        <h1>Brand List</h1>
        <div class="row">
          <div class="col-lg-6">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Brand Name</th>
                  <th>Brand Code</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require 'connection.php';
                $sql="SELECT * FROM brands";
                $stmt=$pdo->prepare($sql);
                $stmt->execute();
                $result=$stmt->FetchALL();
                if(sizeof($result)){
                  $i=1;
                  foreach ($result as $key => $brand) {
                   /* var_dump($brand);*/
                   $id=$brand['id'];
                   $brand_name=$brand['brand_name'];
                   $brand_code=$brand['brand_code'];
                  /* echo"$id => $brand_code => brand_name <br>";*/
                  echo"<tr>
                  <td>$i</td>
                  <td>$brand_name</td>
                  <td>$brand_code</td>
                  <td><a href='edit_brand.php?id=$id' class='btn btn-success'>Edit</a></td>
                  <td><form action='delete_brand.php' method='POST' onsubmit='return confirm(\"Are You Sure?\")'>
                  <input type='hidden' name='id' value=$id>
                  <input type='submit' value='Delete' class='btn btn-danger'>
                  </form></td>

                  </tr>";
                  $i++;
                
                  }
                }
                /*var_dump($result);*/
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
