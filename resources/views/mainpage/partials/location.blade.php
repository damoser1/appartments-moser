<section id="standort"
         class="py-16 bg-white scroll-mt-60 sm:scroll-mt-56 md:scroll-mt-48 lg:scroll-mt-40 xl:scroll-mt-32">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-brand-charcoal mb-8">Unsere Standorte</h2>

        {{-- Google Map --}}
        <div data-google-maps-wrapper
             data-api-key="{{ config('services.google_maps.api_key') }}"
             class="relative">
            <div id="map" class="w-full h-96 rounded-2xl shadow-lg overflow-hidden bg-gray-100"></div>

            <div data-map-consent-message
                 class="absolute inset-0 flex flex-col items-center justify-center gap-3
                        bg-white/90 text-center px-6 text-sm text-gray-700"
                 aria-hidden="false">
                <p class="font-semibold text-brand-charcoal">
                    Google Maps wird erst nach deiner Zustimmung geladen.
                </p>
                <p>
                    Mit deiner Zustimmung werden Inhalte von Google (USA) nachgeladen. Dabei können personenbezogene
                    Daten an Google übertragen werden. Ohne Zustimmung bleibt die Karte deaktiviert. Weitere Informationen
                    findest du in unseren Datenschutzhinweisen.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 items-center">
                    <button type="button"
                            data-consent-accept
                            class="inline-flex items-center justify-center rounded-full bg-brand-pine px-5 py-2 text-sm
                                   font-semibold text-white shadow hover:bg-brand-forest transition">
                        Zustimmung erteilen &amp; Karte laden
                    </button>
                    <button type="button"
                            data-consent-decline
                            class="inline-flex items-center justify-center rounded-full border border-brand-charcoal/10 px-5 py-2 text-sm
                                   font-semibold text-brand-charcoal bg-white hover:bg-gray-100 transition">
                        Karte blockiert lassen
                    </button>
                    <a href="{{ route('datenschutz-sonnbichl') }}"
                       class="text-sm font-medium text-brand-pine hover:text-brand-forest hover:underline"
                       target="_blank" rel="noopener">
                        Datenschutzhinweise anzeigen
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-3 text-center text-xs text-gray-500">
            <button type="button"
                    data-consent-manage
                    class="font-medium text-brand-pine hover:text-brand-forest hover:underline">
                Einstellungen für eingebettete Karten ändern
            </button>
        </div>

        {{-- Adressen & Links --}}
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 md:ml-2 lg:ml-0">
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-brand-goldDark">Apartment Sonnbichl</h3>
                <p class="text-gray-700">
                    Ecking 29<br>5771 Leogang<br>Österreich
                </p>
                <a href="https://www.google.com/maps/place/Ecking+29,+5771+Leogang,+Austria"
                   target="_blank" rel="noopener"
                   class="inline-block text-brand-goldDark hover:brightness-90 hover:underline font-medium">
                    Zur Google Maps-Seite
                </a>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-xl text-brand-pine">Apartment Grundnergütl</h3>
                <p class="text-gray-700">
                    Ecking 28<br>5771 Leogang<br>Österreich
                </p>
                <a href="https://www.google.com/maps/place/Ecking+28,+5771+Leogang,+Austria"
                   target="_blank" rel="noopener"
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
            const mapContainer = document.getElementById('map');
            if (!mapContainer) {
                return;
            }

            mapContainer.classList.remove('bg-gray-100');

            const map = new google.maps.Map(mapContainer, {
                center: { lat: 47.4452, lng: 12.7960 },
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.SATELLITE,
                // ✅ Optional: Geländeansicht aktivieren (mehr Tiefe & Topografie)
                tilt: 45,
                mapTypeControl: true,
                streetViewControl: true,
                fullscreenControl: true
            });

            // Brand-konforme Marker
            const icons = {
                gold: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 10,
                    fillColor: '#E3C55E',
                    fillOpacity: 1,
                    strokeColor: '#3F443D',
                    strokeOpacity: 0.4,
                    strokeWeight: 2
                },
                green: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 10,
                    fillColor: '#2E6B4A',
                    fillOpacity: 1,
                    strokeColor: '#274D3B',
                    strokeWeight: 2
                }
            };

            const locations = [
                {
                    position: { lat: 47.4453191, lng: 12.7965295 },
                    title: 'Apartment Sonnbichl',
                    icon: icons.gold,
                    url: 'https://www.google.com/maps/place/Ecking+29,+5771+Leogang,+Austria'
                },
                {
                    position: { lat: 47.4450325, lng: 12.7958214 },
                    title: 'Apartment Grundnergütl',
                    icon: icons.green,
                    url: 'https://www.google.com/maps/place/Ecking+28,+5771+Leogang,+Austria'
                }
            ];

            const bounds = new google.maps.LatLngBounds();
            const infoWindow = new google.maps.InfoWindow();

            locations.forEach(loc => {
                const marker = new google.maps.Marker({
                    position: loc.position,
                    map,
                    title: loc.title,
                    icon: loc.icon
                });

                marker.addListener('click', () => {
                    infoWindow.setContent(
                        `<div style="font-family:inherit;line-height:1.3">
                    <strong>${loc.title}</strong><br>
                    <a href="${loc.url}" target="_blank" rel="noopener" style="text-decoration:underline">
                        In Google Maps öffnen
                    </a>
                </div>`
                    );
                    infoWindow.open(map, marker);
                });

                bounds.extend(loc.position);
            });

            map.fitBounds(bounds);
        };
    </script>
@endpush
