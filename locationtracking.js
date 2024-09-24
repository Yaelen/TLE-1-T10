window.addEventListener('load', init);
let livelongitude= 0;
let livelatitude = 0;


function init() {
    // const chartdiv= document.getElementById('chartdiv')
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
    console.log(data.data['editor.pointSeries'])
    data.data['editor.pointSeries'][5].geometry.coordinates.push(livelongitude,livelatitude)
    am5viewer.create("chartdiv", data)

    // console.log(data.data.editorpoint_Series[5].geometry.coordinates)

    // livelocation.push()
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

