<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery - Coffee Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /*CSS*/
        .gallery-grid {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .gallery-grid img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 4px solid rgb(0, 0, 0); 
        }


        @media screen and (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box login full-page-box">
            <h2 class="form-title">Gallery</h2>
            <div class="form-value">
                <div class="gallery-grid">
                    <img src="assets/gallery-5.jpg" alt="Coffee Cup">
                    <img src="assets/gallery-1.jpg" alt="Coffee Cup">
                    <img src="assets/gallery-3.jpg" alt="Coffee Cup">
                    <img src="assets/gallery-4.jpg" alt="Coffee Cup">
                    <img src="assets/gallery-6.jpg" alt="Coffee Cup">
                </div>
            </div>
        </div>
    </div>

</body>
</html>
