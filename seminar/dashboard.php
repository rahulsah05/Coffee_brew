<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Coffee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="section-content" style="padding: 60px;">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
        <p>You are successfully logged in. Explore our site or <a href="logout.php" class="button contact-us">Logout</a>.</p>
    </div>
</body>
</html>
