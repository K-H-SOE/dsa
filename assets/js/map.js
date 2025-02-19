import { config } from "./config.js";

var mapBonn, mapOxford;

export function loadGoogleMapsAPI(apiKey, callback) {
  var script = document.createElement("script");
  script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=${callback}`;
  script.async = true;
  script.defer = true;
  document.head.appendChild(script);
}

export function initMaps() {
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

export function navigateToLocation(map, lat, lng) {
  map.setCenter({ lat: lat, lng: lng });
  map.setZoom(16);
}

// Ensure the Google Maps API is loaded and initMaps is called
window.initMaps = initMaps;

window.onload = function () {
  loadGoogleMapsAPI(config.MAP_API_KEY, "initMaps");
};
