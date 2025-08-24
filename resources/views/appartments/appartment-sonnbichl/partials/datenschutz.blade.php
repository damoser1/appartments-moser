@extends('layouts.app')

@section('title', 'Datenschutz')

@section('content')
    <section class="max-w-4xl mx-auto px-6 sm:px-10 py-16">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Datenschutzerklärung</h1>

        <p>Der Schutz Ihrer persönlichen Daten ist uns ein besonderes Anliegen. Wir verarbeiten Ihre Daten daher ausschließlich auf Grundlage der gesetzlichen Bestimmungen (DSGVO, TKG 2003). In dieser Datenschutzerklärung informieren wir Sie über die wichtigsten Aspekte der Datenverarbeitung im Rahmen unserer Website.</p>

        <h2 class="text-xl font-semibold mt-6 mb-2">Kontakt mit uns</h2>
        <p>Wenn Sie per Formular auf der Website oder per E-Mail Kontakt mit uns aufnehmen, werden Ihre angegebenen Daten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen sechs Monate bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>

        <h2 class="text-xl font-semibold mt-6 mb-2">Cookies</h2>
        <p>Unsere Website verwendet Cookies. Sie dienen dazu, unser Angebot nutzerfreundlich zu gestalten. Einige Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Sie ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p>

        <h2 class="text-xl font-semibold mt-6 mb-2">Ihre Rechte</h2>
        <p>Ihnen stehen grundsätzlich die Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit, Widerruf und Widerspruch zu. Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche sonst in einer Weise verletzt worden sind, können Sie sich bei der Aufsichtsbehörde beschweren. In Österreich ist dies die Datenschutzbehörde.</p>

        <p class="mt-4">Unsere Kontaktdaten finden Sie im <a href="{{ url('/impressum') }}" class="text-emerald-700 hover:underline">Impressum</a>.</p>
    </section>
@endsection
