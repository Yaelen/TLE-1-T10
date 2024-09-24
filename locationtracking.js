window.addEventListener('load', init);
let livelongitude= 0;
let livelatitude = 0;
let map;


function init() {
//     // const chartdiv= document.getElementById('chartdiv')
//
//     /**
//      * ---------------------------------------
//      * This demo was created using amCharts 5.
//      *
//      * For more information visit:
//      * https://www.amcharts.com/
//      *
//      * Documentation is available at:
//      * https://www.amcharts.com/docs/v5/
//      * ---------------------------------------
//      */
//
// // Create root
//     var root = am5.Root.new("chartdiv");
//
// // Set themes
//     root.setThemes([
//         am5themes_Animated.new(root)
//     ]);
//
// // Create chart
//     var chart = root.container.children.push(am5map.MapChart.new(root, {
//         panX: "rotateX",
//         panY: "none",
//         projection: am5map.geoOrthographic()
//     }));
//
//     var polygonfill = root.container.children.push(am5map.polygonFill.new(root, {
//         type: "Color",
//         value: am5.color(#fa0000)
//     }));
//
// // Create polygon series
//     var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
//         geoJSON: am5geodata_worldLow,
//         exclude: ["AQ"]
//     }));
//
// // Create point series
//     var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {
//         latitudeField: "lat",
//         longitudeField: "long"
//     }));
//
//     pointSeries.bullets.push(function() {
//         var circle = am5.Circle.new(root, {
//             radius: 5,
//             fill: am5.color(0x19a8f7),
//             tooltipText: "{name}"
//         });
//
//         circle.events.on("click", function(ev) {
//             alert("Clicked on " + ev.target.dataItem.dataContext.name)
//         });
//
//         return am5.Bullet.new(root, {
//             sprite: circle
//         });
//     });
//
//     pointSeries.data.setAll([{
//         long: livelongitude,
//         lat: livelatitude,
//         name: "Phone"
//     }, {
//         long: -0.454296,
//         lat: 51.470020,
//         name: "London"
//     }, {
//         long: 116.597504,
//         lat: 40.072498,
//         name: "Beijing"
//     }]);


    fetchData();
}

function fetchData() {
    fetch('chartdiv.json') // replace with the URL where the JSON data is located
        .then(response => response.json())
        .then(getLocationSuccessHandler)
            // // am5viewer.create("chartdiv", researchData)
            // console.log()
        .catch(error => console.error('Error:', error));

}

function getLocationSuccessHandler(data){
    console.log(data)
    data.data['editor.pointSeries'][5].geometry.coordinates.push(livelongitude,livelatitude)

    // data.data['editor.pointSeries'].bullets.push(function() {
    //     var circle = am5.Circle.new(root, {
    //         radius: 5,
    //         fill: am5.color(0xff0000),
    //         tooltipText: "{name}"
    //     });
    //
    //     circle.events.on("click", function(ev) {
    //         console.log(ev.target.dataItem);
    //     });
    //
    //     return am5.Bullet.new(root, {
    //         sprite: circle
    //     });
    // });

    am5viewer.create("chartdiv", data);
}

function pointClickHandler(){
    console.log('ja')
}

navigator.geolocation.getCurrentPosition(position => {
    const { latitude, longitude } = position.coords;
    // Show a map centered at latitude / longitude.
    livelongitude = longitude;
    livelatitude = latitude
    console.log(livelatitude,livelongitude);
});

// const watchId = navigator.geolocation.watchPosition(position => {
//     const {latitude, longitude} = position.coords;
//     // Show a map centered at latitude / longitude.
//     console.log(watchId);

