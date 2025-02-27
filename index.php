<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maps of Bonn and Oxford</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <script src="assets/js/toggleDarkMode.js"></script>
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
    <button id="dark-mode-toggle">
      <i class="fas fa-moon"></i> <span>Dark Mode</span>
    </button>
    
    <div class="container">
      <h1>Maps of Bonn and Oxford</h1>
      <h2>Current Weather and Weather Forecast</h2>
      
      <div id="map-container">
        <div class="map-section">
          <h3><i class="fas fa-map-marker-alt"></i> Bonn</h3>
          <div id="current-weather-bonn" class="current-weather"></div>
          <h3><i class="fas fa-calendar-alt"></i> 3-Day Forecast</h3>
          <div id="weather-forecast-bonn" class="weather-forecast"></div>
          <div id="map-bonn"></div>
          <div class="places-of-interest">
            <h3><i class="fas fa-landmark"></i> Places of Interest in Bonn</h3>
            <ul>
              <li>
                <span><i class="fas fa-music"></i> Beethoven House</span>
                <a
                  class="navigate-button"
                  href="POI-Bonn/beethoven-house.html?lat=50.735851&lng=7.10066"
                  target="_blank"
                  title="Goes to Beethoven House"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-church"></i> Bonn Minster</span>
                <a
                  class="navigate-button"
                  href="POI-Bonn/Bonn-Minster.html?lat=50.7344&lng=7.0955"
                  target="_blank"
                  title="Goes to Bonn Minster"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-landmark"></i> Poppelsdorf Palace</span>
                <a
                  class="navigate-button"
                  href="POI-Bonn/Poppelsdorf-Palace.html?lat=50.7256&lng=7.0852"
                  target="_blank"
                  title="Goes to Poppelsdorf Palace"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-seedling"></i> Botanical Garden</span>
                <a
                  class="navigate-button"
                  href="POI-Bonn/Botanical-Garden.html?lat=50.7264&lng=7.0844"
                  target="_blank"
                  title="Goes to Botanical Garden"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-landmark"></i> Rheinisches Landesmuseum</span>
                <a
                  class="navigate-button"
                  href="POI-Bonn/Rheinisches-Landesmuseum.html?lat=50.7269&lng=7.0934"
                  target="_blank"
                  title="Goes to Rheinisches Landesmuseum"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="map-section">
          <h3><i class="fas fa-map-marker-alt"></i> Oxford</h3>
          <div id="current-weather-oxford" class="current-weather"></div>
          <h3><i class="fas fa-calendar-alt"></i> 3-Day Forecast</h3>
          <div id="weather-forecast-oxford" class="weather-forecast"></div>
          <div id="map-oxford"></div>
          <div class="places-of-interest">
            <h3><i class="fas fa-landmark"></i> Places of Interest in Oxford</h3>
            <ul>
              <li>
                <span><i class="fas fa-university"></i> University of Oxford</span>
                <a
                  class="navigate-button"
                  href="POI-Oxford/university-of-oxford.html?lat=51.754816&lng=-1.254367"
                  target="_blank"
                  title="Goes to University of Oxford"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-landmark"></i> Oxford Castle</span>
                <a
                  class="navigate-button"
                  href="POI-Oxford/oxford-castle.html?lat=51.7519&lng=-1.2625"
                  target="_blank"
                  title="Goes to Oxford Castle"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-church"></i> Christ Church Cathedral</span>
                <a
                  class="navigate-button"
                  href="POI-Oxford/christ-church-cathedral.html?lat=51.7499&lng=-1.2565"
                  target="_blank"
                  title="Goes to Christ Church Cathedral"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-landmark"></i> Ashmolean Museum</span>
                <a
                  class="navigate-button"
                  href="POI-Oxford/ashmolean-museum.html?lat=51.7554&lng=-1.2603"
                  target="_blank"
                  title="Goes to Ashmolean Museum"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
              <li>
                <span><i class="fas fa-landmark"></i> Pitt Rivers Museum</span>
                <a
                  class="navigate-button"
                  href="POI-Oxford/pitt-rivers-museum.html?lat=51.7586&lng=-1.2553"
                  target="_blank"
                  title="Goes to Pitt Rivers Museum"
                >
                  <i class="fas fa-arrow-right"></i> Visit
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div id="news-container">
        <?php include 'php/rss_feed.php'; ?>
      </div>
    </div>
    
    <footer>
      <p>&copy; <?php echo date('Y'); ?> Maps Explorer - Weather & Points of Interest</p>
    </footer>
  </body>
</html>
