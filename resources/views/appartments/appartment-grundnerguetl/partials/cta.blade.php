@php
    $waPhone = '4369911677336';
    $waMsg   = rawurlencode(
        'Guten Tag Herr Moser, ich interessiere mich für das Appartement Grundnergütl in Leogang. ' .
        'Könnten Sie mir bitte Informationen zur Verfügbarkeit und den Preisen geben? Vielen Dank!'
    );

    $mailTo   = 'thomasmoser77@gmx.at';
    $subject  = rawurlencode('Anfrage · Appartement Grundnergütl');
    $mailBody = rawurlencode(
        "Guten Tag Herr Moser,\n\n" .
        "ich interessiere mich für das Appartement Grundnergütl in Leogang.\n" .
        "Könnten Sie mir bitte Informationen zur Verfügbarkeit und den Preisen geben?\n\n" .
        "Vielen Dank!"
    );
@endphp

<section class="relative bg-white p-14 sm:p-18 xl:pt-40 xl:pb-36 overflow-hidden">
    {{-- Gelber Glow-Hintergrund nur ab xl --}}
    <div class="absolute inset-0 hidden xl:flex items-end justify-center pointer-events-none">
        <div class="w-[80%] h-[60%] bg-brand-pine/70 rounded-full blur-[120px] translate-y-12"></div>
    </div>

    <div class="relative max-w-3xl mx-auto px-6 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold ">
            Buche jetzt dein Apartment
        </h2>
        <p class="mt-3 text-lg text-gray-700">
            Schreib uns direkt – schnell & unkompliziert per WhatsApp oder E-Mail.
        </p>

        {{-- Buttons --}}
        <div class="mt-8 flex flex-col sm:flex-row sm:justify-center gap-4">
            {{-- WhatsApp --}}
            <a href="https://wa.me/{{ $waPhone }}?text={{ $waMsg }}"
               target="_blank" rel="noopener"
               class="inline-flex items-center justify-center gap-2 w-full sm:w-auto
              px-4 py-3 sm:px-8 sm:py-4 rounded-2xl
              bg-brand-pine hover:bg-brand-forest text-white font-semibold font-semibold
              text-sm sm:text-base shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.52 3.48A11.94 11.94 0 0 0 12.05 0C5.5 0 .2 5.3.2 11.84c0 2.08.55 4.1 1.6 5.9L0 24l6.42-1.67a11.8 11.8 0 0 0 5.63 1.44h.01c6.55 0 11.85-5.3 11.85-11.84 0-3.17-1.24-6.16-3.39-8.45Z"/>
                </svg>
                Per WhatsApp anfragen
            </a>

            {{-- E-Mail --}}
            <a href="mailto:{{ $mailTo }}?subject={{ $subject }}&body={{ $mailBody }}"
               class="inline-flex items-center justify-center gap-2 w-full sm:w-auto
              px-4 py-3 sm:px-8 sm:py-4 rounded-2xl
              bg-brand-pine hover:bg-brand-forest text-white font-semibold font-semibold
              text-sm sm:text-base shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v.2l-10 5.6L2 6.2V6Zm0 2.9v9.1a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8.9l-10 5.6L2 8.9Z"/>
                </svg>
                Per E-Mail anfragen
            </a>
        </div>

        {{-- Kontaktinfo --}}
        <div class="mt-6 text-gray-700">
            <p><strong>Telefon:</strong> +43 (0) 699 11677336</p>
            <p><strong>E-Mail:</strong>
                <a href="mailto:{{ $mailTo }}" class="text-brand-forest hover:underline">
                    {{ $mailTo }}
                </a>
            </p>
        </div>
    </div>
</section>


