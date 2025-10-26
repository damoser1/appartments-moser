{{-- Apartment Details / Ausstattung --}}
<section id="ausstattung" class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 pt-16 lg:pt-24 2xl:pt-36 mb-2">
    <div class="text-center mb-12">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-charcoal">Apartment-Details & Ausstattung</h2>
        <p class="mt-3 text-gray-700 max-w-2xl mx-auto">
            Alles, was du für deinen entspannten Aufenthalt brauchst – von Schlafzimmern bis hin zu Extras.
        </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 content-start">

        {{-- 1) Schlafzimmer --}}
        <div class="h-full rounded-2xl border border-gray-100 bg-white px-6 xl:pt-4 pb-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-xl bg-emerald-50 text-emerald-700">
                    {{-- Bed Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M21 10H3V7a2 2 0 0 1 2-2h5a3 3 0 0 1 3 3h6a2 2 0 0 1 2 2zM3 11h18v7h-2v-4H5v4H3z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-brand-charcoal">Schlafzimmer</h3>
                    <p class="text-gray-700 text-sm mt-1">1 Schlafzimmer mit Doppelbett + Schlafsofa im Wohnbereich. Ideal für 2–4 Personen.</p>
                </div>
            </div>
        </div>

        {{-- 2) Badezimmer --}}
        <div class="h-full rounded-2xl border border-gray-100 bg-white px-6 pt-4 pb-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-xl bg-sky-50 text-sky-700">
                    {{-- Bath Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 10V5a3 3 0 1 1 6 0v5h1a5 5 0 0 1 5 5v2H1v-2a5 5 0 0 1 5-5h1z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-brand-charcoal">Badezimmer</h3>
                    <p class="text-gray-700 text-sm mt-1">Mit Dusche, WC & frischen Handtüchern ausgestattet.</p>
                </div>
            </div>
        </div>

        {{-- 3) Küche --}}
        <div class="h-full rounded-2xl border border-gray-100 bg-white px-6 pt-4 pb-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-xl bg-amber-50 text-amber-700">
                    {{-- Kitchen Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 3h18v6H3zM4 10h4v11H4zM10 10h10v11H10z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-brand-charcoal">Küche</h3>
                    <p class="text-gray-700 text-sm mt-1">Voll ausgestattet: Herd, Backofen, Geschirrspüler, Kühlschrank, Kaffeemaschine & mehr.</p>
                </div>
            </div>
        </div>

        {{-- --- Mehr anzeigen Button: nur auf Mobile sichtbar (unter sm) --- --}}

        <div class="sm:hidden text-center">
            <button id="features-show-more"
                    class="inline-flex items-center gap-2 text-brand-charcoal font-medium hover:text-brand-forest transition"
                    aria-expanded="false" aria-controls="features-extra-wrap">
                <span>Mehr anzeigen</span>
                <svg id="faq-toggle-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        {{-- Wrapper für die restlichen Features --}}
        <div id="features-extra-wrap" class="contents">
            {{-- 4) Balkon / Terrasse --}}
            <div class="feature-extra hidden sm:block h-full rounded-2xl border border-gray-100 bg-white px-6 pt-4 pb-6 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-xl bg-fuchsia-50 text-fuchsia-700">
                        {{-- Balcony Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M3 10h18v2H3zM5 12h2v8H5zM9 12h2v8H9zM13 12h2v8h-2zM17 12h2v8h-2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-brand-charcoal">Balkon & Terrasse</h3>
                        <p class="text-gray-700 text-sm mt-1">Privater Außenbereich mit Gartenmöbeln und herrlichem Bergblick.</p>
                    </div>
                </div>
            </div>

            {{-- 5) WLAN & Smart-TV --}}
            <div class="feature-extra hidden sm:block h-full rounded-2xl border border-gray-100 bg-white px-6 pt-4 pb-6 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-50 text-indigo-700">
                        {{-- Wifi Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm6-5a8 8 0 0 0-12 0l2 2a5 5 0 0 1 8 0zM2 9a16 16 0 0 1 20 0l-2.5 2.5a12 12 0 0 0-15 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-brand-charcoal">WLAN & Smart-TV</h3>
                        <p class="text-gray-700 text-sm mt-1">Kostenloses WLAN und moderner Fernseher mit Streaming-Möglichkeiten.</p>
                    </div>
                </div>
            </div>

            {{-- 6) Extras --}}
            <div class="feature-extra hidden sm:block h-full rounded-2xl border border-gray-100 bg-white px-6 pt-4 pb-6 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-xl bg-rose-50 text-rose-700">
                        {{-- Extras Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 3h14v2H5zM3 7h18v2H3zM5 11h14v2H5zM3 15h18v2H3zM5 19h14v2H5z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-brand-charcoal">Extras</h3>
                        <p class="text-gray-700 text-sm mt-1">Abstellraum für Ski/Fahrräder, Parkplatz direkt am Haus.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('features-show-more');
            if (!btn) return;

            btn.addEventListener('click', function () {
                // Alle zusätzlichen Features (unter sm versteckt) einblenden
                document.querySelectorAll('.feature-extra').forEach(function (el) {
                    el.classList.remove('hidden');
                });
                // Button ausblenden
                btn.parentElement.classList.add('hidden');

                // ARIA aktualisieren
                btn.setAttribute('aria-expanded', 'true');
            });
        });
    </script>
@endpush

