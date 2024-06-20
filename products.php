<?php
include 'db.php';

$sql = "SELECT id, name, price, description, image FROM herbs_products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katarina's Herb Webshop - Our Products</title>
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
        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 15px;
            text-align: center;
            color: #d3d3d3; /* Set all text to light gray */
        }
        .product-card img {
            max-width: 100%;
            height: auto;
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
    <header>
        <h1 style="color: #d3d3d3;">Our Products</h1>
        <div style="text-align: center;">
            <p style="color: #d3d3d3;">Handpicked by Katarina</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home size-6"></i> Home</a></li>
                <li><a href="products.php"><i class="fas fa-shopping-bag size-6"></i> Products</a></li>
                <li><a href="about.php"><i class="fas fa-info-circle size-6"></i> About Us</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-4'>";
                        echo "<div class='product-card'>";
                        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
                        echo "<h2 style='color: #d3d3d3;'>" . $row["name"] . "</h2>";
                        echo "<p style='color: #d3d3d3;'>" . $row["description"] . "</p>";
                        echo "<p style='color: #d3d3d3;'><strong>$" . $row["price"] . "</strong></p>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p style='color: #d3d3d3;'>No products available.</p>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>
    <a href="index.php" style="color: #d3d3d3;">Back to Home</a>
    <footer class="text-center mt-4" style="color: #d3d3d3; padding: 20px 0;">
        <p>&copy; 2023 Katarina's Herb Webshop</p>
    </footer>
    <script>
        feather.replace();
    </script>
</body>
</html>
