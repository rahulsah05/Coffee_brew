<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reviews - Coffee Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .review-item {
            background: #fff;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px #ccc;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="form-box login">
        <h2 class="form-title">Leave a Review</h2>

        <?php if (isset($_SESSION['user_name'])): ?>
            <form id="reviewForm">
                <label>Name:</label><br>
                <input type="text" name="name" required value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" readonly><br><br>

                <label>Review:</label><br>
                <textarea name="review" rows="4" required></textarea><br><br>

                <input type="submit" class="button order-now" value="Submit Review">
            </form>
            <div id="review-response"></div>
        <?php else: ?>
            <p style="color: red; text-align: center;">Please <a href="login.php">login</a> to submit a review.</p>
        <?php endif; ?>

        <!--  Display existing reviews -->
        <div id="review-list">
            <h3 style="margin-top: 30px;">Recent Reviews:</h3>
            <?php
            include("db.php");
            $result = mysqli_query($conn, "SELECT * FROM reviews ORDER BY id DESC LIMIT 10");
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="review-item">';
                echo '<strong>' . htmlspecialchars($row['name']) . '</strong><br>';
                echo '<p>' . htmlspecialchars($row['review']) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#reviewForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: 'review_submit.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response){
                $('#review-response').html('<p style="color: green;">' + response + '</p>');
                $('#reviewForm')[0].reset();
                setTimeout(() => location.reload(), 1000); // Reload to update reviews
            },
            error: function(){
                $('#review-response').html('<p style="color: red;">Something went wrong. Try again.</p>');
            }
        });
    });
});
</script>

</body>
</html>
