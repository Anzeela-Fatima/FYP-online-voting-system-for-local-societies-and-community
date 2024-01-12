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
    <form class="login-form">
      <div class="form-group">
        <label for="validationDefault01">First name</label>
        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
      </div>
      <div class="form-group">
        <label for="validationDefault02">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <!-- Profile picture upload -->
      <div class="form-group">
        <label for="profilePicture">Profile Picture</label>
        <input type="file" class="form-control-file" id="profilePicture">
      </div>
      <div class="form-group">
        <label for="validationDefaultUsername">Username</label>
        <input type="text" class="form-control" id="validationDefaultUsername" required>
      </div>
<!-- Membership type -->
<div class="form-group">
  <label>Join as:</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="memberCheckbox" name="membership_type[]" value="member" checked>
    <label class="form-check-label" for="memberCheckbox">Member</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="candidateCheckbox" name="membership_type[]" value="candidate">
    <label class="form-check-label" for="candidateCheckbox">Candidate</label>
  </div>
</div>
      <!-- password -->
      <div class="form-group">
        <label for="validationDefault06">Password</label>
        <input type="password" class="form-control" id="validationDefault06" required>
      </div>
      
      <!-- CNIC -->
      <div class="form-group">
        <label for="validationDefault03">CNIC</label>
        <input type="text" class="form-control" id="validationDefault03" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}"
          placeholder="12345-1234567-1" required>
        <small class="text-muted">Enter CNIC in the format: 12345-1234567-1</small>
      </div>
      <!-- FLAT and wing details -->
      <div class="form-group">
        <label for="validationDefault04">Wing</label>
        <select class="form-select" id="validationDefault04" name="wing" required>
          <option selected disabled value="">Choose...</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
      </div>
      <!-- Flat No. -->
      <div class="form-group">
        <label for="validationDefault05">Flat No.</label>
        <input type="text" class="form-control" id="validationDefault05" name="flat_number"  required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
      <br>
      <div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
    </form>
  </div>

  <!-- Footer -->
  <?php
include "footer.php";
?>
  <!-- <footer class="footer">
    <div class="footer-content">
      <p>Contact Us: example@email.com</p>
      <nav>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms of Service</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
      </nav>
    </div>
  </footer> -->

  
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>