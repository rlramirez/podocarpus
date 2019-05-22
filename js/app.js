var mymap = L.map('mapid').setView([-4.354922, -78.975062], 9.4);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets'
}).addTo(mymap);

var greenIcon = L.icon({
    iconUrl: './images/arbol2.png',

    iconSize:     [24, 24], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

// var marker = L.marker([-4.164866, -79.106541], {icon: greenIcon}).addTo(mymap);
var sitio1 = `
    <div>
        <img src="./images/LagunasDelCompadre.jpg" alt="" class="lugares_imagen" width="50%" height="100px" style="margin: 0 25% 15px 25%; text-align: center">
        <div>
            <h3 style="text-align: center">Lagunas del compadre</h3>
        </div>
        <div>
            <p style="text-align: justify">Es un sistema de lagos formado por 50 lagunas de origen glaciar, ubicadas en la parte central del Parque Nacional Podocarpus. El sitio es fuente de algunos ríos de importancia local tales como el Sabanilla, Bombuscaro y Campana, El sistema lacustre también forma parte de las cabeceras de la cuenca binacional Catamayo – Chira y la cuenca del Zamora.</p>
        </div>
        <a href="#" style="width: 78px; height: 38px; line-height: 24px; text-align: center; background-color: #dc3545; padding: 8px 12px; color: #fff; text-decoration: none; margin: 0 38%">Ver más</a>
    </div>
`;


L.marker([-4.164866, -79.106541], {icon: greenIcon}).bindPopup(sitio1).addTo(mymap);
L.marker([-4.125509, -78.994993], {icon: greenIcon}).bindPopup("Cascada la poderosa.").addTo(mymap);
L.marker([-4.070531, -78.948769], {icon: greenIcon}).bindPopup("Puente sobre el río Bombuscaro.").addTo(mymap);


// var marker = L.marker([-4.164866, -79.106541]).addTo(mymap);

// marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

// var greenIcon = new LeafIcon({iconUrl: 'leaf-green.png'});
    // redIcon = new LeafIcon({iconUrl: 'leaf-red.png'}),
    // orangeIcon = new LeafIcon({iconUrl: 'leaf-orange.png'});

// L.marker([-4.164866, -79.106541], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(mymap);
// L.marker([51.495, -0.083], {icon: redIcon}).bindPopup("I am a red leaf.").addTo(map);
// L.marker([51.49, -0.1], {icon: orangeIcon}).bindPopup("I am an orange leaf.").addTo(map);

// -4.354922, -78.975062

// -4.164866, -79.106541