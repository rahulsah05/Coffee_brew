<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && $user['password'] === $password) {
        $_SESSION['user_name'] = $user['name'];
        echo "success";
    } else {
        echo "Invalid email or password.";
    }
}
?>
