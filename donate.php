<?php
/** @var mysqli $db */

// Setup connection with database
require_once 'includes/database.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the animal_id and donation amount from the form
    $animal_id = intval($_POST['animal_id']);
    $donation_amount = floatval($_POST['donation']);

    $currenAmountQuery = "SELECT * FROM `animals` WHERE `id` = $animal_id";
    $amountResult = mysqli_query($db, $currenAmountQuery) or die('Error ' . mysqli_error($db));
    $row = mysqli_fetch_assoc($amountResult);
    $currentAmount = $row['current_amount'];

    $newAmount = $currentAmount + $donation_amount;
    print_r($newAmount) ;

    // Update the current_amount in the database
    $update_query = "UPDATE animals 
                     SET current_amount =  $newAmount 
                     WHERE id = $animal_id";
    mysqli_query($db, $update_query) or die('Error ' . mysqli_error($db));

    // Fetch the updated current amount
    $result = mysqli_query($db, "SELECT current_amount FROM animals WHERE id = $animal_id");
    $row = mysqli_fetch_assoc($result);
    $new_current_amount = $row['current_amount'];

    // Return a JSON response for AJAX requests
    echo json_encode(['success' => true, 'new_amount' => $new_current_amount]);

    header('Location: donate.php');
    exit;
}

// Query to select all animals from the database
$query = "SELECT * FROM animals";
$result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db));

$animal_donation = [];
while ($row = mysqli_fetch_assoc($result)) {
    $animal_donation[] = $row;
}

// Close db connection
mysqli_close($db);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GAIA Donate</title>
    <link rel="stylesheet" href="./css/donate.css">
    <style>
        .progress-bar {
            background-color: #c4c2c2;
            border-radius: 10px;
            height: 20px;
            width: 100%;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress {
            background-color: #853e3e;
            height: 100%;
            transition: width 0.5s ease;
        }
    </style>
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

    <header class="donation-header">
        <h1 class="donate-gaia-title">GAIA<span class="gaia-donate-title">DONATE</span></h1>
    </header>
</div>

<?php foreach ($animal_donation as $animal) { ?>
    <section class="section<?= $animal['id'] ?>">
        <h2 class="name<?= $animal['id'] ?>"> <?= $animal['name'] ?> </h2>
        <p class="description<?= $animal['id'] ?>"> <?= $animal['description'] ?> </p>
        <img src="<?= $animal['image_url'] ?>" alt="<?= $animal['name'] ?>" class="img-donation">
        <p class="goal<?= $animal['id'] ?>"> Goal: €<?= number_format($animal['goal'], 2) ?> </p>
        <p class="current<?= $animal['id'] ?>"> Current amount: €<span id="current-<?= $animal['id'] ?>"><?= number_format($animal['current_amount'], 2) ?></span> </p>

        <!-- Progress bar -->
        <div class="progress-bar" data-goal="<?= $animal['goal'] ?>">
            <div class="progress" id="progress-<?= $animal['id'] ?>" style="width: <?= ($animal['current_amount'] / $animal['goal']) * 100 ?>%"></div>
        </div>

        <!-- Donation Form -->
        <form action="donate.php" method="POST" class="donation-form" data-animal-id="<?= $animal['id'] ?>">
            <input type="hidden" name="animal_id" value="<?= $animal['id'] ?>">
            <label for="donation">Choose amount:</label>
            <select name="donation" required>
                <option value="10">€10</option>
                <option value="50">€50</option>
                <option value="100">€100</option>
            </select>
            <button type="submit">Submit Donation</button>
        </form>
    </section>
<?php } ?>

<script>
    function submitDonation(animalId, amount) {
        const formData = new FormData();
        formData.append('animal_id', animalId);
        formData.append('donation', amount);

        fetch('donate.php', {
            method: 'POST',
            body: formData
        }).then(response => response.json()).then(data => {
            // Update progress bar and current amount
            let currentAmount = document.getElementById('current-' + animalId);
            let progress = document.getElementById('progress-' + animalId);
            let newAmount = parseFloat(currentAmount.textContent.replace(',', '')) + amount;
            currentAmount.textContent = newAmount.toFixed(2);

            // Get goal from the data-goal attribute
            let goal = parseFloat(progress.parentElement.getAttribute('data-goal'));

            // Update the progress bar width based on the new amount
            let percentage = (newAmount / goal) * 100;
            progress.style.width = percentage + '%';

            // Optionally change the progress bar color when a certain percentage is reached
            if (percentage >= 100) {
                progress.style.backgroundColor = '#193f12'; // Orange when 100% goal is reached
            } else {
                progress.style.backgroundColor = '#6b2c28'; // Red color for filled part
            }
        });

    }

    // Optional: Section reordering logic
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

</body>
</html>
