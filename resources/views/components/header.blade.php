<header id="mainHeader"
        class="sticky top-0 z-10 bg-white shadow-md py-6 sm:py-4 px-6">
    <div class="flex flex-col md:flex-row items-center md:justify-between flex-wrap gap-4">

        {{-- 1) Hamburger-Button --}}
        <button id="menuToggle" aria-label="Menü öffnen" class="flex-shrink-0 sm:ml-8">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24" stroke-width="1.5" stroke="#1E1E1E"
                 class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        {{-- 2) Titel + Standort (immer zentriert) --}}
        <div class="flex flex-col items-center flex-1 min-w-[150px] sm:ml-[100px] xl:ml-[300px]">
            <h1 class="text-lg sm:text-xl md:text-2xl font-bold text-[#1E1E1E] text-center">
                Ferienwohnungen <span class="text-[#01796F]">Familie Moser</span>
            </h1>
            <h2 id="standortText"
                class="mt-1 transition-opacity duration-500 opacity-100 text-base sm:text-lg font-medium text-[#3A3A3A] text-center">
                am Sonnbichl
            </h2>
        </div>

        {{-- 3) Aktion-Buttons --}}
        <div
            class="flex flex-col items-center gap-3 flex-shrink-0 md:items-end md:flex-col xl:flex-row lg:gap-3 xl:items-center">
            <a href="{{ route('sonnbichl') }}"
               class="max-w-xs whitespace-normal bg-[#0077B6] hover:bg-[#005F94] text-white font-semibold py-2 px-4 rounded-xl shadow text-center">
                Apartment Sonnbichl
            </a>
            <a href="{{ route('grundnerguetl') }}"
               class="max-w-xs whitespace-normal bg-[#90E0EF] hover:bg-[#62C9E3] text-[#1E1E1E] font-semibold py-2 px-4 rounded-xl shadow text-center">
                Apartment Grundnergütl
            </a>
        </div>

    </div>
</header>
