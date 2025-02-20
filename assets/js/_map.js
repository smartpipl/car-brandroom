import L from "leaflet";
import "leaflet/dist/leaflet.css";


export const initMap = () => {
  const existingMap = document.getElementById("map").leafletMap;

  if (!existingMap) {
    const map = L.map("map", {
      zoomControl: false,
      scrollWheelZoom: false,
      doubleClickZoom: false,
      touchZoom: false,
      dragging: false,
    }).setView([50, 10], 5.2);

    document.getElementById("map").leafletMap = map;

    L.tileLayer("https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png", {
      attribution: "&copy; <a href='https://carto.com/'>Carto</a>",
    }).addTo(map);

    const markers = [
      {lat: 50.3356, lng: 6.9475, country: "Sweden", race_time: "10:00", track_name: "Nurburgring"},
      {lat: 51.1657, lng: 10.4515, country: "Deutch", race_time: "10:00", track_name: "Salzburgring"},
      {lat: 41.9028, lng: 12.4964, country: "Poland", race_time: "10:00", track_name: "Formula Fast"},
    ];

    markers.forEach(({lat, lng, country, race_time, track_name}) => {
      const markerDiv = document.createElement('div');
      markerDiv.classList.add('custom-marker');
      markerDiv.innerHTML = `
          <div class="custom-marker__container">
          <div>
              <p class="body1 color-gray">${country}</p>
              <p class="subtitle1">${track_name}</p>
          </div>
          <h4 class="race_time color-green">${race_time}</h4>
          </div>
      `;

      const marker = L.marker([lat, lng], {
        icon: L.divIcon({
          className: '',
          html: markerDiv.outerHTML,
          iconSize: [50, 50],
          iconAnchor: [0, 100],
          popupAnchor: [0, -50],
        })
      }).addTo(map);

      marker.on('mouseover', function () {
        marker.setZIndexOffset(1000);
      });

      marker.on('mouseout', function () {
        marker.setZIndexOffset(0);
      });

      marker.bindPopup(`<b>${country}</b><br>Время: ${race_time} <br>Трасса: ${track_name}`);
    });
  } else {
    existingMap.setView([50, 10], 5.2);
  }
};


