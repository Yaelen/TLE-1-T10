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

// Step 2: Query the gaia_seeds table
$sql = "SELECT id, plant_name, information, test FROM gaia_seeds";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaia Seeds</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 600px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Gaia Seeds Information</h2>

<?php
// Step 3: Display the results
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Plant Name</th><th>Information</th><th>Image</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["plant_name"] . "</td>
                <td>" . $row["information"] . "</td>
                <td>";
        // If the 'test' column contains a valid image URL, display the image
        if (!empty($row["test"])) {
            echo '<img src="' . htmlspecialchars($row["test"]) . '" alt="Image of ' . htmlspecialchars($row["plant_name"]) . '">';
        } else {
            echo 'No image available';
        }
        echo "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results found.";
}

// Step 4: Close the database connection
$conn->close();
?>

</body>
</html>
