<footer class="bg-gray-900 text-gray-400 text-sm py-6">
    <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between gap-4">
        <p>© {{ date('Y') }} Apartment Sonnbichl · Alle Rechte vorbehalten</p>
        <div class="flex gap-6">
            <a href="{{ route('impressum-sonnbichl') }}" class="hover:text-white">Impressum</a>
            <a href="{{ route('datenschutz-sonnbichl') }}" class="hover:text-white">Datenschutz</a>
        </div>
    </div>
</footer>
