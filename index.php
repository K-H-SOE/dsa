<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maps of Bonn and Oxford</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <script type="module">
      import { config } from "./assets/js/config.js";
      import { loadGoogleMapsAPI } from "./assets/js/map.js";
      import { loadWeatherData } from "./assets/js/weather.js";

      document.addEventListener("DOMContentLoaded", function () {
        loadGoogleMapsAPI(config.MAP_API_KEY, "initMaps");
        loadWeatherData(config.WEATHER_API_KEY);
      });
    </script>
  </head>
  <body>
    <h1>Maps of Bonn and Oxford</h1>
    <h2>Current Weather and Weather Forecast</h2>
      <div id="map-container">
        <div class="map-section">
          <h3>Bonn</h3>
          <div id="current-weather-bonn" class="current-weather"></div>
          <h3>3-Day Forecast</h3>
          <div id="weather-forecast-bonn" class="weather-forecast"></div>
          <div id="map-bonn"></div>
          <div class="places-of-interest">
            <h3>Places of Interest in Bonn</h3>
            <ul>
              <li>
                Beethoven House
                <a
                  class="navigate-button"
                  href="POI-Bonn/beethoven-house.html?lat=50.735851&lng=7.10066"
                  target="_blank"
                  title="Goes to Beethoven House"
                >
                  Go
                </a>
              </li>
              <li>
                Bonn Minster
                <a
                  class="navigate-button"
                  href="POI-Bonn/Bonn-Minster.html?lat=50.7344&lng=7.0955"
                  target="_blank"
                  title="Goes to Bonn Minster"
                >
                  Go
                </a>
              </li>
              <li>
                Poppelsdorf Palace
                <a
                  class="navigate-button"
                  href="POI-Bonn/Poppelsdorf-Palace.html?lat=50.7256&lng=7.0852"
                  target="_blank"
                  title="Goes to Poppelsdorf Palace"
                >
                  Go
                </a>
              </li>
              <li>
                Botanical Garden
                <a
                  class="navigate-button"
                  href="POI-Bonn/Botanical-Garden.html?lat=50.7264&lng=7.0844"
                  target="_blank"
                  title="Goes to Botanical Garden"
                >
                  Go
                </a>
              </li>
              <li>
                Rheinisches Landesmuseum
                <a
                  class="navigate-button"
                  href="POI-Bonn/Rheinisches-Landesmuseum.html?lat=50.7269&lng=7.0934"
                  target="_blank"
                  title="Goes to Rheinisches Landesmuseum"
                >
                  Go
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="map-section">
          <h3>Oxford</h3>
          <div id="current-weather-oxford" class="current-weather"></div>
          <h3>3-Day Forecast</h3>
          <div id="weather-forecast-oxford" class="weather-forecast"></div>
          <div id="map-oxford"></div>
          <div class="places-of-interest">
            <h3>Places of Interest in Oxford</h3>
            <ul>
              <li>
                University of Oxford
                <a
                  class="navigate-button"
                  href="POI-Oxford/university-of-oxford.html?lat=51.754816&lng=-1.254367"
                  target="_blank"
                  title="Goes to University of Oxford"
                >
                  Go
                </a>
              </li>
              <li>
                Oxford Castle
                <a
                  class="navigate-button"
                  href="POI-Oxford/oxford-castle.html?lat=51.7519&lng=-1.2625"
                  target="_blank"
                  title="Goes to Oxford Castle"
                >
                  Go
                </a>
              </li>
              <li>
                Christ Church Cathedral
                <a
                  class="navigate-button"
                  href="POI-Oxford/christ-church-cathedral.html?lat=51.7499&lng=-1.2565"
                  target="_blank"
                  title="Goes to Christ Church Cathedral"
                >
                  Go
                </a>
              </li>
              <li>
                Ashmolean Museum
                <a
                  class="navigate-button"
                  href="POI-Oxford/ashmolean-museum.html?lat=51.7554&lng=-1.2603"
                  target="_blank"
                  title="Goes to Ashmolean Museum"
                >
                  Go
                </a>
              </li>
              <li>
                Pitt Rivers Museum
                <a
                  class="navigate-button"
                  href="POI-Oxford/pitt-rivers-museum.html?lat=51.7586&lng=-1.2553"
                  target="_blank"
                  title="Goes to Pitt Rivers Museum"
                >
                  Go
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <div id="news-container">
      <?php include 'php/rss_feed.php'; ?>
    </div>
  </body>
</html>
