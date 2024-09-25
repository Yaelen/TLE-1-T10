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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Details [ALBUM NAME] | Music Collection</title>
</head>
<body>
<div class="container px-4">
    <div class="columns is-centered">
        <div class="column is-narrow">
            <h2 class="title mt-4"> <?= $animal[0]['animal'] ?> details</h2>
            <section class="content">
                <ul>
                    <li>Picture: <?= $animal[0]['animal_picture'] ?></li>
                    <li>Information: <?= $animal[0]['animal_information'] ?> </li>
                    <li>Park: <?= $animal[0]['park'] ?> </li>
                    <li>Dieet: <?= $animal[0]['dieet'] ?> </li>
                    <li>Population: <?= $animal[0]['population'] ?> </li>


                </ul>
            </section>
            <div>
                <a class="button" href="index.php">Go back to the list</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>