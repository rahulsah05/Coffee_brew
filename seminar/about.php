<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Coffee Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .about-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: auto ;
            text-align: center;
        }

        .about-content img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #321d0a;
        }

        .contact-details {
            font-size: var(--font-size-n);
            line-height: 1.6;
        }

        .contact-details a {
            color: var(--primary-color);
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box login full-page-box">
            <h2 class="form-title">About Us</h2>
            <div class="form-value about-content">
                <p>Welcome to our coffee shop! We’re passionate about delivering the best coffee experience with love and care.</p>
                <p><strong> Here's info about me</strong></p>
                <!-- profile -->
                <img src="assets/rahul1.jpg" alt="Your Photo">

                <!-- contact -->
                <div class="contact-details">
                    <p><strong> Rahul Sah</strong></p>
                    <p><strong>Email: </strong><a href="mailto:rahulsah329821@gmail.com">rahulsah329821@gmail.com</a></p>
                    <p><strong>Phone:</strong>7499050252</p>
                    <p> <a href="https://www.linkedin.com/in/rahulsah05" target="_blank"><strong>LinkedIn</strong></a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
