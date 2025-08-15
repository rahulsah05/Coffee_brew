<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <nav class="navbar section-content">
        <a href="index.php" class="nav-logo">
            <h2 class="logo-text">☕ COFFEE BREW</h2> 
        </a>
        <ul class="nav-menu">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="review.php" class="nav-link">Review</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

            <?php if (isset($_SESSION['user_name'])): ?>
                <li class="nav-item"><a class="nav-link">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?> 👋</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            <?php else: ?>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
