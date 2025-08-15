<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_name'])) {
    echo "You must be logged in to submit a review.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);

    $query = "INSERT INTO reviews (name, review) VALUES ('$name', '$review')";
    if (mysqli_query($conn, $query)) {
        echo "Thank you for your review!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
