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
<!--<div class="background">-->
<!--    <div class="content">-->
<!--        <h1>Something</h1>-->
<!--        <p>???</p>-->
<!--        <div style="height: 2000px;"></div>-->
<!--    </div>-->
<!--</div>-->

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
        <section>
            <div class="title-main">
                <h1><span class="green-main-gaia-text">GAIA</span><br><span class="small-main-text">Committed to Reviving Earth&#39s Natural Balance </span><span class="medium-main-text">PARK</span></h1>
            </div>
            <div>
                <h2>WHERE<br>NATURE &#38 HUMANITY<br><span class="opposite-side-text">RECONNECT</span></h2>
            </div>
        </section>
    </header>

    <footer>

    </footer>

</body>
</html>