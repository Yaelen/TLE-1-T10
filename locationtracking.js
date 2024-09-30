window.addEventListener('load', init);
let livelongitude = 0;
let livelatitude = 0;
let map;
let animals;
let animal_name
let data
let animal_image
let animal_info
let animal_age
let animal_diet
let animal_park
let animal_population

let animalData = [];

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
//     data = JSON.parse(document.getElementById('data').textContent)
//     console.log(data[0].animal)
    fetchMapData();
    fetchAnimalData();
    animals = document.getElementById('animals-circkels');
    animal_name = document.getElementById('animalname')
    animal_image = document.getElementById('animalImage')
    animal_info = document.getElementById('animal_information')
    animal_age = document.getElementById('age')
    animal_diet = document.getElementById('dieet')
    animal_park = document.getElementById('park')
    animal_population = document.getElementById('population')
    // animal_name.innerHTML =
    // console.log(animals)
    animals.addEventListener('click', detailanimalClickHandler);
}

function fetchMapData() {
    fetch('chartdiv.json') // replace with the URL where the JSON data is located
        .then(response => response.json())
        .then(getLocationSuccessHandler)
        .catch(error => console.error('Error:', error));

}

function fetchAnimalData() {
    fetch('./animal_json.php') // replace with the URL where the JSON data is located
        .then(response => response.json())
        .then(getAnimalDataSuccesHandler)
        .catch(error => console.error('Error:', error));
}

function getAnimalDataSuccesHandler(animaldata) {
    animalData = animaldata
    console.log(animalData)
}

function detailanimalClickHandler(e) {
    const target = e.target
    if (target) {
        // Get the animal name from the data attribute
        const animal = target.getAttribute('id');
        animalData.forEach(animal => {
            if (animal.id === e.target.id) {
                console.log(animal)
                console.log(`Match found: ${animal.animal}`);
                animal_name.innerHTML = animal.animal;
                animal_image.src = animal.animal_picture
                animal_info.innerHTML = animal.animal_information;
                animal_age.innerHTML = `age: ${animal.age}`;
                animal_diet.innerHTML = `diet: ${animal.dieet}`;
                animal_park.innerHTML = `park: ${animal.park}`;
                animal_population.innerHTML = `population: ${animal.population}`;
            }
        });
        // animal_name.innerHTML = animalData[animal];
    }// For debugging
}

function getLocationSuccessHandler(data) {
    // console.log(data)
    data.data['editor.pointSeries'][5].geometry.coordinates.push(livelongitude, livelatitude)
    createmap(data)


}

function createmap(data) {
    am5viewer.create("chartdiv", data);
}

//
// function pointClickHandler(){
//     console.log('ja')
// }

navigator.geolocation.getCurrentPosition(position => {
    const {latitude, longitude} = position.coords;
    // Show a map centered at latitude / longitude.
    livelongitude = longitude;
    livelatitude = latitude
    // console.log(livelatitude,livelongitude);
});

// const watchId = navigator.geolocation.watchPosition(position => {
//     const {latitude, longitude} = position.coords;
//     // Show a map centered at latitude / longitude.
//     console.log(watchId);

