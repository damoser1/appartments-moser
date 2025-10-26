<header id="mainHeader"
        class="sticky top-0 z-10 bg-white shadow-md pt-4 pb-4 sm:pt-2 sm:pb-2 lg:pb-4 xl:pb-0 px-6">
    <div class="flex flex-col md:flex-row items-center md:justify-between flex-wrap gap-4">

        {{-- 1) Hamburger-Button --}}
        <button id="menuToggle" aria-label="Menü öffnen" class="flex-shrink-0 sm:ml-4 lg:ml-8 mt-0 md:mt-8 lg:mt-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor"
                 class="h-8 w-8 text-brand-forest">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div class="flex flex-col lg:flex-row items-center xl:gap-6 mt-[-20px] sm:mt-0 xl:ml-30">

            {{-- ICONS: bis md sichtbar, ab lg ausgeblendet --}}
            <div class="relative h-[90px] w-[160px] shrink-0 lg:hidden">
                <img id="icon-sonn"  src="{{ asset('assets/icon-sonnbichl.png') }}"
                     class="absolute inset-0 h-full w-full object-contain opacity-100 transition-opacity duration-500" alt="">
                <img id="icon-grund" src="{{ asset('assets/icon-grundnerguetl.png') }}"
                     class="absolute inset-0 h-full w-full object-contain opacity-0 transition-opacity duration-500" alt="">
            </div>

            {{-- LOGOS: ab lg sichtbar --}}
            <div class="relative hidden lg:block h-[90px] w-[220px] shrink-0">
                <img id="logo-sonn"  src="{{ asset('assets/logo-sonnbichl.png') }}"
                     class="absolute inset-0 h-full w-full object-contain opacity-100 transition-opacity duration-500" alt="">
                <img id="logo-grund" src="{{ asset('assets/logo-grundnerguetl.png') }}"
                     class="absolute inset-0 h-full w-full object-contain opacity-0 transition-opacity duration-500" alt="">
            </div>

            {{-- Titelblock --}}
            <div class="flex flex-col items-center flex-1 min-w-[150px] mt-[-30px] lg:mt-0 lg:ml-[-50px] lg:mr-10 xl:mr-0">
                <h1 class="text-lg sm:text-xl md:text-2xl font-bold text-brand-charcoal text-center">
                    Ferienwohnungen
                    <span id="brandAccent" class="text-brand-pine transition-colors duration-500 ease-out">
                        Familie Moser
                    </span>
                </h1>
                <h2 id="standortText"
                    class="mt-1 transition-opacity duration-500 opacity-100 text-base sm:text-lg font-medium text-brand-olive text-center">
                    am Sonnbichl
                </h2>
            </div>
        </div>

        {{-- 3) Aktion-Buttons --}}
        <div class="flex flex-col items-center gap-3 flex-shrink-0 md:items-end md:flex-col xl:flex-row lg:gap-3 xl:items-center ">
            <a href="{{ route('sonnbichl') }}"
               class="max-w-xs whitespace-normal bg-brand-gold hover:bg-brand-goldDark text-brand-dark font-semibold py-2 px-7 sm:px-4 rounded-xl shadow text-center">
                Apartment Sonnbichl
            </a>
            <a href="{{ route('grundnerguetl') }}"
               class="max-w-xs whitespace-normal bg-brand-pine hover:bg-brand-forest text-white font-semibold py-2 px-4 rounded-xl shadow text-center">
                Apartment Grundnergütl
            </a>
        </div>

    </div>
</header>
