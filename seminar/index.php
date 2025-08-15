<?php session_start(); ?>
<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE BREW</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Optional Welcome Message -->
    <?php if (isset($_SESSION['user_name'])): ?>
        <div style="text-align: center; background: #fff3cd; padding: 10px; margin: 0 auto; max-width: 1000px;">
            👋 Welcome back, <strong><?php echo $_SESSION['user_name']; ?></strong>!
        </div>
    <?php endif; ?>

    <!-- Hero Section -->
    <main>
        <section class="hero-section">
            <div class="section-content hero-grid">
                <div class="hero-detail">
                    <h2 class="title">Best Coffee</h2>
                    <h3 class="subtitle">Make your day with our special Coffee!</h3>
                    <p class="description">Welcome to our Coffee Brew, where every bean tells a story and every cup speaks joy.</p>
                    <div class="buttons">
                        <a href="menu.php" class="button order-now">Order Now</a>
                        <a href="contact.php" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="assets/coffee-hero-section.png" alt="Coffee Cup" class="hero-image">
                </div>
            </div>
        </section>
    </main>

</body>
</html>
