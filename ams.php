<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>My World by amCharts</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=yes, minimal-ui">
    <link rel="stylesheet" href="./css/style.css">
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
<script>

    /**
     * -----------------------------------------------
     * This map was created using amCharts Map Editor.
     *
     * To create your own map visit:
     * https://pixelmap.amcharts.com/
     *
     * For more information on amCharts visit:
     * https://www.amcharts.com/
     * -----------------------------------------------
     */

    am5viewer.create("chartdiv", {
        "settings": {
            "editor": {
                "userData": {
                    "projection": "geoMercator",
                    "geodata": "worldLow"
                },
                "themeTags": [
                    "dark"
                ],
                "backgroundFill": {
                    "type": "Color",
                    "value": "#000000"
                },
                "pointFill": {
                    "type": "Color",
                    "value": "#358539"
                },
                "pointStroke": {
                    "type": "Color",
                    "value": "#000000"
                },
                "pointStrokeOpacity": 0,
                "pointFillHover": {
                    "type": "Color",
                    "value": "#7ccd81"
                },
                "pointFillOpacityHover": 0.7019607843137254,
                "backgroundNoise": false,
                "polygonInteractive": false,
                "pointScale": 1.2,
                "pointTypeKey": "Target",
                "labelInteractive": false,
                "pointLabelText": "GAIA Epsilon",
                "__parse": true
            },
            "editor.map": {
                "minZoomLevel": 0.8,
                "projection": "geoOrthographic",
                "panX": "rotateX",
                "zoomControl": {
                    "type": "ZoomControl",
                    "settings": {
                        "visible": false,
                        "position": "absolute",
                        "layout": {
                            "type": "VerticalLayout"
                        },
                        "themeTags": [
                            "zoomtools"
                        ],
                        "layer": 30,
                        "opacity": 0
                    }
                },
                "background": {
                    "type": "Rectangle",
                    "settings": {
                        "fill": {
                            "type": "Color",
                            "value": "#000000"
                        },
                        "fillOpacity": 1,
                        "width": 1600,
                        "height": 865,
                        "x": 0,
                        "y": 0,
                        "isMeasured": false
                    }
                },
                "themeTags": [
                    "map"
                ],
                "translateX": 777.1264927984749,
                "translateY": 387.5666871102827,
                "panY": "rotateY",
                "rotationX": -7.3768048228154655,
                "rotationY": -25.94648975296395,
                "__parse": true,
                "homeZoomLevel": 0.8,
                "homeGeoPoint": {
                    "longitude": 11.363089671686499,
                    "latitude": 18.445060655449886
                },
                "homeRotationX": -7.3768048228154655,
                "homeRotationY": -25.94648975296395
            },
            "editor.pointTemplate": {
                "toggleKey": "active",
                "centerX": {
                    "type": "Percent",
                    "value": 50
                },
                "centerY": {
                    "type": "Percent",
                    "value": 50
                },
                "tooltipText": "{name}",
                "__parse": true
            },
            "editor.bubbleTemplate": {
                "toggleKey": "active",
                "tooltipText": "{name}: {value}",
                "__parse": true
            },
            "editor.pixelTemplate": {
                "tooltipText": "{name}",
                "toggleKey": "active",
                "__parse": true,
                "userData": {
                    "point1": {
                        "longitude": 119.87513007284079,
                        "latitude": -56.26075177465279
                    },
                    "point2": {
                        "longitude": 127.36732570239334,
                        "latitude": -56.26075177465279
                    }
                }
            },
            "editor.linePointTemplate": {
                "toggleKey": "active",
                "centerX": {
                    "type": "Percent",
                    "value": 50
                },
                "centerY": {
                    "type": "Percent",
                    "value": 50
                },
                "tooltipText": "{name}",
                "__parse": true
            },
            "editor.labelTemplate": {
                "toggleKey": "active",
                "tooltipText": "{name}",
                "__parse": true
            },
            "editor.polygonSeries": {
                "valueField": "value",
                "calculateAggregates": true,
                "id": "polygonseries",
                "exclude": [],
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "__parse": true
            },
            "editor.lineSeries": {
                "layer": 30,
                "id": "lineseries",
                "lineTypeField": "lineType",
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "__parse": true
            },
            "editor.pointSeries": {
                "fixedField": "fixed",
                "id": "pointseries",
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "__parse": true
            },
            "editor.labelSeries": {
                "fixedField": "fixed",
                "id": "labelseries",
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "__parse": true
            },
            "editor.bubbleSeries": {
                "calculateAggregates": true,
                "valueField": "value",
                "polygonIdField": "id",
                "id": "bubbleseries",
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "__parse": true
            },
            "editor.gridSeries": {
                "themeTags": [
                    "grid"
                ],
                "affectsBounds": false,
                "lineTypeField": "lineType",
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "visible": false,
                "clipExtent": true,
                "__parse": true
            },
            "editor.backgroundSeries": {
                "visible": false,
                "themeTags": [
                    "polygon",
                    "background"
                ],
                "affectsBounds": false,
                "geometryField": "geometry",
                "geometryTypeField": "geometryType",
                "idField": "id",
                "exclude": [
                    "bg"
                ],
                "__parse": true
            },
            "editor.backgroundSeries.mapPolygons.template": {
                "forceInactive": true,
                "fill": {
                    "type": "Color",
                    "value": "#ffffff"
                },
                "stroke": {
                    "type": "Color",
                    "value": "#ffffff"
                },
                "__parse": true
            },
            "editor.gridSeries.mapLines.template": {
                "forceInactive": true,
                "stroke": {
                    "type": "Color",
                    "value": "#ffffff"
                },
                "strokeOpacity": 0.04,
                "__parse": true
            }
        },
        "data": {
            "editor.polygonSeries": [],
            "editor.lineSeries": [],
            "editor.pointSeries": [
                {
                    "fixed": false,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            -155.25038,
                            61.99548
                        ],
                        "__parse": false
                    },
                    "id": "point_1",
                    "name": "GAIA Alpha",
                    "settings": {
                        "type": "Template",
                        "settings": {
                            "fillOpacity": 0.7019607843137254,
                            "fill": {
                                "type": "Color",
                                "value": "#358539"
                            },
                            "stroke": {
                                "type": "Color",
                                "value": "#ffffff"
                            },
                            "strokeOpacity": 0,
                            "scale": 1.2,
                            "strokeWidth": 0.5,
                            "x": {
                                "type": "Percent",
                                "value": 57.49999999999999
                            },
                            "y": {
                                "type": "Percent",
                                "value": 25.953757225433527
                            },
                            "name": "GAIA Alpha"
                        }
                    },
                    "pointType": "Target",
                    "__parse": true
                },
                {
                    "fixed": false,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            78.43239,
                            13.52748
                        ],
                        "__parse": false
                    },
                    "id": "point_2",
                    "name": "GAIA Beta",
                    "settings": {
                        "type": "Template",
                        "settings": {
                            "fillOpacity": 0.7019607843137254,
                            "fill": {
                                "type": "Color",
                                "value": "#358539"
                            },
                            "stroke": {
                                "type": "Color",
                                "value": "#000000"
                            },
                            "strokeOpacity": 0,
                            "scale": 1.2,
                            "strokeWidth": 0.5,
                            "x": {
                                "type": "Percent",
                                "value": 55.93749999999999
                            },
                            "y": {
                                "type": "Percent",
                                "value": 35.95375722543353
                            },
                            "name": "GAIA Beta"
                        }
                    },
                    "pointType": "Target",
                    "__parse": true
                },
                {
                    "fixed": false,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            15.27632,
                            44.83914
                        ],
                        "__parse": false
                    },
                    "id": "point_3",
                    "name": "GAIA Gamma",
                    "settings": {
                        "type": "Template",
                        "settings": {
                            "fillOpacity": 0.7019607843137254,
                            "fill": {
                                "type": "Color",
                                "value": "#358539"
                            },
                            "stroke": {
                                "type": "Color",
                                "value": "#000000"
                            },
                            "strokeOpacity": 0,
                            "scale": 1.2,
                            "strokeWidth": 0.5,
                            "x": {
                                "type": "Percent",
                                "value": 52.96875
                            },
                            "y": {
                                "type": "Percent",
                                "value": 16.127167630057805
                            },
                            "name": "GAIA Gamma"
                        }
                    },
                    "pointType": "Target",
                    "__parse": true
                },
                {
                    "fixed": false,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            -58.90357,
                            -4.15758
                        ],
                        "__parse": false
                    },
                    "id": "point_4",
                    "name": "GAIA Delta",
                    "settings": {
                        "type": "Template",
                        "settings": {
                            "fillOpacity": 0.7,
                            "fill": {
                                "type": "Color",
                                "value": "#358539"
                            },
                            "stroke": {
                                "type": "Color",
                                "value": "#000000"
                            },
                            "strokeOpacity": 0,
                            "scale": 1.2,
                            "strokeWidth": 0.5,
                            "x": {
                                "type": "Percent",
                                "value": 41.09375
                            },
                            "y": {
                                "type": "Percent",
                                "value": 45.202312138728324
                            },
                            "name": "GAIA Delta"
                        }
                    },
                    "pointType": "Target",
                    "__parse": true
                },
                {
                    "fixed": false,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            -61.51043,
                            5.46308
                        ],
                        "__parse": false
                    },
                    "id": "point_5",
                    "name": "GAIA Epsilon",
                    "settings": {
                        "type": "Template",
                        "settings": {
                            "fillOpacity": 0.7,
                            "fill": {
                                "type": "Color",
                                "value": "#358539"
                            },
                            "stroke": {
                                "type": "Color",
                                "value": "#000000"
                            },
                            "strokeOpacity": 0,
                            "scale": 1.2,
                            "strokeWidth": 0.5,
                            "x": {
                                "type": "Percent",
                                "value": 43.71875
                            },
                            "y": {
                                "type": "Percent",
                                "value": 52.716763005780344
                            },
                            "name": "GAIA Epsilon"
                        }
                    },
                    "pointType": "Target",
                    "__parse": true
                }
            ],
            "editor.labelSeries": [],
            "editor.bubbleSeries": [],
            "editor.gridSeries": []
        }
    });

</script>

</body>
</html>