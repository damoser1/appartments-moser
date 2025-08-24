

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-center text-[#1E1E1E] mb-8">
            Unsere Standorte
        </h2>

        <!-- 2. Karte mit beiden Markern -->
        <div id="map" class="w-full z-1 h-96 rounded-2xl shadow-lg overflow-hidden"></div>

        <!-- 3. Adress-Infos mit Google-Maps-Links -->
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-[#0077B6]">Appartment Sonnbichl</h3>
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
                <h3 class="font-semibold text-xl text-[#90E0EF]">Appartment Grundnergütl</h3>
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
<div id="map" class="w-full h-96 rounded-2xl shadow-lg overflow-hidden"></div>

<script>
    window.initMap = function () {
        const markers = [
            { position: { lat: 47.4453191, lng: 12.7965295 }, title: 'Appartement Sonnbichl' },
            { position: { lat: 47.4450325, lng: 12.7958214 }, title: 'Appartement Grundnergütl' }
        ];

        // Map mit Startcenter/zoom anlegen (Pflicht), danach fitBounds nutzen
        const map = new google.maps.Map(document.getElementById('map'), {
            center: markers[0].position,
            zoom: 14,                       // beliebig – wird gleich von fitBounds überschrieben
            // mapId: 'DEIN_MAP_ID'          // optional, falls du ein Cloud-Map-Style nutzt
        });

        const bounds = new google.maps.LatLngBounds();

        markers.forEach((m) => {
            new google.maps.Marker({ position: m.position, map, title: m.title });
            bounds.extend(m.position);
        });

        // Karte so zoomen/zentrieren, dass beide Marker sichtbar sind
        map.fitBounds(bounds);
    };
</script>

<!-- Google Maps JS laden (Key serverseitig einfügen) -->
<script
    async
    defer
    src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap">
</script>
