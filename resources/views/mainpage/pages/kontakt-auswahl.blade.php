@extends('layouts.app')

@section('title', 'Kontakt auswählen')

@section('header')
    <x-header/>
    @include('components.menu')
@endsection

@section('content')
    @php
        // ✅ KONTAKT-INFOS PRO APARTMENT DEKLARIERT

        // --- Sonnbichl (Gold) ---
        $sonnWaPhone = '436648587644';
        $sonnWaMsg   = rawurlencode(
            'Guten Tag Familie Moser, ich interessiere mich für das Appartement Sonnbichl in Leogang. ' .
            'Könnten Sie mir bitte Informationen zur Verfügbarkeit und den Preisen geben? Vielen Dank!'
        );
        $sonnMailTo  = 'harald.moser@sbg.at';
        $sonnSubject = rawurlencode('Anfrage · Appartement Sonnbichl');
        $sonnBody    = rawurlencode(
            "Guten Tag Familie Moser,\n\n" .
            "ich interessiere mich für das Appartement Sonnbichl in Leogang.\n" .
            "Könnten Sie mir bitte Informationen zur Verfügbarkeit und den Preisen geben?\n\n" .
            "Vielen Dank!"
        );

        // --- Grundnergütl (Grün) ---
        $grundWaPhone = '4369911677336';
        $grundWaMsg   = rawurlencode(
            'Guten Tag Herr Moser, ich interessiere mich für das Appartement Grundnergütl in Leogang. ' .
            'Könnten Sie mir bitte Informationen zur Verfügbarkeit und den Preisen geben? Vielen Dank!'
        );
        $grundMailTo  = 'thomasmoser77@gmx.at';
        $grundSubject = rawurlencode('Anfrage · Appartement Grundnergütl');
        $grundBody    = rawurlencode(
            "Guten Tag Herr Moser,\n\n" .
            "ich interessiere mich für das Appartement Grundnergütl in Leogang.\n" .
            "Könnten Sie mir bitte Informationen zur Verfügbarkeit und den Preisen geben?\n\n" .
            "Vielen Dank!"
        );
    @endphp

    <section id="kontakt-auswahl" class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h1 class="text-4xl font-extrabold text-brand-charcoal">Kontakt aufnehmen</h1>
                <p class="mt-4 text-lg text-gray-700">Wähle das Apartment, das du anfragen möchtest.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                {{-- ✅ Sonnbichl --}}
                <div class="rounded-2xl border border-gray-100 p-8 shadow-sm hover:shadow-lg transition">
                    <h2 class="text-2xl font-bold text-brand-goldDark text-center">Apartment Sonnbichl</h2>
                    <p class="text-sm text-gray-600 text-center mb-8">Sonnige Auszeit – Ecking 29</p>

                    <div class="flex flex-col gap-4 mb-10">
                        <a href="https://wa.me/{{ $sonnWaPhone }}?text={{ $sonnWaMsg }}" target="_blank" rel="noopener"
                           class="inline-flex items-center justify-center gap-2 w-full px-8 py-4 rounded-2xl
                              bg-brand-gold hover:bg-brand-goldDark text-brand-charcoal font-semibold shadow-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.94 11.94 0 0 0 12.05 0C5.5 0 .2 5.3.2 11.84c0 2.08.55 4.1 1.6 5.9L0 24l6.42-1.67a11.8 11.8 0 0 0 5.63 1.44h.01c6.55 0 11.85-5.3 11.85-11.84 0-3.17-1.24-6.16-3.39-8.45Z"/>
                            </svg>
                            Per WhatsApp anfragen
                        </a>
                        <p class="text-xs text-gray-600 text-center leading-snug">
                            Mit Klick auf WhatsApp stimmen Sie den Datenschutzrichtlinien von WhatsApp/Meta zu.
                        </p>

                        <a href="mailto:{{ $sonnMailTo }}?subject={{ $sonnSubject }}&body={{ $sonnBody }}"
                           class="inline-flex items-center justify-center gap-2 w-full px-8 py-4 rounded-2xl
                              bg-brand-gold hover:bg-brand-goldDark text-brand-charcoal font-semibold shadow-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v.2l-10 5.6L2 6.2V6Z M2 8.9v9.1a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8.9l-10 5.6L2 8.9Z"/>
                            </svg>
                            Per E-Mail anfragen
                        </a>
                    </div>

                    <div class="text-gray-700 text-center space-y-1">
                        <p><strong>Telefon:</strong> <a href="tel:+{{ $sonnWaPhone }}" class="text-brand-forest hover:underline">+43 (0) 664 8587644</a></p>
                        <p><strong>E-Mail:</strong> <a href="mailto:{{ $sonnMailTo }}" class="text-brand-forest hover:underline">{{ $sonnMailTo }}</a></p>
                    </div>
                </div>

                {{-- ✅ Grundnergütl --}}
                <div class="rounded-2xl border border-gray-100 p-8 shadow-sm hover:shadow-lg transition">
                    <h2 class="text-2xl font-bold text-brand-forest text-center">Apartment Grundnergütl</h2>
                    <p class="text-sm text-gray-600 text-center mb-8">Ruhige Lage – Ecking 28</p>

                    <div class="flex flex-col gap-4 mb-10">
                        <a href="https://wa.me/{{ $grundWaPhone }}?text={{ $grundWaMsg }}" target="_blank" rel="noopener"
                           class="inline-flex items-center justify-center gap-2 w-full px-8 py-4 rounded-2xl
                              bg-brand-pine hover:bg-brand-forest text-white font-semibold shadow-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.94 11.94 0 0 0 12.05 0C5.5 0 .2 5.3.2 11.84c0 2.08.55 4.1 1.6 5.9L0 24l6.42-1.67a11.8 11.8 0 0 0 5.63 1.44h.01c6.55 0 11.85-5.3 11.85-11.84 0-3.17-1.24-6.16-3.39-8.45Z"/>
                            </svg>
                            Per WhatsApp anfragen
                        </a>

                        <p class="text-xs text-gray-600 text-center leading-snug">
                            Mit Klick auf WhatsApp stimmen Sie den Datenschutzrichtlinien von WhatsApp/Meta zu.
                        </p>

                        <a href="mailto:{{ $grundMailTo }}?subject={{ $grundSubject }}&body={{ $grundBody }}"
                           class="inline-flex items-center justify-center gap-2 w-full px-8 py-4 rounded-2xl
                              bg-brand-pine hover:bg-brand-forest text-white font-semibold shadow-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v.2l-10 5.6L2 6.2V6Z M2 8.9v9.1a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8.9l-10 5.6L2 8.9Z"/>
                            </svg>
                            Per E-Mail anfragen
                        </a>
                    </div>

                    <div class="text-gray-700 text-center space-y-1">
                        <p><strong>Telefon:</strong> <a href="tel:+{{ $grundWaPhone }}" class="text-brand-forest hover:underline">+43 (0) 699 11677336</a></p>
                        <p><strong>E-Mail:</strong> <a href="mailto:{{ $grundMailTo }}" class="text-brand-forest hover:underline">{{ $grundMailTo }}</a></p>
                    </div>
                </div>
            </div>

            {{-- ✅ Zurück zur Startseite --}}
            <div class="text-center mt-16">
                <a href="{{ route('home') }}"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl
                      bg-brand-pine hover:bg-brand-forest
                      text-white font-semibold shadow-md transition">
                    ← Zur Startseite
                </a>
            </div>
        </div>
    </section>
@endsection
