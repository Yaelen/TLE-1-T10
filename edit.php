<?php
/** @var mysqli $db */

// Setup connection with the database
require_once 'includes/database.php';
require_once 'includes/authentication.php';

// Retrieve genre id from URL
$id = mysqli_real_escape_string($db, $_GET['id']);

// Fetch animal details from the database based on the id
$query = "SELECT * FROM gaia_animals WHERE id = $id";
$result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db) . ' with query ' . $query);

// Fetch data into an associative array
$animal = mysqli_fetch_assoc($result);

// Check if the animal was found
if (!$animal) {
    die('Animal not found');
}

// Initialize form data variables
$name = $animal['animal'] ?? '';
$picture = $animal['animal_picture'] ?? '';
$information = $animal['animal_information'] ?? '';
$park = $animal['park'] ?? '';
$dieet = $animal['dieet'] ?? '';
$population = $animal['population'] ?? '';

$errors = [];

// If form submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = mysqli_real_escape_string($db, $_POST['animal']);
    $picture = mysqli_real_escape_string($db, $_POST['animal_picture']);
    $information = mysqli_real_escape_string($db, $_POST['animal_information']);
    $park = mysqli_real_escape_string($db, $_POST['park']);
    $dieet = mysqli_real_escape_string($db, $_POST['dieet']);
    $population = mysqli_real_escape_string($db, $_POST['population']);

    // Validate form data
    if (empty($name)) {
        $errors['animal'] = "Fill in the name";
    }

    if (empty($picture)) {
        $errors['picture'] = "Fill in the picture URL";
    }

    if (empty($information)) {
        $errors['information'] = "Fill in information";
    }

    if (empty($park)) {
        $errors['park'] = "Fill in the park name";
    }

    if (empty($dieet)) {
        $errors['dieet'] = "Fill in the diet information";
    }

    if (empty($population)) {
        $errors['population'] = "Fill in the population number";
    }

    // If no errors, update the animal details in the database
    if (empty($errors)) {
        $query = "UPDATE gaia_animals 
                  SET animal = '$name', animal_picture = '$picture', animal_information = '$information', park = '$park', dieet = '$dieet', population = '$population' 
                  WHERE id = '$id'";
        $result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db) . ' with query ' . $query);

        // Redirect to the index page
        header("Location: index.php");
        exit();
    }
}

// Close the database connection
mysqli_close($db);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Edit Animal</title>
</head>
<body>
<div class="container px-4">
    <section class="columns is-centered">
        <div class="column is-10">
            <h2 class="title mt-4">Edit Animal:</h2>
            <form class="column is-6" action="" method="post">
                <label class="label" for="animal">Name</label>
                <input class="input" id="animal" type="text" name="animal" value="<?= htmlspecialchars($name) ?>"/>
                <p class="help is-danger"><?= $errors['animal'] ?? '' ?></p>

                <label class="label" for="animal_picture">Picture URL</label>
                <input class="input" id="animal_picture" type="text" name="animal_picture" value="<?= htmlspecialchars($picture) ?>"/>
                <p class="help is-danger"><?= $errors['picture'] ?? '' ?></p>

                <label class="label" for="animal_information">Information</label>
                <input class="input" id="animal_information" type="text" name="animal_information" value="<?= htmlspecialchars($information) ?>"/>
                <p class="help is-danger"><?= $errors['information'] ?? '' ?></p>

                <label class="label" for="park">Park</label>
                <input class="input" id="park" type="text" name="park" value="<?= htmlspecialchars($park) ?>"/>
                <p class="help is-danger"><?= $errors['park'] ?? '' ?></p>

                <label class="label" for="dieet">Diet</label>
                <input class="input" id="dieet" type="text" name="dieet" value="<?= htmlspecialchars($dieet) ?>"/>
                <p class="help is-danger"><?= $errors['dieet'] ?? '' ?></p>

                <label class="label" for="population">Population</label>
                <input class="input" id="population" type="number" name="population" value="<?= htmlspecialchars($population) ?>"/>
                <p class="help is-danger"><?= $errors['population'] ?? '' ?></p>

                <button class="button is-link is-fullwidth" type="submit" name="submit">Save</button>
            </form>
            <a class="button mt-4" href="index.php">&laquo; Go back to the list</a>
        </div>
    </section>
</div>
</body>
</html>
