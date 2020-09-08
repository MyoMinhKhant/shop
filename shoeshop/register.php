x<!doctype html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
 <?php require 'nav.php'; ?>
 <main role="main">

 <div class="container"><br><br>
  <h2>User Registeration</h2><hr>
  <form action="user_registeration.php" method="POST" onsubmit="return check()">
  <div class="row">
    <div class="col-md-4">
      <label>User Name</label>
      <input type="text" maxlength="50"  name="user_name" required="required" class="form-control">
    </div>
    <div class="col-md-4">
      <label>User Email</label>
      <input type="text" maxlength="50"  name="user_email" required="required" class="form-control">
    </div>
    <div class="col-md-4">
      <label>User Phone Number</label>
      <input type="text" maxlength="15"  name="user_phone" required="required" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <label>Password</label>
      <input type="password" maxlength="50"  name="user_password" required="required" class="form-control" minlength="6" id="user_password">
    </div>
    <div class="col-md-4">
      <label>Confrim Password</label>
      <input type="password" maxlength="50"  name="user_confirm_password" required="required" class="form-control" minlength="6" id="user_confirm_password">
    </div>
    <div class="col-md-4"><br>
      <input type="submit" name="" class="btn btn-success" value="Register">
    </div>
  </div>
</form>
 
    
    <hr>

  </div> <!-- /container -->
</main>
<footer class="container">
  <p>&copy; copy right</p>
</footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="dashboard.js"></script></body>
  <script type="text/javascript">
    function check(){
      var user_password=document.getElementById('user_password').value;
      var user_confirm_password=document.getElementById('user_confirm_password').value;
      if(user_password!==user_confirm_password){
        alert('Password and Confrim Password does not match!');
        return false;
      }else{
      return true;
    }
  }
  </script>
</body>
  </html>
