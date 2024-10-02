<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GAIA seed</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gaiaseed.css">

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
</head>

<body>

    <nav>
        <div class="links">
            <a href="parkinfo.php">PARK</a>
            <a href="seed.php">GAIASEED</a>
            <a href="ams.php">ANIMALS</a>
            <a href="support.php">SUPPORT</a>
            <a href="events.php">DISCOVER</a>
        </div>
        <a href="index.php" id="logo">GAIA</a>
    </nav>

    <header>
        <div id="section1">
            <div class="product-image">
                <div class="glass"></div>
                <div class="outline"></div>
            </div>

            <div class="section1-title">
                <div>
                    <h1>GAIA</h1>
                </div>
                <div>
                    <h1 class="h1sub">SEED</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="section2">
        <img class="left-image" src="./images/Gaiaseed-section2-left-img.png" alt="bird-view-forest-with-mountain">

        <div class="section2-text">
            <div class="section2-title">
                <h2>RESTORE</h2>
                <h2 class="nature-text">NATURE<span class="dot">.</span></h2>
            </div>

            <p class="section2-info-text">
                GAIAseed is designed exclusively for GAIApark
                visitors, empowering you to play an active role in
                restoring the environment. This innovative tool
                scans the park's landscape to find the perfect spots
                for planting, or it can even produce seeds suited to
                the specific environment you're in.
            </p>

            <h3>jalla</h3>
        </div>

        <img class="right-tree" src="./images/tall-pines-tree.png" alt="Tall-pines-tree">
    </section>

    <section id="section3">
        <div class="section3-header">
            <div class="section3-head-text">
                <h4>GAIASEED MATTERS.</h4>
                <div class="section3-stats-container">
                    <div class="section3-stat1">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section4">

    </section>

    <section id="section5">
<!--        <script src="https://cdn.amcharts.com/lib/editor/map/5/viewer.js"></script>-->
        <div id="chartdiv"></div>
        <script>
            let root = am5.Root.new("chartdiv");
            let chart = root.container.children.push(
                am5map.MapChart.new(root, {})
            );
        </script>
    </section>
</body>
</html>
