

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>My World by amCharts</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=yes, minimal-ui">
    <link rel="stylesheet" href="./css/style.css">
    <script src="//cdn.amcharts.com/lib/5/index.js" defer></script>
    <script src="//cdn.amcharts.com/lib/5/map.js" defer></script>
    <script src="//cdn.amcharts.com/lib/5/geodata/worldLow.js" defer></script>
    <script src="//cdn.amcharts.com/lib/5/themes/Animated.js" defer></script>
    <script type="text/javascript" src="./locationtracking.js" defer></script>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 12px;
            padding: 0;
            margin: 0;
        }

        #chartdiv {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
<body>

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

<script src="https://cdn.amcharts.com/lib/editor/map/5/viewer.js"></script>
<div id="chartdiv"></div>


</body>
</html>