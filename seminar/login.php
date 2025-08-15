<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Coffee Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="form-box login">
        <h2 class="form-title">Login</h2>
        <form id="loginForm">
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" class="button order-now" value="Login">
            <input type="button" value="Don't have a account? Register here" class="button order-now" onclick="window.location.href='register.php'">
        </form>
        <div id="login-response"></div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $('#loginForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: 'login_submit.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response){
                response = response.trim();
                if (response === "success") {
                    window.location.href = "index.php";
                } else {
                    $('#login-response').html('<p style="color: red;">' + response + '</p>');
                }
            },
            error: function(){
                $('#login-response').html('<p style="color: red;">AJAX error. Please try again.</p>');
            }
        });
    });
});
</script>

</body>
</html>
