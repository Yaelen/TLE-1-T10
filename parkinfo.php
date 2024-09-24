

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GAIA Park</title>
    <link rel="stylesheet" href="./css/style.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.park-container> .park-column ');

            items.forEach(item => {
                item.addEventListener('click', function() {
                    items.forEach(item => {
                        item.classList.remove('clicked');
                    });

                    this.classList.add('clicked');
                });
            });
        });
    </script>
</head>
<body>
<nav class="nav-park">

    <div class="links">
        <a href="parkinfo.php">PARK</a>
        <a href="seed.php">GAIASEED</a>
        <a href="ams.php">ANIMALS</a>
        <a href="donate.php">SHOP</a>
        <a href="events.php">EVENTS</a>
    </div>
    <a href="index.php" id="logo">GAIA</a>
</nav>
<section class="park-container">
    <div class="park-column" id="alpha-bg">
        <div class="top">
            <h1>MOUNT<br>DENALI</h1>
            <h2>ALASKA AMERICA</h2>
        </div>

        <div class="park-sum">
            Mount Denali is home to thriving populations of mammoths, saber-tooth cats, and giant bison. These species,
            once extinct, now roam freely in this icy wilderness, perfectly adapted to the re-engineered Ice Age ecosystem.
        </div>

        <div class="bot">
            <h1>GAIA</h1>
            <h2>ALPHA</h2>
        </div>
    </div>
    <div class="park-column" id="beta-bg">
        <div class="top">
            <h1>MANGROVE<br>FOREST</h1>
            <h2>BANGLADESH INDIA</h2>
        </div>

        <div class="park-sum">
            The Mangrove Forest has become a vital hub for coastal biodiversity. Once on the brink of collapse,
            it now shelters Bengal tigers and newly revived prehistoric amphibians. Its dense root systems continue to protect the region from rising sea levels.
        </div>

        <div class="bot">
            <h1>GAIA</h1>
            <h2>BETA</h2>
        </div>
    </div>
    <div class="park-column" id="gamma-bg">
        <div class="top">
            <h1>PLITIVCE<br>LAKE</h1>
            <h2>QUEENSLAND CROATIA</h2>
        </div>

        <div class="park-sum">
            Plitvice Lake's pristine waters are now a sanctuary for long-lost aquatic life. Plesiosaurs glide beneath the surface,
            while prehistoric fish and birds fill the surrounding landscape, making it a hotspot for ecological restoration.
        </div>

        <div class="bot">
            <h1>GAIA</h1>
            <h2>GAMMA</h2>
        </div>

    </div>
    <div class="park-column" id="delta-bg">
        <div class="top">
            <h1>AMAZON<br>RAINFOREST</h1>
            <h2>SOUTH AMERICA</h2>
        </div>

        <div class="park-sum">
            The Amazon has regained its status as the planet’s most diverse ecosystem.
            Ancient species like the giant ground sloth and prehistoric birds once again thrive in its dense canopy, thanks to cutting-edge conservation technologies.
        </div>

        <div class="bot">
            <h1>GAIA</h1>
            <h2>DELTA</h2>
        </div>

    </div>
    <div class="park-column" id="epsilon-bg">
        <div class="top">
            <h1>MOUNT<br>RORAIMA</h1>
            <h2>SOUTH AMERICA</h2>
        </div>

        <div class="park-sum">
            The majestic plateaus of Mount Roraima are now home to species that haven’t been seen for millennia.
            Flying reptiles and giant insects populate the cliffs and forests, restoring this unique high-altitude habitat to its prehistoric glory.
        </div>

        <div class="bot">
            <h1>GAIA</h1>
            <h2>EPSILON</h2>
        </div>
    </div>
</section>

<footer>

</footer>
</body>
</html>