@extends('layouts.app')

@section('title', 'Datenschutz · Apartment Grundnergütl')

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
                        <strong>Apartment Grundnergütl (Moser Apartments)</strong><br>
                        Ecking 28, 5771 Leogang, Österreich<br>
                        Telefon: <a href="tel:+4369911677336" class="text-brand-forest hover:underline">+43 (0) 699 11677336</a><br>
                        E-Mail: <a href="mailto:thomasmoser77@gmx.at" class="text-brand-forest hover:underline">thomasmoser77@gmx.at</a>
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
                        Beim Aufruf der Website verarbeitet der Hosting-Anbieter Server-Logdaten
                        (IP-Adresse, Datum/Uhrzeit, URL, Referrer, User-Agent, ggf. Fehlercodes).
                        Zweck: stabiler, sicherer Betrieb, Fehleranalyse. Speicherdauer i. d. R. 14–30 Tage.
                        <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. f DSGVO.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Kommunikation (E-Mail, Telefon, WhatsApp)</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li><strong>E-Mail:</strong> Verarbeitung Ihrer Angaben zur Beantwortung/Abwicklung; Aufbewahrung nach Rechtspflichten.</li>
                        <li><strong>Telefon:</strong> Verarbeitung der übermittelten Daten (Rufnummer, Notizen) zur Bearbeitung Ihres Anliegens.</li>
                        <li><strong>WhatsApp:</strong> Nutzung von <code>wa.me</code> (WhatsApp Ireland/Meta). Es werden technische Daten und
                            Inhaltsdaten verarbeitet und ggf. in Drittländer übermittelt. Nutzung freiwillig; bitte keine sensiblen Daten senden.
                            <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. b/f DSGVO.</li>
                    </ul>
                </div>

                <div>
                    <p class="font-semibold">Google Maps</p>
                    <p>
                        Zur Anzeige unserer Standorte binden wir Google Maps ein (Google Ireland/Google LLC).
                        Dabei werden u. a. IP-Adresse und ggf. Standortdaten verarbeitet und eine Übermittlung in die USA
                        ist möglich (Standardvertragsklauseln). Die Einbindung erfolgt erst nach Ihrer Einwilligung
                        (z. B. über Consent-Banner). Widerruf jederzeit möglich. <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. a DSGVO.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Cookies</p>
                    <p>
                        Wir verwenden ausschließlich technisch notwendige Cookies (z. B. für Sessions).
                        Es kommen keine Analyse- oder Marketing-Cookies zum Einsatz.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Empfänger & Auftragsverarbeiter</p>
                    <p>
                        Hosting-Provider, E-Mail-Provider und ggf. IT-Dienstleister arbeiten auf Grundlage von
                        Auftragsverarbeitungsverträgen (Art. 28 DSGVO) und geeigneter technischer/organisatorischer Maßnahmen.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Drittlandübermittlung</p>
                    <p>
                        Bei Google Maps und ggf. WhatsApp kann eine Übermittlung in die USA erfolgen
                        (basierend auf EU-Standardvertragsklauseln bzw. vergleichbaren Garantien).
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Speicherdauer</p>
                    <p>
                        Anfragen/Buchungsdaten werden für die Dauer der Abwicklung und gemäß gesetzlichen
                        Aufbewahrungsfristen gespeichert (z. B. 7 Jahre für steuerrelevante Dokumente).
                        E-Mails werden regelmäßig geprüft und gelöscht, sobald sie nicht mehr erforderlich sind.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Pflichtangaben</p>
                    <p>
                        Ohne die erforderlichen Angaben können wir Ihre Anfrage/Buchung nicht bearbeiten.
                    </p>
                </div>

                <div>
                    <p class="font-semibold">Ihre Rechte</p>
                    <p>
                        Sie haben Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit
                        sowie Widerspruch gegen Verarbeitungen nach Art. 6 Abs. 1 lit. f DSGVO. Einwilligungen können
                        Sie jederzeit widerrufen. Kontakt: <a href="mailto:thomasmoser77@gmx.at" class="text-brand-forest hover:underline">thomasmoser77@gmx.at</a>.
                        Zudem können Sie Beschwerde bei der <a href="https://www.dsb.gv.at/" target="_blank" rel="noopener" class="text-brand-forest hover:underline">österreichischen Datenschutzbehörde</a> einlegen.
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Stand: {{ date('Y-m-d') }}</p>
                </div>
            </div>

            {{-- Zurück-Button --}}
            <div class="mt-16 flex justify-center">
                <a href="{{ route('grundnerguetl') }}"
                   class="inline-flex items-center px-8 py-4 rounded-2xl bg-brand-pine hover:bg-brand-forest
                text-white font-semibold shadow-md transition">
                    ← Zurück zur Apartmentseite
                </a>
            </div>
        </div>
    </section>
@endsection
