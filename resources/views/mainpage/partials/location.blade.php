<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-brand-charcoal mb-8">Unsere Standorte</h2>

        <div id="map" class="w-full h-96 rounded-2xl shadow-lg overflow-hidden"></div>

        <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-brand-goldDark">Appartment Sonnbichl</h3>
                <p class="text-gray-700">
                    Ecking 29<br>5771 Leogang<br>Österreich
                </p>
                <a href="https://www.google.com/maps/place/Ecking+29,+5771+Leogang,+Austria"
                   target="_blank"
                   class="inline-block text-brand-goldDark hover:brightness-90 hover:underline font-medium">
                    Zur Google Maps-Seite
                </a>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-brand-pine">Appartment Grundnergütl</h3>
                <p class="text-gray-700">
                    Ecking 28<br>5771 Leogang<br>Österreich
                </p>
                <a href="https://www.google.com/maps/place/Ecking+28,+5771+Leogang,+Austria"
                   target="_blank"
                   class="inline-block text-brand-pine hover:text-brand-forest hover:underline font-medium">
                    Zur Google Maps-Seite
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        window.initMap = function () {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 47.4452, lng: 12.7960 },
                zoom: 14
            });

            const icons = {
                gold: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 10,
                    fillColor: '#E3C55E',   // brand-goldDark
                    fillOpacity: 1,
                    strokeColor: '#3F443D', // brand-charcoal (dezenter Rand)
                    strokeOpacity: 0.4,
                    strokeWeight: 2
                },
                green: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 10,
                    fillColor: '#2E6B4A',   // brand-pine
                    fillOpacity: 1,
                    strokeColor: '#274D3B', // brand-forest
                    strokeWeight: 2
                }
            };

            const markers = [
                { position: { lat: 47.4453191, lng: 12.7965295 }, title: 'Appartement Sonnbichl', icon: icons.gold },
                { position: { lat: 47.4450325, lng: 12.7958214 }, title: 'Appartement Grundnergütl', icon: icons.green }
            ];

            const bounds = new google.maps.LatLngBounds();
            markers.forEach(m => {
                new google.maps.Marker({ position: m.position, map, title: m.title, icon: m.icon });
                bounds.extend(m.position);
            });
            map.fitBounds(bounds);
        };
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap"></script>
@endpush
