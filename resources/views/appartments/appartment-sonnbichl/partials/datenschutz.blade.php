@extends('layouts.app')

@section('title', 'Datenschutz · Apartment Sonnbichl')

@section('header')
    <x-header/>
    @include('components.menu')
@endsection

@section('content')
    <section id="datenschutz" class="w-full bg-white pb-10 md:py-14">
        <div class="max-w-3xl mx-auto px-6 sm:px-10">
            <h1 class="text-4xl font-bold text-brand-charcoal text-center mb-12">Datenschutz</h1>

            <div class="space-y-8 text-lg leading-relaxed text-gray-700">

                <div>
                    <p class="font-semibold">Verantwortlicher</p>
                    <p>
                        <strong>Apartment Sonnbichl (Moser Apartments)</strong><br>
                        Ecking 29, 5771 Leogang, Österreich<br>
                        Telefon: <a href="tel:+436648587644" class="text-brand-forest hover:underline">+43 (0) 664 8587644</a><br>
                        E-Mail: <a href="mailto:harald.moser@sbg.at" class="text-brand-forest hover:underline">harald.moser@sbg.at</a>
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Zwecke & Rechtsgrundlagen der Verarbeitung</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li><strong>Anfragen & Buchungen beantworten</strong> (Art. 6 Abs. 1 lit. b DSGVO – Vertrag/Anbahnung)</li>
                        <li><strong>Kommunikation</strong> via E-Mail/Telefon/WhatsApp (Art. 6 Abs. 1 lit. b, f DSGVO)</li>
                        <li><strong>Darstellung der Karte</strong> (Google Maps) (Art. 6 Abs. 1 lit. a DSGVO – Einwilligung)</li>
                        <li><strong>Betrieb & Sicherheit der Website</strong> (Server-Logs) (Art. 6 Abs. 1 lit. f DSGVO)</li>
                        <li><strong>Erfüllung gesetzlicher Pflichten</strong> (z. B. Aufbewahrung) (Art. 6 Abs. 1 lit. c DSGVO)</li>
                    </ul>
                </div>

                <div>
                    <p class="font-semibold">Hosting & Server-Logfiles</p>
                    <p>
                        Unser Hosting-Anbieter verarbeitet beim Aufruf der Website automatisch Server-Logdaten
                        (IP-Adresse, Datum/Uhrzeit, URL, Referrer, User-Agent, ggf. Fehlercodes). Dies dient
                        dem sicheren, stabilen Betrieb und zur Fehleranalyse. Eine Zuordnung zu Personen
                        erfolgt nicht. Speicherdauer: i. d. R. 14–30 Tage. <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. f DSGVO.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Kommunikation (E-Mail, Telefon, WhatsApp)</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li><strong>E-Mail:</strong> Bei Kontakt per E-Mail verarbeiten wir Ihre Angaben zur Beantwortung und
                            etwaigen Abwicklung einer Buchung. Speicherdauer nach gesetzl. Pflichten (z. B. 7 Jahre bei Rechnungen).</li>
                        <li><strong>Telefon:</strong> Bei Anruf verarbeiten wir die übermittelten Daten (Telefonnummer, Gesprächsnotizen) zur
                            Bearbeitung Ihres Anliegens.</li>
                        <li><strong>WhatsApp:</strong> Wenn Sie uns über
                            <code>wa.me</code> schreiben, werden Meta/WhatsApp (WhatsApp Ireland Ltd./Meta Platforms) technische
                            Daten und Inhalte Ihrer Nachricht verarbeiten. Die Nutzung ist freiwillig. Bitte senden Sie über
                            WhatsApp keine sensiblen Daten. <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. b/f DSGVO.</li>
                    </ul>
                </div>

                <div>
                    <p class="font-semibold">Google Maps</p>
                    <p>
                        Wir binden Google Maps ein, um unsere Standorte anzuzeigen (Google Ireland Ltd./Google LLC).
                        Dabei werden u. a. IP-Adresse und ggf. Standortdaten an Google übertragen; es kann eine
                        Übermittlung in die USA stattfinden (Standardvertragsklauseln). Die Karte laden wir erst nach
                        Ihrer Einwilligung (z. B. über Einwilligungsbanner). Sie können Ihre Einwilligung jederzeit mit
                        Wirkung für die Zukunft widerrufen. <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. a DSGVO.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Cookies</p>
                    <p>
                        Wir setzen ausschließlich technisch erforderliche Cookies ein (z. B. Session-Cookies).
                        Tracking- oder Marketing-Cookies verwenden wir nicht. Sie können Cookies im Browser löschen
                        bzw. blockieren; ggf. ist die Funktionalität dann eingeschränkt.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Empfänger & Auftragsverarbeiter</p>
                    <p>
                        Hosting-Dienstleister (Serverbetrieb), E-Mail-Provider sowie ggf. IT-Dienstleister handeln
                        für uns als Auftragsverarbeiter nach Art. 28 DSGVO. Mit allen Dienstleistern bestehen
                        entsprechende Verträge/technische Schutzmaßnahmen.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Drittlandübermittlung</p>
                    <p>
                        Bei Nutzung von Google Maps und ggf. WhatsApp kann eine Datenübermittlung in die USA erfolgen.
                        Diese erfolgt auf Basis der EU-Standardvertragsklauseln bzw. vergleichbarer Garantien.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Speicherdauer</p>
                    <p>
                        Anfragen/Buchungsdaten speichern wir für die Dauer der Abwicklung und gemäß gesetzlichen
                        Aufbewahrungsfristen (z. B. 7 Jahre für steuerrelevante Unterlagen). E-Mails werden regelmäßig
                        überprüft und gelöscht, sobald sie nicht mehr erforderlich sind.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Pflichtangaben</p>
                    <p>
                        Die Bereitstellung Ihrer Daten ist für die Bearbeitung Ihrer Anfrage bzw. Buchung erforderlich.
                        Ohne diese Angaben können wir Ihr Anliegen nicht verarbeiten.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Ihre Rechte</p>
                    <p>
                        Sie haben das Recht auf Auskunft, Berichtigung, Löschung, Einschränkung der Verarbeitung,
                        Datenübertragbarkeit sowie Widerspruch gegen Verarbeitungen auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO.
                        Erteilte Einwilligungen können Sie jederzeit mit Wirkung für die Zukunft widerrufen.
                        Wenden Sie sich dazu an <a href="mailto:harald.moser@sbg.at" class="text-brand-forest hover:underline">harald.moser@sbg.at</a>.
                        Außerdem haben Sie das Recht auf Beschwerde bei der zuständigen Aufsichtsbehörde
                        (z. B. <a href="https://www.dsb.gv.at/" target="_blank" rel="noopener" class="text-brand-forest hover:underline">Datenschutzbehörde Österreich</a>).
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Stand: {{ date('Y-m-d') }}</p>
                </div>
            </div>

            {{-- Zurück-Button --}}
            <div class="mt-16 flex justify-center">
                <a href="{{ route('sonnbichl') }}"
                   class="inline-flex items-center px-8 py-4 rounded-2xl bg-brand-gold hover:bg-brand-goldDark
                text-brand-charcoal font-semibold shadow-md transition">
                    ← Zurück zur Apartmentseite
                </a>
            </div>
        </div>
    </section>
@endsection
