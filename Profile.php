<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
    <title>My Profile</title>
</head>

<body>
    <!-- Header -->
  <!-- Bootstrap Navbar with dropdown -->
  <!-- Bootstrap Navbar with dropdown -->
  <?php
include "navbar.php";
?>


<!-- profile design -->
  <div class="container">
    <div class="profile-info">
      <h2>My Profile</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="firstName">Name:</label>
            <input type="text" id="firstName" class="form-control" value="John AB " readonly>
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" class="form-control" value="username123" readonly>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
              <input type="password" id="password" class="form-control" value="yourPassword" readonly>
              <div class="input-group-append">
                <span class="input-group-text password-icon" onclick="togglePassword()">👁️</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="cnic">CNIC:</label>
            <input type="text" id="cnic" class="form-control" value="12345-1234567-1" readonly>
          </div>
          <div class="form-group">
            <label for="wing">Wing:</label>
            <input type="text" id="wing" class="form-control" value="A" readonly>
          </div>
          <div class="form-group">
            <label for="flatNumber">Flat No.:</label>
            <input type="text" id="flatNumber" class="form-control" value="A-101" readonly>
          </div>
        </div>
        <div class="col-md-6">
          <img src="img/candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg" alt="Profile Picture" class="img-fluid">
        </div>
      </div>
      <button class="btn btn-primary edit-button" onclick="editProfile()">Edit Profile</button>
    </div>
  </div>

   <!-- Footer -->

  <?php
include "footer.php";
?>
  
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    }

    function editProfile() {
      // Code to enable editing fields or redirect to the edit profile page
      alert('Redirect to Edit Profile Page or Enable Editing Fields');
    }
  </script>
</body>

</html>
