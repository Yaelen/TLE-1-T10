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





        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('.image-slider');
            let currentImageIndex = 0;
            let scrollLocked = false;

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !scrollLocked) {
                        scrollLocked = true; // Lock scroll while in this section
                        document.body.style.overflow = 'hidden'; // Prevent page scroll
                        window.addEventListener('wheel', handleScroll); // Add scroll event listener
                    }
                });
            }, { threshold: 0.5 });

            const imageSection = document.querySelector('.section-park');
            observer.observe(imageSection);

            function handleScroll(event) {
                const number = event.deltaY;

                if (number > 0 && currentImageIndex < images.length - 1) {
                    // Scrolling down, go to the next image
                    changeImage(1);
                } else if (number < 0 && currentImageIndex > 0) {
                    // Scrolling up, go to the previous image
                    changeImage(-1);
                }
            }

            function changeImage(direction) {
                // Fade out the current image
                images[currentImageIndex].classList.remove('active');

                // Update the current image index
                currentImageIndex += direction;

                // Fade in the new image
                images[currentImageIndex].classList.add('active');

                // If all images are done, unlock the scroll
                if (currentImageIndex === images.length - 1 || currentImageIndex === 0) {
                    document.body.style.overflow = 'auto';
                    scrollLocked = false;
                    window.removeEventListener('wheel', handleScroll); // Remove scroll listener
                }
            }
        });

    </script>
</head>
<body>

    <header class="background">
        <nav>

            <div class="links">
                <a href="parkinfo.php">PARK</a>
                <a href="seed.php">GAIASEED</a>
                <a href="ams.php">ANIMALS</a>
                <a href="donate.php">SHOP</a>
                <a href="events.php">EVENTS</a>
            </div>
            <a href="index.php" id="logo">GAIA</a>
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

    <section class="section-park">
        <p class="text-park">Gaia Park is a sanctuary in a dystopian world, designed to
            restore biodiversity and reduce CO2 levels. Using Gaia Seed
            devices, visitors can plant and care for new life, actively
            contributing to the ecosystem. With species like mammoths
            revived to aid in ecological balance, the park offers more
            than just a natural escape. Events like markets and parties
            can be hosted, and donations help fund these initiatives—bringing
            people closer to nature while helping revive the planet.</p>
        <div id="images-div">
            <img src="images/slide-photo-1.png" class="image-slider active"/>
            <img src="images/slide-photo-2.png" class="image-slider"/>
            <img src="images/slide-photo-3.png" class="image-slider"/>
            <img src="images/slide-photo-4.png" class="image-slider"/>
        </div>
        <div class="park-button-div">
            <a class="link-button" id="park-button" href="parkinfo.php">PARKS</a>
        </div>
    </section>

    <div class="grey-background">
        <section class="section-gaiaseed">
            <h1 class="title-gaiaseed">GAIASEED</h1>
            <div class="text-img-gaiaseed-div">
                <div class="text-button-gaiaseed-div">
                    <p class="text-gaiaseed">One of the park's standout features is the
                        Gaia Seed, a device
                        that allows visitors to plant and care for a wide variety of
                        plants. From trees to flowers, each visitor contributes
                        directly to restoring the park's ecosystem by nurturing
                        new life and helping biodiversity flourish.</p>
                    <div class="gaiaseed-button-div">
                        <a class="link-button" id="gaiaseed-button" href="seed.php">GAIASEED</a>
                    </div>
                </div>
                <img src="images/Gaiaseed-demo-img.png" alt="seed dispenser" class="img-gaiaseed">
            </div>
        </section>

        <section class="section-animals">
            <div class="animal-text-behind">
                <h1 class="title-animals">ANIMALS</h1>
                <div class="subtitle-text-animals">
                    <h3 class="subtitle-animals">BRING THEM BACK</h3>
                    <p class="text-animals">Another key feature of the parkis the revival of extinct species,
                        including mammoths and other key animals. These creatures, alongside
                        species like wild horses, giant sloths, and aurochs, play vital roles
                        in rebuilding ecosystems and reducing CO2 levels. Their presence helps
                        restore biodiversity, creating a sustainable environment where nature
                        can thrive once again.</p>
                </div>
            </div>
            <img src="images/mountain.png" class="mountain-img" alt="mountain">
        </section>
    </div>

    <section class="section-species">
        <h1 class="title-species">SPECIES</h1>
        <div class="species-text-button-img">
            <div class="species-text-button">
                <div class="species-text">
                    <p><span class="species-number">1.</span>  Woolly Mammoth<br>
                        <span class="species-number">2.</span>  Saber-Toothed Tiger<br>
                        <span class="species-number">3.</span>  Dodo<br>
                        <span class="species-number">4.</span>  Woolly Rhinoceros<br></p>
                    <p><span class="species-number">5.</span>  Glyptodon<br>
                        <span class="species-number">6.</span>  Quagga<br>
                        <span class="species-number">7.</span>  Deinosuchus<br>
                        <span class="species-number">8.</span>  Dunkleosteus<br></p>
                </div>
                <div class="species-button-div">
                    <a class="link-button" id="species-button" href="ams.php">ANIMALS</a>
                </div>
            </div>
            <img src="images/earth-outline.png" class="earth-img" alt="earth">
        </div>
    </section>

    <section class="section-shop-events">
        <div class="vid-title-text-shop-events">
            <video class="nature-background-video" autoplay muted loop playsinline>
                <source src="images/nature-video.mp4" type="video/mp4">
            </video>
            <div class="title-text-shop-events">
                <h2 class="subtitle-shop-events">PARK'S EXTRAS FOR</h2>
                <h1 class="title-shop-events">YOU</h1>

            </div>
            <p class="shop-events-text">Gaia Park is more than just a sanctuary; it's a community space where people
                can reconnect with nature. Visitors can attend markets, workshops, celebrations,
                or just rest, with all proceeds supporting the park’s efforts. Donations are tied
                to specific goals, offering discounts for events and the chance for everyone to
                see their collective impact. By engaging with Gaia Park, visitors become part of
                a global movement to restore the planet’s natural balance.</p>
        </div>
        <div class="buttons-shop-events">
            <a class="link-button" id="shop-button" href="donate.php">SHOP</a>
            <a class="link-button" id="events-button" href="events.php">EVENTS</a>
        </div>

    </section>

</body>
</html>