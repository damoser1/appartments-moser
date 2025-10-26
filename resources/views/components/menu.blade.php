<section aria-label="Website-Menü">
    <!-- Overlay -->
    <div id="mobileOverlay"
         class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden z-[9998]"></div>

    <!-- Drawer -->
    <nav id="mobileMenu"
         class="fixed inset-y-0 right-0 w-[92vw] max-w-md bg-white shadow-2xl
              translate-x-full transition-transform duration-300 ease-out hidden
              flex flex-col z-[9999]"
         role="dialog" aria-modal="true" aria-labelledby="siteMenuTitle">

        {{-- Kopf --}}
        <div class="p-4 flex items-center justify-between border-b border-gray-100">
            <h2 id="siteMenuTitle" class="text-brand-charcoal font-semibold text-lg">Menü</h2>
            <button id="mobileClose" aria-label="Menü schließen"
                    class="inline-flex items-center justify-center rounded-md p-2
                     text-brand-charcoal hover:text-brand-forest hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Links --}}
        <div class="px-4 py-3 space-y-1">
            <a href="{{ url('/') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50 js-menu-link">Startseite</a>

            <a href="{{ route('sonnbichl') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50">Apartment Sonnbichl</a>

            <a href="{{ route('grundnerguetl') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50">Apartment Grundnergütl</a>

            <a href="{{ url('/#benefits') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50 js-menu-link">Vorteile</a>

            <a href="{{ url('/#standort') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50 js-menu-link">Standort</a>

            <a href="{{ url('/#about') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50 js-menu-link">Über Leogang</a>

            {{-- Neue/aktualisierte Anker --}}
            <a href="{{ url('/#ueber-uns') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50 js-menu-link">Über uns</a>

            <a href="{{ url('/#impressum') }}"
               class="block rounded-lg px-3 py-2 text-brand-charcoal hover:bg-gray-50 js-menu-link">Impressum</a>
        </div>

        {{-- Footer/CTA --}}
        <div class="mt-auto p-4 space-y-3 border-t border-gray-100">
            <a href="{{ route('kontakt-auswahl') }}"
               class="block text-center rounded-xl px-4 py-2.5 font-semibold
                bg-brand-pine hover:bg-brand-forest text-white shadow">
                Jetzt Kontakt aufnehmen
            </a>
            <p class="text-xs text-gray-500 text-center">© {{ date('Y') }} Familie Moser</p>
        </div>
    </nav>
</section>
