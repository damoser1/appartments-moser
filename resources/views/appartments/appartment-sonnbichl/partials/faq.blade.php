{{-- FAQ Section --}}
<section id="faq" class="bg-gray-50 border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 py-16">

        <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900">Häufig gestellte Fragen</h2>
            <p class="mt-3 text-gray-600">Hier findest du Antworten auf die wichtigsten Fragen rund um deinen Aufenthalt.</p>
        </div>

        <div class="space-y-4" id="faq-accordion">
            @php
                $faqs = [
                    ['q' => 'Wie viele Personen können im Apartment wohnen?',
                     'a' => 'Das Apartment ist ideal für 1–4 Gäste: Galerie-Schlafzimmer und ein hochwertiges Schlafsofa (160×200 cm).'],

                    ['q' => 'Gibt es WLAN & Streaming?',
                     'a' => 'Ja, es gibt kostenloses WLAN und einen Smart-TV mit Netflix und Kabelanschluss.'],

                    ['q' => 'Sind Bettwäsche & Handtücher inklusive?',
                     'a' => 'Ja, wir stellen frische Bettwäsche und Handtücher für alle Gäste bereit.'],

                    ['q' => 'Wo kann ich parken?',
                     'a' => 'Direkt am Haus steht dir ein kostenloser Parkplatz zur Verfügung.'],

                    ['q' => 'Gibt es einen Skiraum oder Platz für Fahrräder?',
                     'a' => 'Ja, ein sicherer Abstellraum für Ski, Fahrräder und andere Sportgeräte ist vorhanden.'],

                    ['q' => 'Wie weit ist es bis zum Skigebiet?',
                     'a' => 'Die Steinbergbahn ist etwa 5 km entfernt, die Skibushaltestelle ca. 200–500 m.'],
                ];
            @endphp

            @foreach($faqs as $i => $faq)
                <div class="rounded-2xl border border-gray-200 bg-white shadow-sm overflow-hidden">
                    <button type="button"
                            class="w-full flex items-center justify-between px-5 py-4 text-left text-gray-900 font-medium hover:bg-gray-50 transition"
                            data-accordion-btn="{{ $i }}">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="h-5 w-5 text-gray-500 transition-transform duration-300" data-icon
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-gray-600" data-accordion-panel="{{ $i }}">
                        {{ $faq['a'] }}
                    </div>
                </div>
            @endforeach
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
        });
    </script>
@endpush
