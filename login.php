<?php
session_start();
if (isset($_SESSION["username"])) {
   header("Location: index.php");
   echo $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">  
</head>
<body>
  <!-- Bootstrap Navbar with dropdown-->
  <?php
include "navbar.php";
?>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Your Logo</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="Home_Page.html">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login_form.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create_new_account.html">Create Account</a>
      </li>
    </ul>
  </div>
</nav> -->
  
  <div class="container">
    <form class="login-form" action="login.php" method="post">
      <h2 class="mb-4">Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <a href="forgot.php" class="float-right">Forgot Password?</a>
      </div>
      <div class="form-group">
        <a href="register.php" class="float-right">Don't have account? Create now!</a>
      </div>
      <br><br>
      &nbsp;
      <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>

    <!-- Footer -->
    <?php
include "footer.php";
?>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php

include("connection.php");
if(isset($_POST['login']))
{
    $user_name=$_POST['username'];
    $user_pass=hash("sha1", $_POST["password"]);
    $check_user="select * from users WHERE username='$user_name' AND password='$user_pass' LIMIT 1";
    
  //$_SESSION['username']=$user_name;//here session is used and value of $user_name store in $_SESSION.
    
    $run=mysqli_query($dbcon,$check_user);
    if(mysqli_num_rows($run))
    {
      while($row = mysqli_fetch_assoc($run)) {
        $_SESSION['firstname'] = $row["firstname"];
        $_SESSION['lastname'] = $row["lastname"];
        $_SESSION['cnic'] = $row["cnic"];
        $_SESSION['phone'] = strval($row["number"]);
        // $_SESSION['password']=$;
        
      }
        echo "<script>window.open('index.php','_self')</script>";

        $_SESSION['username']=$user_name;//here session is used and value of $user_name store in $_SESSION.
        $_SESSION['password']=$user_pass;
        // $_SESSION['cnic']=

        $_SESSION['LoggedIn']=1;

    }
    else
    {
      echo "<script>alert('Username or password is incorrect!')</script>";
    }
}
?>