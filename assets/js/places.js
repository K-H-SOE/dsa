document.addEventListener('DOMContentLoaded', function() {
    fetchPlaces();
});

function fetchPlaces() {
    fetch('../api/fetch_places.php')
        .then(response => response.json())
        .then(data => {
            const placesContainer = document.getElementById('places-container');
            data.forEach(place => {
                const placeElement = document.createElement('div');
                placeElement.className = 'place';
                placeElement.innerHTML = `
                    <h3>${place.name}</h3>
                    <p>${place.description}</p>
                    <button class="navigate-button" onclick="navigateToLocation(${place.lat}, ${place.lng})">Go</button>
                `;
                placesContainer.appendChild(placeElement);
            });
        })
        .catch(error => console.error('Error fetching places:', error));
}

function navigateToLocation(lat, lng) {
    // Implement the navigation logic here
    console.log(`Navigating to location: ${lat}, ${lng}`);
}