<?php
/** @var mysqli $db */

// Setup connection with database
require_once 'includes/database.php';
require_once 'includes/authentication.php';

$query = "SELECT * FROM gaia_seeds";

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$games = [];

while($row = mysqli_fetch_assoc($result))
{
    $games[] = $row;
}

$genre =

    mysqli_close($db);

// Select all the seeds from the database

// Store the seeds in an array

// Close the connection



?>

<!doctype html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaia Park</title>
    <link rel="stylesheet" href="./css/style.css">
    <script>
        document.addEventListener('scroll', () => {
            console.log('SCROLL!!')
            const scrollTop = window.scrollY;
            const maxScroll = 1000;

            // Select the background element
            const background = document.querySelector('.background');
            const body = document.querySelector('body');


            // Apply blur to the background element
            const blurAmount = Math.min(scrollTop / 50, 20); // Max blur 20px
            console.log(blurAmount);
            background.style.filter = `blur(${blurAmount}px)`;

            // Apply fade to black by adjusting the background color
            const blackOverlayOpacity = Math.min(scrollTop / maxScroll, 1); // Max opacity 1
            body.style.backgroundColor = `rgba(0, 0, 0)`;
        });

    </script>
</head>
<body>

    <header class="background">
        <nav>
            <a href="index.php" id="logo">GAIA</a>
            <div class="links">
                <a href="parkinfo.php">PARK</a>
                <a href="seed.php">GAIASEED</a>
                <a href="ams.php">ANIMALS</a>
                <a href="donate.php">SHOP</a>
                <a href="events.php">EVENTS</a>
            </div>
        </nav>
        <section class="header-main">
            <div class="title-main">
                <h1 class="green-main-gaia-text">GAIA</h1>
                <div class="s-m-main-text-div">
                    <h1 class="small-main-text">Committed to Reviving Earth&#39s Natural Balance </h1>
                    <h1 class="medium-main-text">PARK</h1>
                </div>
            </div>
            <div class="sub-text-main">
                <h2 class="left-side-sub-text">WHERE</h2>
                <h2 class="middle-side-sub-text">NATURE &#38 HUMANITY</h2>
                <h2 class="right-side-sub-text">RECONNECT</h2>

            </div>
        </section>
    </header>

    <footer>

    </footer>

</body>
</html>