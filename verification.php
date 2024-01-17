<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password - Enter Code</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">    
     <style>
        /* Add custom styles here if needed */
        .email-form {
            margin: 8% auto;
            /* padding: 30px; */
            /* margin-bottom: 13%; */

        }
    </style> 

</head>

<body>
    <!-- NAVBAR -->
<?php
include "navbar.php";
?>
<!-- Form -->
<div class="container">
        <form class="login-form email-form">
        <h2 class="text-center mb-4">Verify Code</h2>
            <p>A verification code has been sent to your email. Please enter the code below.</p>
            <div class="form-group">
                <label for="inputCode">Enter Verification Code</label>
                <input type="text" class="form-control" id="inputCode" placeholder="Verification Code">
            </div>
            <button type="submit" class="btn btn-primary btn-block" formaction="resetPass.php">Verify</button>
      </form>
    </div>
    
<?php 
include "footer.php"; ?>

<!-- Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
