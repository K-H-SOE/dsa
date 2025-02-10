var mapBonn, mapOxford;

function initMap() {
  var bonn = { lat: 50.7374, lng: 7.0982 };
  var oxford = { lat: 51.752, lng: -1.2577 };

  mapBonn = new google.maps.Map(document.getElementById("map-bonn"), {
    zoom: 14,
    center: bonn,
  });
  var markerBonn = new google.maps.Marker({
    position: bonn,
    map: mapBonn,
  });

  mapOxford = new google.maps.Map(document.getElementById("map-oxford"), {
    zoom: 14,
    center: oxford,
  });
  var markerOxford = new google.maps.Marker({
    position: oxford,
    map: mapOxford,
  });
}

function fetchWeather(city, elementId) {
  var apiKey = "df4de86466c5f167956cfd67c21994ca";
  var url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      var weatherInfo = `Weather in ${city}: ${data.weather[0].description}, ${data.main.temp}°C`;
      var details = `
                <div>Wind Speed: ${data.wind.speed} m/s</div>
                <div>Humidity: ${data.main.humidity}%</div>
                <div>Pressure: ${data.main.pressure} hPa</div>
            `;
      document.getElementById(elementId).innerHTML = `
                ${weatherInfo}
                <button class="details-button" onclick="window.location.href='weather.html'">More Weather Details</button>
                <div class="details">${details}</div>
            `;
    })
    .catch((error) => console.error("Error fetching weather data:", error));
}

function navigateToLocation(map, lat, lng) {
  map.setCenter({ lat: lat, lng: lng });
  map.setZoom(16);
}

window.onload = function () {
  initMap();
  fetchWeather("Bonn", "weather-bonn");
  fetchWeather("Oxford", "weather-oxford");
};
