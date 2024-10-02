<?php
session_start();
/** @var mysqli $db */
require_once 'includes/database.php';

// Fetch all products from the database
// Check if a filter is applied through the URL, default to 'all'
$type = isset($_GET['type']) ? mysqli_real_escape_string($db, $_GET['type']) : 'all';

// Adjust the query based on the filter
if ($type === 'all') {
    $query = "SELECT * FROM `gaia_products`;";
} else {
    $query = "SELECT * FROM `gaia_products` WHERE `type` = '$type';";
}

$result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db) . ' with query ' . $query);

$products = [];
// Create array from database result
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop GAIA</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: Black;
        }

        h1 {
            text-align: center;
            color:white;
            margin: 20px 0;
        }

        .container {
            display: flex;
            margin: 20px;
        }

        .filter {
            width: 20%;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .filter h3 {
            font-size: 18px;
            color: #333;
        }

        .filter ul {
            list-style-type: none;
            padding: 0;
        }

        .filter ul li {
            margin: 10px 0;
        }

        .filter ul li a {
            color: #333;
            text-decoration: none;
        }

        .filter ul li a:hover {
            color: #007bff;
        }

        .products {
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            align-items: flex-start; /* Prevent stretching */
        }

        .product {
            width: 30%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            min-height: 600px;
        }

        .product-image {
            width: 100%;
            height: 500px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .product h4 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .product p {
            font-size: 14px;
            color: #666;
        }

        .product p.price {
            font-weight: bold;
            color: #333;
        }
    </style>

</head>

<body>

<nav>
    <div class="links">
        <a href="parkinfo.php">PARK</a>
        <a href="seed.php">GAIASEED</a>
        <a href="ams.php">ANIMALS</a>
        <a href="donate.php">SUPPORT</a>
        <a href="events.php">DISCOVER</a>
    </div>
    <a href="index.php" id="logo">GAIA</a>
</nav>

<header>
    <h1>GAIA SHOP</h1>
</header>

<div class="container">
    <div class="filter">
        <h3>Filter by Product Type</h3>
        <ul>
            <li><a href="shop.php?type=all">All</a></li>
            <li><a href="shop.php?type=T-Shirt Women">T-Shirts Women</a></li>
            <li><a href="shop.php?type=T-Shirt Men">T-Shirts Men</a></li>
            <li><a href="shop.php?type=Hoodie">Hoodies</a></li>
            <li><a href="shop.php?type=Longsleeve Women">Longsleeve Women</a></li>
            <li><a href="shop.php?type=Longsleeve Men">Longsleeve Men</a></li>
            <li><a href="shop.php?type=Baby Clothes">Baby Clothes</a></li>
            <li><a href="shop.php?type=Hat">Hats</a></li>
            <li><a href="shop.php?type=Reusable">Reusable Items</a></li>
        </ul>
    </div>

    <div class="products">
        <?php
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<div class="product-image" style="background-image: url(./images/products/' . $product['id'] . '.png);"></div>';
            echo '<h4>' . $product['name'] . '</h4>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p>Price: €' . $product['price'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>

</body>
</html>
