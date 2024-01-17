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
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title> create-new-account</title>
  <!-- <style>
    /* Custom styles can be added here */
    .login-form {
      max-width: 400px;
      margin: 50px auto;
      /* Center the form vertically and horizontally */
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    .form-group {
      margin-bottom: 20px;
    } 
  </style> -->
</head>

<body>
  <?php
  include "navbar.php";
  ?>
<!--   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Your Logo</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="create-new-account.html">Create Account</a>
        </li>
      </ul>
    </div>
  </nav>
 -->

  <div class="container">
    <form class="login-form" action="register.php" method="post" enctype="multipart/form-data">
      <!-- enctype="multipart/form-data"
    multipart/form-data: This value is necessary if the user will upload a file through the form -->
      <div class="form-group">
        <label for="validationDefaultLastName">First name</label>
        <input type="text" class="form-control" name="FirstName" id="validationDefaultLastName" placeholder="Farhan" required>
      </div>
      <div class="form-group">
        <label for="validationDefaultFirstName">Last name</label>
        <input type="text" class="form-control" name="LastName" id="validationDefaultFirstName" placeholder="Khan" required>
      </div>
      <!-- username -->
      <div class="form-group">
        <label for="validationDefaultUsername">Username</label>
        <input type="text" class="form-control" name="Username" id="validationDefaultUsername" required>
      </div>
      
      <!-- password -->
      <div class="form-group">
        <label for="validationDefaultPassword">Password</label>
        <input type="password" class="form-control" name="Password" id="validationDefaultPassword" required>
      </div>
      <!-- email -->
      <div class="form-group">
        <label for="validationDefaultEmail">Email</label>
        <input type="email" class="form-control" name="Email" id="validationDefaultEmail" required>
      </div>

       <!-- Profile picture -->
       <div class="form-group">
        <label for="profilePicture">Profile Picture</label>
        <input type="file" class="form-control-file" name="Pic" id="profilePicture">
      </div>
<!-- <div class="form-group">
    <label for="validationDefaultImage">Profile Picture</label>
    <input type="file" class="form-control-file" name="Image" id="validationDefaultImage">
</div> -->
      <!-- Phone -->
      <div class="form-group">
        <label for="validationDefaultPhone">PhoneNumber</label>
        <input type="text" class="form-control" name="PhoneNumber" id="validationDefaultPhone" pattern="[0-9]{12}"
          placeholder="923001234567" required>
        <small class="text-muted">Enter Phone Number in the format: 923001234567</small>
      </div>
      <!-- CNIC -->
      <div class="form-group">
        <label for="validationDefaultCNIC">CNIC</label>
        <input type="text" class="form-control" name="CNIC" id="validationDefaultCNIC" 
          placeholder="12345-1234567-1" required>
        <small class="text-muted">Enter CNIC in the format: 12345-1234567-1</small>
      </div>
      <!-- Block -->
      <div class="form-group">
        <label for="validationDefaultBlock">Block</label>
        <select type="text" class="form-control" name="Block" id="validationDefaultBlock" required>
          <option selected disabled value="">Choose...</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
    
      <!-- Floor -->
      <div class="form-group">
        <label for="validationDefaultFloor">Floor</label>
        <select type="text" class="form-control" name="Floor" id="validationDefaultFloor" required>
        <option selected disabled value="">Choose...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <!-- HouseNo -->
      <div class="form-group">
        <label for="validationDefaultHouseNo">House No.</label>
        <input type="text" class="form-control" name="House" id="validationDefaultHouseNo" required>
      </div>
      <!-- Address -->
      <!-- <div class="form-group">
        <label for="validationDefaultAddress">Address</label>
        <input type="text" class="form-control" name="Address" id="validationDefaultAddress" required>
      </div> -->
      <!-- Profile picture upload -->
      <!-- <div class="form-group">
        <label for="profilePicture">Profile Picture</label>
        <input type="file" class="form-control-file" name="Pic" id="profilePicture">
      </div> -->
<!-- Membership type -->
<!-- <div class="form-group">
  <label>Join as:</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="memberCheckbox" name="membership_type[]" value="member" checked>
    <label class="form-check-label" for="memberCheckbox">Member</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="candidateCheckbox" name="membership_type[]" value="candidate">
    <label class="form-check-label" for="candidateCheckbox">Candidate</label>
  </div>
</div> -->
      
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
      <br>
      <div>
      <button class="btn btn-primary" name="Register" type="submit">Register Account</button>
    </div>
    </form>
  </div>

  <!-- Footer -->
  <?php
include "footer.php";
?>

  
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php

include("connection.php");
if(isset($_POST['Register']))
{
    $first_name=$_POST['FirstName'];
    $last_name=$_POST['LastName'];
    $user_name=$_POST['Username'];
    $user_pass=hash("sha1", $_POST["Password"]);
    $email=$_POST['Email'];

    $phone=$_POST['PhoneNumber'];
    $cnic=$_POST['CNIC'];
    $block=$_POST['Block'];
    $floor=$_POST['Floor'];
    $house=$_POST['House'];
    // $address=$_POST['Address'];
        // Upload and Resize Image
        $target_dir = "uploads/"; // Set your upload directory
        $target_file = $target_dir . basename($_FILES["Pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["Pic"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    
        // Check file size
        if ($_FILES["Pic"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Move the uploaded file to the target directory
            move_uploaded_file($_FILES["Pic"]["tmp_name"], $target_file);
    
            // Read the contents of the image file
            $imgData = file_get_contents($target_file);
    
            // Save the image data to the database
            $check_user = "INSERT INTO `users` (`ID`, `firstname`, `lastname`, `username`, `password`, `email`, `image`, `number`, `cnic`, `block`, `floor`, `houseno`, `status`, `email_verified`, `reg_date`) VALUES (NULL, '$first_name', '$last_name', '$user_name', '$user_pass', '$email', ? , '$phone', '$cnic', '$block', '$floor', '$house', '1', '1', current_timestamp()) ";
    
            $stmt = mysqli_prepare($dbcon, $check_user);
            mysqli_stmt_bind_param($stmt, 's', $imgData);
            mysqli_stmt_execute($stmt);
    
            echo "Image uploaded and saved to the database.";
    
            // Close the statement
            mysqli_stmt_close($stmt);
        }
    
    $check_user = "INSERT INTO `users` (`ID`, `firstname`, `lastname`, `username`, `password`, `email`, `image`, `number`, `cnic`, `block`, `floor`, `houseno`, `status`, `email_verified`, `reg_date`) VALUES (NULL, '$first_name', '$last_name', '$user_name', '$user_pass', '$email','?', '$phone', '$cnic', '$block', '$floor', '$house', '1', '1', current_timestamp()) ";

    $check = "select * from users WHERE username='$user_name'";
    $run=mysqli_query($dbcon,$check);
    if(mysqli_num_rows($run)) {
      echo "User Already Exists!";
      exit;
    }
    // $check_user="select * from users WHERE username='$user_name' AND password='$user_pass'";

    //$_SESSION['username']=$user_name;//here session is used and value of $user_name store in $_SESSION.
    $run=mysqli_query($dbcon,$check_user);
    echo $check_user;
    /*if(!mysqli_num_rows($run))
    {
        echo "<script>window.open('index.php','_self')</script>";

        $_SESSION['username']=$user_name;//here session is used and value of $user_name store in $_SESSION.
        $_SESSION['firstname']=$first_name;//here session is used and value of $user_name store in $_SESSION.
        $_SESSION['lastname']=$last_name;//here session is used and value of $user_name store in $_SESSION.

        $_SESSION['LoggedIn']=1;

    }
    else
    {
      echo "<script>alert('Username or password is incorrect!')</script>";
    }*/
}
?>
