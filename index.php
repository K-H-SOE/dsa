<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maps of Bonn and Oxford</title>
    <!-- External CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS - Simplified -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
      import { config } from "./assets/js/config.js";
      import { loadGoogleMapsAPI } from "./assets/js/map.js";
      import { loadWeatherData } from "./assets/js/weather.js";

      document.addEventListener("DOMContentLoaded", function() {
        // Load APIs
        loadGoogleMapsAPI(config.MAP_API_KEY, "initMaps");
        loadWeatherData(config.WEATHER_API_KEY);
        
        // Dark mode functionality
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        if (darkModeToggle) {
          const isDarkMode = localStorage.getItem('darkMode') === 'true';
          
          if (isDarkMode) {
            document.body.classList.add('dark-mode');
            darkModeToggle.innerHTML = '<i class="fas fa-sun me-2"></i>Light Mode';
          } else {
            darkModeToggle.innerHTML = '<i class="fas fa-moon me-2"></i>Dark Mode';
          }
          
          darkModeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const isDarkModeNow = document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkModeNow);
            this.innerHTML = isDarkModeNow ? 
              '<i class="fas fa-sun me-2"></i>Light Mode' : 
              '<i class="fas fa-moon me-2"></i>Dark Mode';
          });
        }
      });
    </script>
  </head>
  <body>
    <!-- Dark Mode Toggle -->
    <button id="dark-mode-toggle" class="btn btn-dark position-fixed top-0 end-0 m-3 shadow-sm">
      <i class="fas fa-moon me-2"></i>Dark Mode
    </button>
    
    <!-- Main Container -->
    <div class="container py-4">
      <!-- Header -->
      <div class="text-center mb-5">
        <h1 class="display-4">Maps of Bonn and Oxford</h1>
        <h2 class="lead">Current Weather and Weather Forecast</h2>
      </div>
      
      <!-- City Cards -->
      <div class="row g-4">
        <!-- Bonn Section -->
        <div class="col-lg-6 mb-4">
          <div class="card h-100 shadow-sm border">
            <div class="card-header bg-primary text-white">
              <h3 class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Bonn</h3>
            </div>
            <div class="card-body">
              <!-- Weather -->
              <div id="current-weather-bonn" class="current-weather mb-4"></div>
              <h4 class="mb-3"><i class="fas fa-calendar-alt me-2"></i>3-Day Forecast</h4>
              <div id="weather-forecast-bonn" class="weather-forecast mb-4"></div>
              
              <!-- Map -->
              <div id="map-bonn" class="mb-4 rounded shadow-sm border"></div>
              
              <!-- Points of Interest -->
              <div class="bg-light p-4 rounded shadow-sm border">
                <h4 class="mb-3"><i class="fas fa-landmark me-2"></i>Places of Interest</h4>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-music text-primary me-2"></i>Beethoven House</span>
                    <a class="btn btn-primary btn-sm" href="POI-Bonn/beethoven-house.html?lat=50.735851&lng=7.10066" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-church text-primary me-2"></i>Bonn Minster</span>
                    <a class="btn btn-primary btn-sm" href="POI-Bonn/Bonn-Minster.html?lat=50.7344&lng=7.0955" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-landmark text-primary me-2"></i>Poppelsdorf Palace</span>
                    <a class="btn btn-primary btn-sm" href="POI-Bonn/Poppelsdorf-Palace.html?lat=50.7256&lng=7.0852" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-seedling text-primary me-2"></i>Botanical Garden</span>
                    <a class="btn btn-primary btn-sm" href="POI-Bonn/Botanical-Garden.html?lat=50.7264&lng=7.0844" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-landmark text-primary me-2"></i>Rheinisches Landesmuseum</span>
                    <a class="btn btn-primary btn-sm" href="POI-Bonn/Rheinisches-Landesmuseum.html?lat=50.7269&lng=7.0934" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Oxford Section -->
        <div class="col-lg-6 mb-4">
          <div class="card h-100 shadow-sm border">
            <div class="card-header bg-primary text-white">
              <h3 class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Oxford</h3>
            </div>
            <div class="card-body">
              <!-- Weather -->
              <div id="current-weather-oxford" class="current-weather mb-4"></div>
              <h4 class="mb-3"><i class="fas fa-calendar-alt me-2"></i>3-Day Forecast</h4>
              <div id="weather-forecast-oxford" class="weather-forecast mb-4"></div>
              
              <!-- Map -->
              <div id="map-oxford" class="mb-4 rounded shadow-sm border"></div>
              
              <!-- Points of Interest -->
              <div class="bg-light p-4 rounded shadow-sm border">
                <h4 class="mb-3"><i class="fas fa-landmark me-2"></i>Places of Interest</h4>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-university text-primary me-2"></i>University of Oxford</span>
                    <a class="btn btn-primary btn-sm" href="POI-Oxford/university-of-oxford.html?lat=51.754816&lng=-1.254367" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-landmark text-primary me-2"></i>Oxford Castle</span>
                    <a class="btn btn-primary btn-sm" href="POI-Oxford/oxford-castle.html?lat=51.7519&lng=-1.2625" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-church text-primary me-2"></i>Christ Church Cathedral</span>
                    <a class="btn btn-primary btn-sm" href="POI-Oxford/christ-church-cathedral.html?lat=51.7499&lng=-1.2565" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-landmark text-primary me-2"></i>Ashmolean Museum</span>
                    <a class="btn btn-primary btn-sm" href="POI-Oxford/ashmolean-museum.html?lat=51.7554&lng=-1.2603" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    <span><i class="fas fa-landmark text-primary me-2"></i>Pitt Rivers Museum</span>
                    <a class="btn btn-primary btn-sm" href="POI-Oxford/pitt-rivers-museum.html?lat=51.7586&lng=-1.2553" target="_blank">
                      <i class="fas fa-arrow-right me-1"></i>Visit
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- News Container -->
      <div class="card my-5 shadow-sm border">
        <div class="card-body" id="news-container">
          <?php include 'php/rss_feed.php'; ?>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-dark text-white py-3 text-center mt-5">
      <div class="container">
        <p class="mb-0">&copy; <?php echo date('Y'); ?> Maps Explorer - Weather & Points of Interest</p>
      </div>
    </footer>
  </body>
</html>
