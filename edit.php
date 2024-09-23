<?php
/** @var mysqli $db */

// Setup connection with database
require_once 'includes/database.php';
require_once 'includes/authentication.php';

//pseudocode - edit

//retrieve genre id form url

//fetch game details from database based on id

//extract game details: name, studio, year and associated genre ids

$id = mysqli_real_escape_string($db,$_GET['id']);
$query = "SELECT * FROM gaia_animals WHERE id = $id";

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$games = [];
//create array from database return
while($row = mysqli_fetch_assoc($result))
{
    $games[] = $row;
}








//if form submitted
//	validate form
if(isset($_POST['submit'])) {

    //get form data
    $name = mysqli_real_escape_string($db, $_POST['Animal']);
    $location = mysqli_real_escape_string($db, $_POST['Location']);
    $information = mysqli_real_escape_string($db, $_POST['Information']);



    $errors = [];


//	if error
//		show errors at correct input field
    if ($name == ""){
        $errors['animal'] = "fill in name";
    }

    if ($location == ""){
        $errors['location'] = "fill in studio";
    }

    if ($information == ""){
        $errors['information'] = "fill in genre";
    }


//	if no errors
//		update game details in database
//		delete genre associations for game
//		insert new genre associations for game


    if (empty($errors)) {
//		INSERT query opbouwen
        $query = "UPDATE gaia_animals SET Animal = '$name', Location = '$location', Information = '$information' WHERE gaia_animals.id = '$id';";
//		Query uitvoeren op de database
        $result = mysqli_query($db, $query)
        or die('Error '.mysqli_error($db).' with query '.$query);

//		redirect to index
        header("Location: index.php");
        exit();


    } else {

//		DB sluiten

        mysqli_close($db);

    }


}



//if form not submitted
//	show form filled with previous inputs
















?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Muziekalbums - Create</title>
</head>
<body>
<div class="container px-4">

    <section class="columns is-centered">
        <div class="column is-10">
            <h2 class="title mt-4">Edit game: </h2>

            <form class="column is-6" action="" method="post">



                <label class="label" for="name">Name</label>
                <input class="input" id="name" type="text" name="name" value="<?= $name[0]['name'] ?>"/>
                <p class="help is-danger">
                    <?= $errors['name'] ?? '' ?>

                </p>


                <label class="label" for="studio">Location</label>
                <input class="input" id="studio" type="text" name="studio" value="<?= $location[0]['studio'] ?>"/>
                <p class="help is-danger">
                    <?= $errors['studio'] ?? '' ?>
                </p>


                <label class="label" for="genre">radio</label>
                <input id="genre" type="radio" name="genre" value=" "/>
                <p class="help is-danger">
                    <?= $errors['genre'] ?? '' ?>
                </p>


                <label class="label" for="year">Information</label>
                <input class="input" id="year" type="text" name="year" value="<?= $information[0]['year'] ?>"/>
                <p class="help is-danger">
                    <?= $errors['year'] ?? '' ?>
                </p>





                <button class="button is-link is-fullwidth" type="submit" name="submit">Save</button>

            </form>

            <a class="button mt-4" href="index.php">&laquo; Go back to the list</a>
        </div>
    </section>
</div>
</body>
</html>
