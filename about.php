<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Katarina's Herb Webshop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-image: url('images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #d3d3d3; /* Set all text to light gray */
        }
        main {
            padding: 40px; /* Increase padding to main */
        }
        section {
            padding: 40px; /* Increase padding to sections */
            background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background for readability */
            border-radius: 10px; /* Add rounded corners */
            margin-bottom: 20px; /* Add margin between sections */
        }
    </style>
</head>
<body>
    <header class="text-center my-4">
        <h1 style="color: #d3d3d3;">About Us</h1>
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
            <h2 style="color: #d3d3d3;">Our Story</h2>
            <p style="color: #d3d3d3;">Katarina's Herb Webshop was founded with a passion for herbs and natural remedies. Katarina, our founder, has been handpicking the finest herbs to ensure quality and freshness. Our mission is to bring the best herbs to your kitchen and home. We started as a small local shop and have grown into a trusted online store, serving customers worldwide.</p>
        </section>
        <section>
            <h2 style="color: #d3d3d3;">Our Values</h2>
            <p style="color: #d3d3d3;">We believe in sustainability, quality, and customer satisfaction. Our herbs are sourced from organic farms and are carefully selected to meet our high standards. We are committed to providing our customers with the best products and services. Our team works tirelessly to ensure that every order is handled with care and delivered promptly.</p>
        </section>
        <section>
            <h2 style="color: #d3d3d3;">Our Team</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Experience</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Katarina</td>
                        <td>Founder</td>
                        <td>10 years</td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Herbalist</td>
                        <td>8 years</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Customer Support</td>
                        <td>5 years</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section>
            <h2 style="color: #d3d3d3;">Our Products</h2>
            <p style="color: #d3d3d3;">We offer a wide range of herbs and natural products. Each product is carefully selected to ensure the highest quality. Visit our <a href="products.php" style="color: #d3d3d3;">Products</a> page to learn more.</p>
        </section>
    </main>
    <footer class="text-center mt-4" style="color: #d3d3d3; padding: 20px 0;">
        <p>&copy; 2023 Katarina's Herb Webshop</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
