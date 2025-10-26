{{-- Impressum --}}
<section id="impressum" class="w-full bg-white md:py-14 text-center">
    <div class="max-w-3xl mx-auto px-6 sm:px-10">
        <h1 class="text-4xl font-bold text-brand-charcoal mb-12">
            Impressum
        </h1>

        <div class="space-y-8 text-lg leading-relaxed text-gray-700">
            <div>
                <p class="font-semibold">Anbieter</p>
                <p>
                    Appartement Moser am Sonnbichl<br>
                    Harald Moser<br>
                    Ecking 29<br>
                    5771 Leogang<br>
                    Österreich
                </p>
            </div>

            <div>
                <p>
                    Telefon: <a href="tel:+436648587644" class="text-brand-forest hover:underline">+43 664 8587644</a><br>
                    E-Mail: <a href="mailto:harald.moser@sbg.at" class="text-brand-forest hover:underline">harald.moser@sbg.at</a>
                </p>
            </div>
        </div>

        {{-- Zurück-Button --}}
        <div class="mt-16 flex justify-center">
            <a href="{{ route('sonnbichl') }}"
               class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl
                bg-brand-gold hover:bg-brand-goldDark
                text-brand-charcoal font-semibold shadow-md transition">
                ← Zurück zur Apartmentseite
            </a>
        </div>
    </div>
</section>
