{{-- FAQ Section --}}
<section id="faq" class="bg-white pt-10 sm:pt-0 xl:pt-20 pb-10">
    <div class="max-w-4xl mx-auto px-6 sm:px-10">
        <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-charcoal">Häufig gestellte Fragen</h2>
            <p class="mt-3 text-gray-700">
                Hier findest du Antworten auf die wichtigsten Fragen rund um deinen Aufenthalt.
            </p>
        </div>

        <div class="space-y-4" id="faq-accordion">
            @php
                $faqs = [
                    ['q' => 'Wie viele Personen können im Apartment wohnen?',
                     'a' => 'Ideal für 2–5 Gäste: 2 Schlafzimmer, 2 Doppelbett und 1 Einzelbett'],

                    ['q' => 'Zahlung & Stornierung',
                     'a' => 'Stornierungs- und Anzahlungsbedingungen variieren je nach Zeitraum. Bitte frag für deinen Wunschzeitraum nach.'],

                    ['q' => 'Check-in & Check-out',
                     'a' => "Check-in: ab 15:00 Uhr · Check-out: bis 10:00 Uhr"],

                    ['q' => 'Gibt es WLAN & TV?',
                     'a' => 'Ja, es gibt kostenloses WLAN und einen Fernseher mit SAT/Kabel.'],

                    ['q' => 'Sind Bettwäsche & Handtücher inklusive?',
                     'a' => 'Ja, wir stellen Bettwäsche und Handtücher bereit.'],

                    ['q' => 'Wo kann ich parken?',
                     'a' => 'Direkt am Haus steht ein kostenloser Parkplatz zur Verfügung.'],

                    ['q' => 'Gibt es einen Skiraum oder Platz für Fahrräder?',
                     'a' => 'Ja, es gibt eine Abstellmöglichkeit für Sportgeräte.'],

                    ['q' => 'Wie weit ist es bis zum Skigebiet?',
                     'a' => 'Die Steinbergbahn ist ca. 3 km entfernt, Skibushaltestelle in der Nähe.'],

                    ['q' => 'Nichtraucher, Haustiere & Partys',
                     'a' => 'Das Apartment ist Nichtraucher. Haustiere sind nicht erlaubt. Partys/Veranstaltungen sind nicht gestattet.'],
                ];
            @endphp

            @foreach($faqs as $i => $faq)
                <div class="faq-item {{ $i > 2 ? 'hidden' : '' }} rounded-2xl border border-gray-200 bg-gray-50 shadow-sm overflow-hidden transition hover:bg-brand-pine/10"
                     data-faq-item="{{ $i }}">
                    <button type="button"
                            class="w-full flex items-center justify-between px-5 py-4 text-left text-brand-charcoal font-medium"
                            data-accordion-btn="{{ $i }}">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="h-5 w-5 text-gray-600 transition-transform duration-300" data-icon
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-gray-700" data-accordion-panel="{{ $i }}">
                        {{ $faq['a'] }}
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Mehr/Weniger Button --}}
        <div class="text-center mt-6">
            <button id="faq-toggle"
                    class="inline-flex items-center gap-2 text-brand-charcoal font-medium hover:text-brand-forest transition">
                <span>Mehr anzeigen</span>
                <svg id="faq-toggle-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('[data-accordion-btn]');
            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const idx = btn.getAttribute('data-accordion-btn');
                    const panel = document.querySelector('[data-accordion-panel="'+idx+'"]');
                    const icon = btn.querySelector('[data-icon]');

                    const isOpen = !panel.classList.contains('hidden');
                    // Alles schließen
                    document.querySelectorAll('[data-accordion-panel]').forEach(p => p.classList.add('hidden'));
                    document.querySelectorAll('[data-icon]').forEach(i => i.style.transform = 'rotate(0deg)');

                    if (!isOpen) {
                        panel.classList.remove('hidden');
                        icon.style.transform = 'rotate(45deg)'; // Plus → Kreuz
                    }
                });
            });

            const faqToggle = document.getElementById('faq-toggle');
            const faqItems = document.querySelectorAll('.faq-item');
            const toggleIcon = document.getElementById('faq-toggle-icon');

            if (faqToggle) {
                faqToggle.addEventListener('click', () => {
                    const hiddenItems = document.querySelectorAll('.faq-item.hidden');
                    const showingMore = hiddenItems.length === 0;

                    faqItems.forEach((item, i) => {
                        if (i > 2) {
                            item.classList.toggle('hidden', showingMore);
                        }
                    });

                    // Text & Icon anpassen
                    faqToggle.querySelector('span').textContent = showingMore ? 'Mehr anzeigen' : 'Weniger anzeigen';
                    toggleIcon.style.transform = showingMore ? 'rotate(0deg)' : 'rotate(180deg)';
                });
            }
        });
    </script>
@endpush

