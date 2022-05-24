var map = L.map('map').setView([48.833, 2.333], 5);
var text = "Solar innovation.<br>The new Photosolar technology !<br>www.solarinnovation.com."

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup(text)
    .openPopup();

