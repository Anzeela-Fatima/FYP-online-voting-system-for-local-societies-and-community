<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password - Enter Email</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <style>
        /* Add custom styles here if needed */
        .email-form {
            max-width: 400px;
            margin: 5% auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 13%;

        }
    </style> -->
</head>

<body>
<?php
include "navbar.php";
?>
<div class="container">
        <form class="email-form">
            <h2 class="text-center mb-4">Reset Password</h2>
            <div class="form-group">
                <label for="inputEmail">Enter Your Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
<?php 
include "footer.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
