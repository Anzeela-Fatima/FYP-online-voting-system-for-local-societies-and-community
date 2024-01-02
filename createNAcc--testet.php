<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Create New Account</title>
  <!-- Your CSS Styles -->
</head>
<body>
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

  <div class="container">
    <form class="login-form" method="post">
    <div class="form-group">
        <label for="validationDefault01">First name</label>
        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
      </div>
      <div class="form-group">
        <label for="validationDefault02">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <div class="form-group">
        <label for="validationDefaultUsername">Username</label>
        <input type="text" class="form-control" id="validationDefaultUsername" required>
      </div>
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
      <div class="form-group">
        <label for="validationDefault05">Flat No.</label>
        <input type="text" class="form-control" id="validationDefault05" name="flat_number" readonly required>
      </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </div>

  <!-- Your Footer -->
  <!-- ... -->
<!-- GPT CODE FOR FLAT NO VALIDATION IGNORE: -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["wing"])) {
    $wing = $_POST["wing"];
    $flatNumber = generateFlatNumber($wing);
    echo '<script>document.getElementById("validationDefault05").value = "' . $flatNumber . '";</script>';
  }
}

function generateFlatNumber($wing) {
  // Logic to calculate and assign flat number based on the selected wing
  // Assuming each wing has 2 floors with 5 flats on each floor

  // Your custom logic to manage and assign flat numbers goes here

  // Example logic below (modify this as per your requirements)
  static $floor = 1;
  static $flatOnFloor = 1;

  $flatNumber = $wing . "-" . $floor . $flatOnFloor;
  $flatOnFloor++;

  if ($flatOnFloor > 5) {
    $floor++;
    $flatOnFloor = 1;
  }

  return $flatNumber;
}
?>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
