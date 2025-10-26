<header class="sticky top-0 z-50 mt-2 sm:mt-4 bg-white/95 backdrop-blur shadow-sm border-b border-gray-100 transition-all">
    {{-- Gold-Akzentleiste (verschwindet nach Scroll) --}}
    <div id="accentBar" class="h-1 bg-brand-gold opacity-100 transition-all duration-300"></div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 mt-2">
        <div class="flex items-center justify-between h-16 sm:h-18">
            {{-- Logo + Seitentitel --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('assets/icon-sonnbichl.png') }}" alt="Logo Sonnbichl"
                     class="h-26 w-auto mr-[-20px]" loading="eager" decoding="async">
                <div class="leading-tight">
                    <div class="text-sm font-semibold text-brand-charcoal">Appartement</div>
                    <div class="text-lg font-extrabold text-brand-gold">Sonnbichl</div>
                </div>
            </a>

            {{-- Hauptnavigation (≥ lg) --}}
            <nav class="hidden lg:flex items-center gap-7 font-medium">
                <a href="{{ url('/') }}"                 class="text-brand-charcoal hover:text-brand-forest transition">Startseite</a>
                <a href="{{ route('gallerie-sonnbichl') }}"          class="text-brand-charcoal hover:text-brand-forest transition">Galerie</a>
                <a href="{{ route('kontakt-sonnbichl') }}" class="text-brand-charcoal hover:text-brand-forest transition">Kontakt</a>
            </nav>

            {{-- Mobile Toggle (nur < lg) --}}
            <button id="nav-toggle" class="lg:hidden inline-flex items-center gap-2 rounded-xl px-3 py-2
              border border-gray-200 text-brand-charcoal hover:bg-gray-50"
                    aria-expanded="false" aria-controls="mobile-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                Menü
            </button>
        </div>
    </div>

    {{-- Mobile-Menü --}}
    <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-100">
        <div class="px-6 py-4 space-y-1 bg-white">
            <a href="{{ url('/') }}"                 class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50">Startseite</a>
            <a href="{{ route('gallerie-sonnbichl') }}"          class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50">Galerie</a>
            <a href="{{ route('kontakt-sonnbichl') }}" class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50">Kontakt</a>


        </div>
    </div>
</header>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile-Menü Toggle
            const btn  = document.getElementById('nav-toggle');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const expanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', String(!expanded));
                    menu.classList.toggle('hidden');
                });
            }

            // Gold-Balken nach Scroll ausblenden / am Seitenanfang wieder einblenden
            const bar = document.getElementById('accentBar');
            const threshold = 8;
            const updateBar = () => {
                if (!bar) return;
                if (window.scrollY > threshold) {
                    bar.classList.add('opacity-0', 'h-0');
                    bar.classList.remove('opacity-100', 'h-1');
                } else {
                    bar.classList.remove('opacity-0', 'h-0');
                    bar.classList.add('opacity-100', 'h-1');
                }
            };
            updateBar();
            window.addEventListener('scroll', updateBar, { passive: true });
        });
    </script>
@endpush
