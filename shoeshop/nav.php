 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.php">ShoeShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
 <!--      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <?php
                 require 'admin/connection.php';
                 $sql="SELECT * FROM categories";
                 $stmt=$pdo->prepare($sql);
                 $stmt->execute();
                 $result=$stmt->fetchALL();
                 foreach ($result as $key => $category) {
                  $category_name=$category['category_name'];
                  $id=$category['id'];
                  echo "<a class='dropdown-item' href='search_product.php?id=$id&type=1'>$category_name</a>";
                  
                 }
          ?>
         
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brands</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
          <?php
                 require 'admin/connection.php';
                 $sql="SELECT * FROM brands";
                 $stmt=$pdo->prepare($sql);
                 $stmt->execute();
                 $result=$stmt->fetchALL();
                 foreach ($result as $key => $brand) {
                  $brand_name=$brand['brand_name'];
                  $id=$brand['id'];
                  echo "<a class='dropdown-item' href='search_product.php?id=$id&type=2'>$brand_name</a>";
                  
                 }        
          ?>
         
        </div>
       
      </li>
       <?php
               error_reporting(E_ALL & ~E_NOTICE);
                session_start();
                if(isset($_SESSION['user_loggedin'])){
                  if($_SESSION['user_loggedin']){
                    $user_name=$_SESSION['user_name'];
                    $user_id=$_SESSION['user_id'];
                    echo ' <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$user_name.'</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">';
        echo  "<a class='dropdown-item' href='logout.php'>Log Out</a>";
          echo  "<a class='dropdown-item' href='order_history.php'>Order History</a>";
            echo  "<a class='dropdown-item' href='edit_profile.php'>Edit Profile</a>";
            echo '<div></li>';
                  }
                  else{
                    echo ' <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                            </li>';

                  }
                }else{
                  echo ' <li class="nav-item">
                         <a class="nav-link" href="login.php">Login</a>
                        </li>';

          /*        echo ' <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>';*/
                }
        ?>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      
      
       <li class="nav-item">
        <a class="nav-link" href="show_cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <span class="badge cart_item_count">0</span></a>
      </li>

    </ul>
    <form action="search_product.php"  class="form-inline my-2 my-lg-0" method="POST">

      <input type="hidden" name="type" value="3">
      <input type="text" name="product_name" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
