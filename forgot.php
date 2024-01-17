<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password - Enter Email</title>
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
            <h2 class="text-center mb-4">Reset  Password</h2>
            <div class="form-group">
                <label for="inputEmail">Enter Your Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Your Email" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" formaction="/verification.php">Submit</button>
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
