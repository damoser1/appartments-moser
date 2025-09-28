{{-- Galerie – Appartement Grundnergütl --}}
<section id="galerie" class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6 sm:px-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-charcoal">
                Galerie <span class="text-brand-pine">Grundnergütl</span>
            </h2>
            <p class="mt-3 text-lg text-gray-700">
                Eindrücke aus deinem Apartment – modern, gemütlich & mit traumhafter Lage.
            </p>
        </div>

        @php
            $bilder = [
                asset('assets/bildtransparent.png'),
                asset('assets/grundnerguetl/schlafzimmer.jpg'),
                asset('assets/grundnerguetl/kueche.jpg'),
                asset('assets/grundnerguetl/badezimmer.jpg'),
                asset('assets/grundnerguetl/balkon.jpg'),
                asset('assets/grundnerguetl/aussen.jpg'),
            ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($bilder as $i => $bild)
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="{{ $bild }}"
                         alt="Appartement Grundnergütl Bild {{ $i+1 }}"
                         class="w-full h-64 object-cover">
                </div>
            @endforeach
        </div>

        {{-- Zurück-Button --}}
        <div class="mt-16 flex justify-center">
            <a href="{{ route('grundnerguetl') }}"
               class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl
                      bg-brand-pine hover:bg-brand-forest text-white font-semibold shadow-md transition">
                ← Zurück zur Apartmentseite
            </a>
        </div>
    </div>
</section>

