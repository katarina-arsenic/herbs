<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herb Webshop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        section {
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header class="text-center my-4">
        <h1 style="color: #d3d3d3;">Welcome to Katarina's Herb Webshop</h1>
        <p style="color: #d3d3d3;">Curated with love by Katarina</p>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home size-6"></i> Home</a></li>
                <li><a href="products.php"><i class="fas fa-shopping-bag size-6"></i> Products</a></li>
                <li><a href="about.php"><i class="fas fa-info-circle size-6"></i> About Us</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <section>
            <section class="intro text-center mb-4">
                <p style="color: #d3d3d3;">Discover a variety of herbs that can enhance your cooking, improve your health, and bring a touch of nature into your home. Each herb is carefully selected by Katarina to ensure the highest quality.</p>
            </section>
            <section class="herb-info">
                <h2 class="text-center mb-4" style="color: #d3d3d3;">Popular Herbs</h2>
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <img src="images/basil.webp" alt="Basil" class="img-fluid rounded">
                        <h3 style="color: #d3d3d3;">Basil</h3>
                        <p style="color: #d3d3d3;">Basil is a fragrant herb commonly used in Italian cuisine. It is known for its sweet and slightly peppery flavor. Katarina loves using it in her homemade pesto.</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <img src="images/mint.webp" alt="Mint" class="img-fluid rounded">
                        <h3 style="color: #d3d3d3;">Mint</h3>
                        <p style="color: #d3d3d3;">Mint is a refreshing herb often used in beverages and desserts. It has a cool, crisp taste that can also aid digestion. Katarina recommends it for a refreshing summer drink.</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <img src="images/rosemary.jpg" alt="Rosemary" class="img-fluid rounded">
                        <h3 style="color: #d3d3d3;">Rosemary</h3>
                        <p style="color: #d3d3d3;">Rosemary is a woody herb with a strong aroma. It is frequently used in Mediterranean dishes and has numerous health benefits. Katarina uses it to add a special touch to her roasted dishes.</p>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <footer class="text-center mt-4" style="color: #d3d3d3;">
        <p>&copy; 2023 Katarina's Herb Webshop</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
