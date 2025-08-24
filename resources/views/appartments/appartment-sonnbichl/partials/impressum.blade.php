@extends('layouts.app')

@section('title', 'Impressum')

@section('content')
    <section class="max-w-4xl mx-auto px-6 sm:px-10 py-16">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Impressum</h1>

        <p><strong>Angaben gemäß § 5 ECG:</strong></p>
        <p>Apartment Moser am Sonnbichl<br>
            Max Mustermann<br>
            Ecking 29<br>
            5771 Leogang<br>
            Österreich</p>

        <p class="mt-4">
            <strong>Kontakt:</strong><br>
            Telefon: +43 664 1234567<br>
            E-Mail: info@sonnbichl-leogang.at
        </p>

        <p class="mt-4">
            <strong>UID-Nummer:</strong> ATU12345678<br>
            <strong>Mitglied bei:</strong> Wirtschaftskammer Salzburg
        </p>

        <p class="mt-4 text-sm text-gray-500">
            Haftungsausschluss: Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links.
            Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.
        </p>
    </section>
@endsection
