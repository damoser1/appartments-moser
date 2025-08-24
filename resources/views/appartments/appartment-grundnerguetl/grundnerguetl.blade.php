@extends('layouts.app')

@section('title', 'Appartement Grundnergütl')

@section('content')
    <section class="px-6 py-8">
        <h1 class="text-3xl font-bold mb-4">Appartement Grundnergütl</h1>
        <img src="{{ asset('assets/bildtransparent.png') }}" alt="Appartement Grundnergütl" class="w-full h-auto object-cover rounded-lg mb-6 max-h-96">
        <p class="mb-4">
            Das modern eingerichtete Appartement liegt in ruhiger Lage und bietet viel Platz für Familien oder Paare. Eine voll ausgestattete Küche, helle Zimmer und eine Terrasse mit Blick auf die Leoganger Steinberge sorgen für erholsame Urlaubstage.
        </p>
        <ul class="list-disc pl-5 space-y-2 mb-6">
            <li>Großzügiger Wohn- und Essbereich</li>
            <li>Terrasse bzw. Balkon mit Bergblick</li>
            <li>Kostenfreies WLAN und Parkplatz</li>
            <li>Nahe Skigebiet und Wanderwege</li>
        </ul>
        <div class="flex flex-wrap gap-4">
            <a href="https://www.saalfelden-leogang.com/de/suchen-buchen/Ferienwohnung-Grundnerguetl-Ferienwohnung-Appartement-Leogang_ad-7180296" target="_blank" class="bg-[#90E0EF] hover:bg-[#62C9E3] text-[#1E1E1E] font-semibold py-2 px-4 rounded-lg shadow">
                Weitere Infos
            </a>
            <a href="{{ route('sonnbichl') }}" class="bg-[#0077B6] hover:bg-[#005F94] text-white font-semibold py-2 px-4 rounded-lg shadow">
                Zum Appartement Sonnbichl
            </a>
        </div>
    </section>
@endsection
