<?php 
include("header.php"); 
include("db.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Coffee Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">
    <div class="form-box login">
        <h2 class="form-title">Contact Us</h2>

        <?php if (isset($_SESSION['user_name'])): ?>

        <?php
        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($conn, $_SESSION['user_name']); // Fix: assign $name
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);

            $query = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
            if (mysqli_query($conn, $query)) {
                echo "<p style='color: green;'>Message sent successfully!</p>";
            } else {
                echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>

        <form method="post" class="form-value">
            <label>Name:</label><br>
            <input type="text" name="name" required value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" readonly><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Message:</label><br>
            <textarea name="message" rows="4" required></textarea><br><br>

            <input type="submit" class="button order-now" name="submit" value="Send">
        </form>

        <?php else: ?>
        <p style="color: red; text-align: center;">Please <a href="login.php">login</a> to submit a message.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
