<!DOCTYPE html>
<html lang="de" class="scroll-smooth h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Appartments Moser')</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/header.js'])
</head>
<body class="m-0 min-h-screen flex flex-col antialiased bg-white  text-gray-800">

{{-- Header --}}
@yield('header')


<main class="flex-1 bg-white pt-6">
    @yield('content')
</main>

{{-- Footer --}}
@yield('footer')

{{-- Consent Banner --}}
<div id="consent-banner"
     class="hidden fixed inset-x-0 bottom-0 z-50 bg-white/95 backdrop-blur border-t border-gray-200 shadow-lg"
     role="dialog" aria-live="polite" aria-hidden="true">
    <div class="max-w-5xl mx-auto px-6 py-5 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div class="space-y-2 text-sm text-gray-700">
            <p class="font-semibold text-brand-charcoal">Datenschutzhinweis</p>
            <p>
                Wir laden Google Maps erst nach deiner Zustimmung. Dabei können personenbezogene Daten an Google
                (USA) übertragen werden. Details findest du in unseren
                <a href="{{ route('datenschutz-sonnbichl') }}" target="_blank" rel="noopener"
                   class="font-medium text-brand-pine hover:text-brand-forest hover:underline">Datenschutzhinweisen</a>.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-3">
            <button type="button"
                    data-consent-accept
                    class="inline-flex items-center justify-center rounded-full bg-brand-pine px-6 py-2 text-sm font-semibold
                           text-white shadow hover:bg-brand-forest transition">
                Zustimmung erteilen
            </button>
        </div>
    </div>
</div>

@stack('scripts')
</body>
</html>
