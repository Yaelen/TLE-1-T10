<?php
// Step 1: Database Connection
$servername = "localhost";
$username = "root"; // your MySQL username
$password = "";     // your MySQL password
$dbname = "gaiapark";  // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Query a random row from the gaia_seeds table
$sql = "SELECT id, plant_name, information, test FROM gaia_seeds ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/gaiaInterface.css" rel="stylesheet">
    <title>Random Gaia Seed</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 90%; /* Makes it fit well on mobile */
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h2 {
            margin: 10px 0;
            font-size: 28px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #193f12;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #193f12;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            h2 {
                font-size: 22px;
            }
            p {
                font-size: 16px;
            }
            .btn {
                font-size: 14px;
                padding: 10px 20px;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 20px;
            }
            p {
                font-size: 14px;
            }
            .btn {
                font-size: 12px;
                padding: 8px 16px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <?php
    // Step 3: Display the result (random row)
    if ($result->num_rows > 0) {
        // Output the random row
        while ($row = $result->fetch_assoc()) {
            echo '<img src="' . htmlspecialchars($row["test"]) . '" alt="Image of ' . htmlspecialchars($row["plant_name"]) . '">';
            echo '<h2>' . htmlspecialchars($row["plant_name"]) . '</h2>';
            echo '<p>' . htmlspecialchars($row["information"]) . '</p>';
        }
    } else {
        echo "<p>No seeds found.</p>";
    }

    // Step 4: Close the database connection
    $conn->close();
    ?>

    <!-- Button under the text -->
    <a href="https://media.makeameme.org/created/planting-seeds-to.jpg" class="btn">Synthesize Seed</a>
</div>

<footer class="gaia-seed-links">
    <div class="gaia-seed-div" onclick="window.location.href='seedScan.html';">
        <img src="images/scanning-device.png" alt="scan icon" class="img-scan-gaia-seed">
        <a href="seedScan.html">SCAN</a>
    </div>
    <div class="gaia-seed-div" onclick="window.location.href='seedMap.html';">
        <img src="images/map-position.png" alt="map icon" class="img-map-gaia-seed">
        <a href="seedMap.html">MAP</a>
    </div>
    <div class="gaia-seed-div" onclick="window.location.href='seedHistory.html';">
        <img src="images/gallery.png" alt="history icon" class="img-history-gaia-seed">
        <a href="seedHistory.html">HISTORY</a>
    </div>
</footer>

</body>
</html>
