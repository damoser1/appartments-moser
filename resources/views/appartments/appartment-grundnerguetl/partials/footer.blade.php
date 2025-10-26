<footer
    class="bg-gray-100 text-gray-700 text-base border-t-4 border-brand-pine
           mx-[calc(50%-50vw)] w-[100vw]">
    <div class="max-w-7xl mx-auto px-6 py-6 sm:px-10 lg:px-16
                flex flex-col sm:flex-row items-center justify-between gap-4">

        <p class="text-sm text-gray-700 text-center sm:text-left">
            © {{ date('Y') }} Appartement Grundnergütl · Alle Rechte vorbehalten
        </p>

        <div class="flex gap-8 font-medium">
            <a href="{{ route('impressum-grundnerguetl') }}" class="text-brand-charcoal hover:text-brand-forest">Impressum</a>
            <a href="{{ route('datenschutz-grundnerguetl') }}" class="text-brand-charcoal hover:text-brand-forest">Datenschutz</a>
        </div>
    </div>
</footer>

