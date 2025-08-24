{{-- HERO / Slideshow --}}
<section class="relative bg-white">
    {{-- dekorative, sehr subtile Gradients --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div class="absolute -top-32 -left-32 w-[42rem] h-[42rem] rounded-full bg-gradient-to-br from-emerald-50 to-sky-50 blur-3xl"></div>
        <div class="absolute -bottom-40 -right-24 w-[36rem] h-[36rem] rounded-full bg-gradient-to-tr from-sky-50 to-emerald-50 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 pt-8 lg:pt-12 relative">
        <div class="grid lg:grid-cols-2 gap-10 items-center">

            {{-- Copy --}}
            <div class="order-2 lg:order-1 space-y-6">
                <span class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-3 py-1 text-xs font-medium text-gray-700">
                    Alpine Hideaway · Leogang
                </span>

                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-gray-900">
                    Appartement Sonnbichl
                </h1>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Dein Rückzugsort mit Panoramablick: privater Spa, sonniger Außenbereich und Trails direkt vor der Haustür.
                </p>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-sm">Privater Spa</span>
                    <span class="px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-sm">Balkon & Garten</span>
                    <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-sm">WLAN & Parkplatz inkl.</span>
                </div>

                <div class="pt-2">
                    <a href="{{ url('/kontakt#formular') }}"
                       class="inline-flex items-center justify-center rounded-xl px-6 py-3 bg-emerald-600 text-white hover:bg-emerald-500 shadow transition">
                        Jetzt Kontakt aufnehmen
                    </a>
                </div>
            </div>

            {{-- Slideshow --}}
            <div class="order-1 lg:order-2">
                <div class="relative group rounded-3xl overflow-hidden shadow-2xl ring-1 ring-gray-200">

                    {{-- Slides (füge hier deine besten Bilder ein) --}}
                    @php
                        // Ersetze die Platzhalter durch deine echten Bilder im Ordner /public/assets
                        $slides = [
                            asset('assets/bildtransparent.png'),
                            asset('assets/bildtransparent.png'),
                            asset('assets/bildtransparent.png'),
                        ];
                    @endphp

                    <div class="relative" x-data>
                        <div id="hero-slider"
                             class="relative h-[24rem] sm:h-[28rem] lg:h-[30rem] w-full overflow-hidden"
                             data-autoplay="true" data-interval="5500">
                            @foreach($slides as $i => $src)
                                <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-out"
                                     data-slide="{{ $i }}">
                                    <img src="{{ $src }}" alt="Appartement Sonnbichl Bild {{ $i+1 }}"
                                         class="h-full w-full object-cover">
                                </div>
                            @endforeach
                        </div>

                        {{-- Controls --}}
                        <button type="button" aria-label="Vorheriges Bild"
                                class="hidden sm:flex absolute left-3 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 rounded-full p-2 shadow"
                                data-prev>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button type="button" aria-label="Nächstes Bild"
                                class="hidden sm:flex absolute right-3 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 rounded-full p-2 shadow"
                                data-next>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>

                        {{-- Dots --}}
                        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex items-center gap-2 bg-white/70 rounded-full px-2 py-1 shadow">
                            @foreach($slides as $i => $src)
                                <button class="h-2.5 w-2.5 rounded-full bg-gray-300 data-[active=true]:bg-gray-800"
                                        aria-label="Gehe zu Slide {{ $i+1 }}"
                                        data-dot="{{ $i }}"></button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('scripts')
    <script>
        (function() {
            const root = document.getElementById('hero-slider');
            if (!root) return;

            const slides = Array.from(root.querySelectorAll('[data-slide]'));
            const dots = Array.from(root.parentElement.querySelectorAll('[data-dot]'));
            const btnPrev = root.parentElement.querySelector('[data-prev]');
            const btnNext = root.parentElement.querySelector('[data-next]');

            let i = 0;
            let autoplay = root.getAttribute('data-autoplay') === 'true';
            let interval = parseInt(root.getAttribute('data-interval') || '6000', 10);
            let timer = null;
            let isHover = false;

            function show(idx) {
                i = (idx + slides.length) % slides.length;
                slides.forEach((s, k) => s.style.opacity = (k === i ? '1' : '0'));
                dots.forEach((d, k) => d.setAttribute('data-active', String(k === i)));
            }

            function start() {
                if (!autoplay) return;
                stop();
                timer = setInterval(() => { if (!isHover) next(); }, interval);
            }
            function stop() { if (timer) clearInterval(timer); timer = null; }
            function next() { show(i + 1); }
            function prev() { show(i - 1); }

            // Init
            show(0); start();

            // Controls
            btnNext && btnNext.addEventListener('click', () => { next(); start(); });
            btnPrev && btnPrev.addEventListener('click', () => { prev(); start(); });
            dots.forEach((d, k) => d.addEventListener('click', () => { show(k); start(); }));

            // Pause on hover
            const wrapper = root.closest('.group') || root;
            wrapper.addEventListener('mouseenter', () => { isHover = true; });
            wrapper.addEventListener('mouseleave', () => { isHover = false; });

            // Touch swipe
            let x0 = null;
            root.addEventListener('touchstart', (e) => { x0 = e.touches[0].clientX; }, {passive:true});
            root.addEventListener('touchend', (e) => {
                if (x0 === null) return;
                const dx = e.changedTouches[0].clientX - x0;
                if (Math.abs(dx) > 40) { dx > 0 ? prev() : next(); start(); }
                x0 = null;
            }, {passive:true});

        })();
    </script>
@endpush
