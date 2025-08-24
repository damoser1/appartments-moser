<header class="bg-white/95 backdrop-blur sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <img
                    src="{{ asset('assets/logo-sonnbichl.png') }}"
                    alt="Apartment Moser am Sonnbichl Logo"
                    class="h-12 w-auto"
                    loading="eager"
                    decoding="async"
                >
                <span class="hidden sm:inline-block text-xl font-semibold tracking-wide text-gray-900">
                    Apartment Sonnbichl
                </span>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden md:flex items-center gap-8 font-medium">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-[#0F766E] transition">Home</a>
                <a href="{{ url('/appartment/sonnbichl') }}" class="text-gray-700 hover:text-[#0F766E] transition">Appartement</a>
                <a href="{{ url('/galerie') }}" class="text-gray-700 hover:text-[#0F766E] transition">Galerie</a>
                <a href="{{ url('/umgebung') }}" class="text-gray-700 hover:text-[#0F766E] transition">Umgebung</a>
                <a href="{{ url('/kontakt') }}" class="text-gray-700 hover:text-[#0F766E] transition">Kontakt</a>
            </nav>

            {{-- CTA --}}
            <div class="hidden md:block">
                <a href="{{ url('/buchung') }}"
                   class="inline-flex items-center gap-2 rounded-xl px-5 py-2.5 text-white bg-[#0EA5A3] hover:bg-[#0C8F8D] shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 2a1 1 0 0 1 1 1v1h10V3a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v3H1V6a2 2 0 0 1 2-2h1V3a1 1 0 1 1 2 0v1zM1 10h22v8a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3v-8zm5 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                    </svg>
                    Verfügbarkeit prüfen
                </a>
            </div>

            {{-- Mobile toggle --}}
            <button id="nav-toggle"
                    class="md:hidden inline-flex items-center justify-center p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                    aria-label="Hauptmenü öffnen">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="md:hidden hidden border-t border-gray-100">
        <div class="px-6 py-4 space-y-2 bg-white">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-50">Home</a>
            <a href="{{ url('/appartment/sonnbichl') }}" class="block px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-50">Appartement</a>
            <a href="{{ url('/galerie') }}" class="block px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-50">Galerie</a>
            <a href="{{ url('/umgebung') }}" class="block px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-50">Umgebung</a>
            <a href="{{ url('/kontakt') }}" class="block px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-50">Kontakt</a>
            <a href="{{ url('/buchung') }}"
               class="mt-2 block text-center px-4 py-2.5 rounded-xl text-white bg-[#0EA5A3] hover:bg-[#0C8F8D] shadow transition">
                Verfügbarkeit prüfen
            </a>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('nav-toggle');
            const menu = document.getElementById('mobile-menu');
            if (!btn || !menu) return;

            btn.addEventListener('click', () => {
                const expanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', String(!expanded));
                menu.classList.toggle('hidden');
            });
        });
    </script>
@endpush
