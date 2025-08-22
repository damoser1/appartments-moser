<section class="w-full bg-white">
    <div class="text-center px-6 max-w-4xl mx-auto">
        {{-- Catchy-Headline --}}
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-[#1E1E1E] mb-4">
            Urlaub am Sonnbichl &amp; Grundnergütl<br>
            <span class="text-[#014F86]">– Deine Auszeit in Leogang</span>
        </h1>

        {{-- Teaser-Text --}}
        <p class="text-lg sm:text-xl text-[#3A3A3A] mb-12 mx-auto max-w-screen-lg">
            Zwei gemütliche Ferienwohnungen, umgeben von Bergen,<br>
            direkt an Rad- und Wanderwegen.
        </p>

        {{-- Demo-Bilder mit Links --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
            {{-- Sonnbichl --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/bildtransparent.png') }}" alt="Demo Sonnbichl" class="w-full h-auto object-cover rounded-lg mb-4 max-h-96">
                <a href="{{ url('/appartement/sonnbichl') }}" class="w-full max-w-xs text-center px-6 py-4 bg-[#0077B6] hover:bg-[#005F94] text-white font-semibold rounded-lg shadow-md transition mb-6 sm:mb-0">
                    Appartement Sonnbichl ansehen
                </a>
            </div>
            {{-- Grundnergütl --}}
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/bildtransparent.png') }}" alt="Demo Grundnergütl" class="w-full h-auto object-cover rounded-lg mb-4 max-h-96">
                <a href="{{ url('/appartement/grundnergütl') }}" class="w-full max-w-xs text-center px-6 py-4 bg-[#90E0EF] hover:bg-[#62C9E3] text-[#1E1E1E] font-semibold rounded-lg shadow-md transition">
                    Appartement Grundnergütl ansehen
                </a>
            </div>
        </div>
    </div>
</section>
