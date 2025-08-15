<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register - Coffee Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="form-box login">
        <h2 class="form-title">Register</h2>
        <form id="registerForm">
            <label>Name:</label><br>
            <input type="text" name="name" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" class="button order-now" value="Register">
            <input type="button" value="Already have an account? Login" class="button order-now" onclick="window.location.href='login.php'">

        </form>
        <div id="register-response"></div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#registerForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: 'register_submit.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response){
                $('#register-response').html('<p style="color: green;">' + response + '</p>');
                $('#registerForm')[0].reset();

                 if (response === "success") {
                    window.location.href = "index.php";
                } else {
                    $('#login-response').html('<p style="color: red;">' + response + '</p>');
                }

            },
            error: function(){
                $('#register-response').html('<p style="color: red;">Error occurred during registration.</p>');
            }
        });
    });
});
</script>

</body>
</html>
