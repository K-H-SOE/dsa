document.addEventListener("DOMContentLoaded", function () {
  fetchWeather("Bonn", "weather-details-bonn", "weather-forecast-bonn");
  fetchWeather("Oxford", "weather-details-oxford", "weather-forecast-oxford");
});

function fetchWeather(city, detailsElementId, forecastElementId) {
  var apiKey = config.js;
  var weatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
  var forecastUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${apiKey}&units=metric`;

  // Fetch current weather details
  fetch(weatherUrl)
    .then((response) => response.json())
    .then((data) => {
      var weatherDetails = `
                <p>Temperature: ${data.main.temp}°C</p>
                <p>Weather: ${data.weather[0].description}</p>
                <p>Humidity: ${data.main.humidity}%</p>
                <p>Wind Speed: ${data.wind.speed} m/s</p>
            `;
      document.getElementById(detailsElementId).innerHTML = weatherDetails;
    })
    .catch((error) => console.error("Error fetching weather data:", error));

  // Fetch 3-day weather forecast
  fetch(forecastUrl)
    .then((response) => response.json())
    .then((data) => {
      var forecastList = data.list
        .filter((item, index) => index % 8 === 0)
        .slice(0, 3);
      var forecastDetails = "<h3>3-Day Forecast</h3><ul>";
      forecastList.forEach((item) => {
        var date = new Date(item.dt_txt).toLocaleDateString();
        forecastDetails += `
                    <li>${date}: ${item.weather[0].description}, ${item.main.temp}°C</li>
                `;
      });
      forecastDetails += "</ul>";
      document.getElementById(forecastElementId).innerHTML = forecastDetails;
    })
    .catch((error) => console.error("Error fetching forecast data:", error));
}
