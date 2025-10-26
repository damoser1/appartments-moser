@php
    $images = [];
    for ($i = 1; $i <= 11; $i++) {
        $images[] = asset("assets/gallery-sonnbichl/pic{$i}.jpeg");
    }

    $initialCount = 8;
@endphp

<section id="galerie" class="relative bg-white py-16">
    {{-- ... dein Header / Intro bleibt unverändert ... --}}

    <div class="relative max-w-7xl mx-auto px-6 sm:px-10 lg:px-16">
        <div class="text-center mb-10">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-charcoal">Gallerie</h1>
            <p class="mt-3 text-gray-700 max-w-2xl mx-auto">
                Einblicke in das <span class="font-semibold text-brand-goldDark">Apartment Sonnbichl</span>
            </p>
        </div>

        {{-- GRID --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4" id="galerie-grid">
            @foreach($images as $i => $src)
                {{-- Item --}}
                <a href="{{ $src }}"
                   class="group relative rounded-2xl overflow-hidden ring-1 ring-brand-gold/20 bg-gray-100 {{ $i >= $initialCount ? 'hidden more-item' : '' }}"
                   data-lightbox="sonnbichl" data-index="{{ $i }}">
                    <div class="aspect-[4/3] w-full">
                        <img
                            src="{{ $src }}"
                            alt="Appartement Sonnbichl Bild {{ $i + 1 }}"
                            loading="lazy" decoding="async"
                            class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition
                                bg-gradient-to-t from-black/30 to-transparent"></div>
                </a>

                {{-- Nach dem 8. Bild (Index 7): Pfeil/„Mehr ansehen“ einfügen – nur falls weitere Bilder existieren --}}
                @if($i === $initialCount - 1 && count($images) > $initialCount)
                    <div class="col-span-2 sm:col-span-3 lg:col-span-4 flex justify-center">
                        <button id="galerie-more"
                                class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl
                                       bg-brand-gold hover:bg-brand-goldDark text-brand-charcoal
                                       font-semibold shadow-md transition">
                            <span>Mehr ansehen</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- CTA zurück / Kontakt (optional, wie gehabt) --}}
        <div class="mt-12 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('sonnbichl') }}"
                class="inline-flex items-center justify-center px-6 py-3 rounded-2xl
                        bg-brand-gold hover:bg-brand-goldDark text-brand-charcoal font-semibold shadow-md transition">
                ← Zurück zum Apartment
            </a>
            <a href="{{ url('/kontakt#formular') }}"
               class="inline-flex items-center justify-center px-6 py-3 rounded-2xl
                      bg-brand-gold hover:bg-brand-goldDark text-brand-charcoal font-semibold shadow-md transition">
                Jetzt Kontakt aufnehmen
            </a>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Lightbox (wie zuvor)
            const links = Array.from(document.querySelectorAll('[data-lightbox="sonnbichl"]'));
            if (links.length) {
                let i = 0;
                const sources = links.map(a => a.getAttribute('href'));
                const overlay = document.createElement('div');
                overlay.className = 'fixed inset-0 z-[60] hidden items-center justify-center bg-black/85';
                overlay.innerHTML = `
            <button aria-label="Schließen" id="lb-close"
                class="absolute top-4 right-4 rounded-full bg-white/90 hover:bg-white p-2 shadow">✕</button>
            <button aria-label="Vorheriges Bild" id="lb-prev"
                class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 rounded-full bg-white/90 hover:bg-white p-2 shadow">‹</button>
            <img id="lb-img" alt="Galerie Bild" class="max-h-[85vh] max-w-[95vw] object-contain ring-1 ring-brand-gold/30 rounded-xl">
            <button aria-label="Nächstes Bild" id="lb-next"
                class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 rounded-full bg-white/90 hover:bg-white p-2 shadow">›</button>
        `;
                document.body.appendChild(overlay);
                const img   = overlay.querySelector('#lb-img');
                const btnX  = overlay.querySelector('#lb-close');
                const btnP  = overlay.querySelector('#lb-prev');
                const btnN  = overlay.querySelector('#lb-next');

                function show(idx){ i = (idx + sources.length) % sources.length; img.src = sources[i]; }
                function openAt(idx){ show(idx); overlay.classList.remove('hidden'); document.body.style.overflow='hidden'; }
                function closeLB(){ overlay.classList.add('hidden'); document.body.style.overflow=''; }

                links.forEach(a => a.addEventListener('click', e => { e.preventDefault(); openAt(parseInt(a.dataset.index)); }));
                btnX.addEventListener('click', closeLB);
                btnP.addEventListener('click', () => show(i - 1));
                btnN.addEventListener('click', () => show(i + 1));
                overlay.addEventListener('click', e => { if (e.target === overlay) closeLB(); });
                window.addEventListener('keydown', e => {
                    if (overlay.classList.contains('hidden')) return;
                    if (e.key === 'Escape') closeLB();
                    if (e.key === 'ArrowLeft') show(i - 1);
                    if (e.key === 'ArrowRight') show(i + 1);
                }, {passive:true});
            }

            const btnMore = document.getElementById('galerie-more');
            if (btnMore) {
                btnMore.addEventListener('click', () => {
                    document.querySelectorAll('.more-item').forEach(el => el.classList.remove('hidden'));
                    btnMore.closest('div').remove();
                });
            }
        });
    </script>
@endpush
