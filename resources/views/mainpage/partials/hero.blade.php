<section class="w-full bg-white">
    <div class="text-center px-6 max-w-4xl mx-auto">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-brand-charcoal mb-4">
            Urlaub am Sonnbichl &amp; Grundnergütl<br>
            <span class="text-brand-pine">– Deine Auszeit in Leogang</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-700 mb-12 mx-auto max-w-screen-lg">
            Zwei gemütliche Ferienwohnungen, umgeben von Bergen,<br>
            direkt an Rad- und Wanderwegen.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
            {{-- Sonnbichl = GOLD --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/slide-sonnbichl/slide1.jpeg') }}" alt="Appartement Sonnbichl"
                     class="w-full h-64 object-cover rounded-lg mb-4">
                <a href="{{ route('sonnbichl') }}"
                   class="w-full max-w-xs text-center px-6 py-4
                  bg-brand-gold hover:bg-brand-goldDark
                  text-brand-dark font-semibold rounded-lg shadow-md transition
                  focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-gold/50 focus-visible:ring-offset-2">
                    Appartement Sonnbichl ansehen
                </a>
            </div>

            {{-- Grundnergütl = GRÜN --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/slideshow-grundnerguetl/slide1.jpg') }}" alt="Appartement Grundnergütl"
                     class="w-full h-64 object-cover rounded-lg mb-4">
                <a href="{{ route('grundnerguetl') }}"
                   class="w-full max-w-xs text-center px-6 py-4
                  bg-brand-pine hover:bg-brand-forest
                  text-white font-semibold rounded-lg shadow-md transition
                  focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-pine/50 focus-visible:ring-offset-2">
                    Appartement Grundnergütl ansehen
                </a>
            </div>
        </div>
    </div>
</section>
