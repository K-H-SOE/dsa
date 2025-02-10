document.addEventListener('DOMContentLoaded', function() {
    fetchWeather('Bonn', 'weather-details-bonn');
    fetchWeather('Oxford', 'weather-details-oxford');
});

function fetchWeather(city, elementId) {
    var apiKey = 'df4de86466c5f167956cfd67c21994ca';
    var url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            var weatherDetails = `
                <p>Temperature: ${data.main.temp}°C</p>
                <p>Weather: ${data.weather[0].description}</p>
                <p>Humidity: ${data.main.humidity}%</p>
                <p>Wind Speed: ${data.wind.speed} m/s</p>
            `;
            document.getElementById(elementId).innerHTML = weatherDetails;
        })
        .catch(error => console.error('Error fetching weather data:', error));
}