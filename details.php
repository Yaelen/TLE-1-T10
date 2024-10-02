<?php
/** @var mysqli $db */

// Setup connection with database
require_once 'includes/database.php';
require_once 'includes/authentication.php';

//retrieve id from url
$id = mysqli_real_escape_string($db,$_GET['id']);
//select all games from database
$query = "SELECT * FROM gaia_animals WHERE id = $id";

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$animal = [];
//create array from database return
while($row = mysqli_fetch_assoc($result))
{
    $animal[] = $row;
}
//close db
mysqli_close($db);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/style.css">
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">-->


    <title>Details</title>
</head>
<body>

<style>
    ul {
        max-width: 500px;
    }
</style>


<div class="container px-4">
    <div class="columns is-centered">
        <div class="column is-narrow">
            <p>  <?= $animal[0]['animal'] ?> details</p>
            <section class="content">
                <img src="<?= $animal[0]['animal_picture'] ?>" alt="picture of the animal" width="600" >
                <ul>
                    <li><p>Information: <?= $animal[0]['animal_information'] ?></p> </li>
                    <li><p>Park: <?= $animal[0]['park'] ?> </p></li>
                    <li><p>Dieet: <?= $animal[0]['dieet'] ?> </p></li>
                    <li><p>Population: <?= $animal[0]['population'] ?></p> </li>


                </ul>
            </section>
            <div>
                <a class="button" href="ams.php">Go back to the list</a>
            </div>
        </div>
    </div>
</div>



</body>
</html>

