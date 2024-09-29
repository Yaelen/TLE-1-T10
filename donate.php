<?php
/** @var mysqli $db */

// Setup connection with database
require_once 'includes/database.php';
//require_once 'includes/authentication.php';

//retrieve id from url
//$id = mysqli_real_escape_string($db,$_GET['id']);
//select all games from database
$query = "SELECT * 
            FROM animals ";

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$animal_donation = [];
//create array from database return
while($row = mysqli_fetch_assoc($result))
{
    $animal_donation[] = $row;
}
//close db
mysqli_close($db);



?>

<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>GAIA Donate</title>
<link rel="stylesheet" href="./css/style.css">

</head>
<body class="donation-body">

<div class="donate-header-background">
    <nav>
        <div class="links">
            <a href="parkinfo.php">PARK</a>
            <a href="seed.php">GAIASEED</a>
            <a href="ams.php">ANIMALS</a>
            <a href="donate.php">SUPPORT</a>
            <a href="events.php">EXPLORE</a>
        </div>
        <a href="index.php" id="logo">GAIA</a>
    </nav>

    <header>
        <h1 class="donate-gaia-title">GAIA</h1>
        <h1 class="gaia-donate-title">Donate</h1>
    </header>
</div>



<?php foreach ($animal_donation as $animal) { ?>
<section class="section<?= $animal['id'] ?>">

    <h2 class="name<?= $animal['id'] ?>"> <?= $animal['name'] ?> </h2>
    <p> <?= $animal['description'] ?> </p>
    <img src="<?= $animal['image_url'] ?>">
    <p> Goal:<?= $animal['goal'] ?> </p>
</section>

<?php } ?>

</body>

<script>
    const topDonationDiv = document.createElement('div');
    topDonationDiv.className = 'top-donation-div';
    const section1 = document.querySelector('.section1');
    const section2 = document.querySelector('.section2');
    topDonationDiv.appendChild(section1);
    topDonationDiv.appendChild(section2);
    document.body.appendChild(topDonationDiv);




    const section3 = document.querySelector('.section3');
    document.body.appendChild(section3);




    const smallSecondDonationDiv = document.createElement('div');
    smallSecondDonationDiv.className = 'small-second-donation-div';
    const section5 = document.querySelector('.section5');
    const section6 = document.querySelector('.section6');
    smallSecondDonationDiv.appendChild(section5);
    smallSecondDonationDiv.appendChild(section6);
    document.body.appendChild(smallSecondDonationDiv);

    const bigSecondDonationDiv = document.createElement('div');
    bigSecondDonationDiv.className = 'big-second-donation-div';
    const section4 = document.querySelector('.section4');
    bigSecondDonationDiv.appendChild(section4);
    bigSecondDonationDiv.appendChild(smallSecondDonationDiv);
    document.body.appendChild(bigSecondDonationDiv);




    const bottomDonationDiv = document.createElement('div');
    bottomDonationDiv.className = 'bottom-donation-div';
    const section7 = document.querySelector('.section7');
    const section8 = document.querySelector('.section8');
    bottomDonationDiv.appendChild(section7);
    bottomDonationDiv.appendChild(section8);
    document.body.appendChild(bottomDonationDiv);
</script>

</html>