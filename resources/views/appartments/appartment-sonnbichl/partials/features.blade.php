{{-- Apartment Details / Ausstattung --}}
<section id="ausstattung" class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 py-16 lg:py-24">
    <div class="text-center mb-12">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900">Apartment-Details & Ausstattung</h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
            Alles, was du für deinen entspannten Aufenthalt brauchst – von Schlafzimmern bis hin zu Extras.
        </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        {{-- Schlafzimmer --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-xl bg-emerald-50 text-emerald-700">
                    {{-- Bed Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 10H3V7a2 2 0 0 1 2-2h5a3 3 0 0 1 3 3h6a2 2 0 0 1 2 2zM3 11h18v7h-2v-4H5v4H3z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Schlafzimmer</h3>
                    <p class="text-gray-600 text-sm mt-1">1 Galerie-Schlafzimmer + Schlafsofa, insgesamt 4 Schlafplätze.</p>
                </div>
            </div>
        </div>

        {{-- Badezimmer --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-xl bg-sky-50 text-sky-700">
                    {{-- Bath Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 10V5a3 3 0 1 1 6 0v5h1a5 5 0 0 1 5 5v2H1v-2a5 5 0 0 1 5-5h1z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Badezimmer</h3>
                    <p class="text-gray-600 text-sm mt-1">Mit Dusche, Whirlpool-Badewanne & Sauna für maximale Entspannung.</p>
                </div>
            </div>
        </div>

        {{-- Küche --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-xl bg-amber-50 text-amber-700">
                    {{-- Kitchen Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 3h18v6H3zM4 10h4v11H4zM10 10h10v11H10z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Küche</h3>
                    <p class="text-gray-600 text-sm mt-1">Herd, Backofen, Geschirrspüler, Kaffeemaschine, Toaster & mehr.</p>
                </div>
            </div>
        </div>

        {{-- Balkon / Terrasse --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-xl bg-fuchsia-50 text-fuchsia-700">
                    {{-- Balcony Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 10h18v2H3zM5 12h2v8H5zM9 12h2v8H9zM13 12h2v8h-2zM17 12h2v8h-2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Balkon & Terrasse</h3>
                    <p class="text-gray-600 text-sm mt-1">Privater Außenbereich mit Gartenmöbeln, Liegen & Grill.</p>
                </div>
            </div>
        </div>

        {{-- WLAN & Entertainment --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-xl bg-indigo-50 text-indigo-700">
                    {{-- Wifi Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm6-5a8 8 0 0 0-12 0l2 2a5 5 0 0 1 8 0zM2 9a16 16 0 0 1 20 0l-2.5 2.5a12 12 0 0 0-15 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">WLAN & Smart-TV</h3>
                    <p class="text-gray-600 text-sm mt-1">Schnelles WLAN, Smart-TV mit Netflix. Bettwäsche & Handtücher inklusive.</p>
                </div>
            </div>
        </div>

        {{-- Extras --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-xl bg-rose-50 text-rose-700">
                    {{-- Extras Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 3h14v2H5zM3 7h18v2H3zM5 11h14v2H5zM3 15h18v2H3zM5 19h14v2H5z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Extras</h3>
                    <p class="text-gray-600 text-sm mt-1">Kinderbett, Skiraum, Waschmaschine (auf Anfrage) und mehr.</p>
                </div>
            </div>
        </div>
    </div>
</section>
