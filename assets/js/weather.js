import { config } from "./config.js";

document.addEventListener("DOMContentLoaded", function () {
  fetchWeather("Bonn", "current-weather-bonn", "weather-forecast-bonn");
  fetchWeather("Oxford", "current-weather-oxford", "weather-forecast-oxford");
});

function fetchWeather(city, currentElementId, forecastElementId) {
  var apiKey = config.WEATHER_API_KEY;
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
      document.getElementById(currentElementId).innerHTML = weatherDetails;
    })
    .catch((error) => console.error("Error fetching weather data:", error));

  // Fetch 3-day weather forecast
  fetch(forecastUrl)
    .then((response) => response.json())
    .then((data) => {
      var forecastList = data.list
        .filter((item, index) => index % 8 === 0)
        .slice(0, 3);
      var forecastDetails = "<ul>";
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

export function loadWeatherData(apiKey) {
  const locations = [
    { id: "bonn", lat: 50.735851, lng: 7.10066 },
    { id: "oxford", lat: 51.754816, lng: -1.254367 },
  ];

  locations.forEach((location) => {
    fetch(
      `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${location.lat},${location.lng}`
    )
      .then((response) => response.json())
      .then((data) => {
        document.getElementById(`current-weather-${location.id}`).innerHTML = `
          <p>Temperature: ${data.current.temp_c}°C</p>
          <p>Condition: ${data.current.condition.text}</p>
        `;
      })
      .catch((error) =>
        console.error(
          `Error fetching current weather for ${location.id}:`,
          error
        )
      );

    fetch(
      `https://api.weatherapi.com/v1/forecast.json?key=${apiKey}&q=${location.lat},${location.lng}&days=3`
    )
      .then((response) => response.json())
      .then((data) => {
        const forecastHtml = data.forecast.forecastday
          .map(
            (day) => `
          <div>
            <p>Date: ${day.date}</p>
            <p>Max Temp: ${day.day.maxtemp_c}°C</p>
            <p>Min Temp: ${day.day.mintemp_c}°C</p>
            <p>Condition: ${day.day.condition.text}</p>
          </div>
        `
          )
          .join("");
        document.getElementById(`weather-forecast-${location.id}`).innerHTML =
          forecastHtml;
      })
      .catch((error) =>
        console.error(
          `Error fetching weather forecast for ${location.id}:`,
          error
        )
      );
  });
}
