<link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
/>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-center text-[#1E1E1E] mb-8">
            Unsere Standorte
        </h2>

        <!-- 2. Karte mit beiden Markern -->
        <div id="map" class="w-full h-96 rounded-2xl shadow-lg overflow-hidden"></div>

        <!-- 3. Adress-Infos mit Google-Maps-Links -->
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-[#0077B6]">Appartement Sonnbichl</h3>
                <p class="text-[#3A3A3A]">
                    Ecking 29<br>
                    5771 Leogang<br>
                    Österreich
                </p>
                <a
                    href="https://www.google.com/maps/place/Ecking+29,+5771+Leogang,+Austria"
                    target="_blank"
                    class="inline-block text-[#0077B6] hover:underline font-medium"
                >
                    Zur Google Maps-Seite
                </a>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-[#90E0EF]">Appartement Grundnergütl</h3>
                <p class="text-[#3A3A3A]">
                    Ecking 28<br>
                    5771 Leogang<br>
                    Österreich
                </p>
                <a
                    href="https://www.google.com/maps/place/Ecking+28,+5771+Leogang,+Austria"
                    target="_blank"
                    class="inline-block text-[#90E0EF] hover:underline font-medium"
                >
                    Zur Google Maps-Seite
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 4. Leaflet JS (am Ende der Seite) -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Karte initialisieren
    const map = L.map('map');

    // OSM-Tiles hinzufügen
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Marker-Daten
    const markers = [
        {
            coords: [47.4453191, 12.7965295],
            popup: '<strong>Appartement Sonnbichl</strong><br>Ecking 29'
        },
        {
            coords: [47.4450325, 12.7958214],
            popup: '<strong>Appartement Grundnergütl</strong><br>Ecking 28'
        }
    ];

    // Marker setzen und Bounds sammeln
    const bounds = [];
    markers.forEach(m => {
        L.marker(m.coords).addTo(map).bindPopup(m.popup);
        bounds.push(m.coords);
    });

    // Auf beide Marker zoomen
    map.fitBounds(bounds, { padding: [40, 40] });
</script>
