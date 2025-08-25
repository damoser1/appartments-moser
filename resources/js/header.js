document.addEventListener('DOMContentLoaded', () => {
    /* Elemente */
    const txt        = document.getElementById('standortText');
    const iconSonn   = document.getElementById('icon-sonn');
    const iconGrund  = document.getElementById('icon-grund');
    const logoSonn   = document.getElementById('logo-sonn');
    const logoGrund  = document.getElementById('logo-grund');
    const accent     = document.getElementById('brandAccent'); // <span id="brandAccent">Familie Moser</span>

    // (optional) Mobile Menu
    const btn     = document.getElementById('menuToggle');
    const menu    = document.getElementById('mobileMenu');
    const overlay = document.getElementById('mobileOverlay');

    /* Settings */
    const ROTATE    = ['am Sonnbichl', 'am Grundnergütl'];
    const PERIOD_MS = 3000;
    const FADE_MS   = 500;

    /* Helpers */
    const brandKeyFrom = (t='') =>
        /grundnerg|gründner|grundner/i.test(t.toLowerCase()) ? 'grund' : 'sonn';

    const imgsOf = (brand) => brand === 'grund'
        ? { iconShow: iconGrund, iconHide: iconSonn, logoShow: logoGrund, logoHide: logoSonn }
        : { iconShow: iconSonn,  iconHide: iconGrund, logoShow: logoSonn,  logoHide: logoGrund };

    const ensureFade = (el) => {
        if (!el) return;
        el.classList.add('transition-opacity','duration-500');
        if (!el.classList.contains('opacity-0') && !el.classList.contains('opacity-100')) {
            el.classList.add('opacity-100');
        }
    };

    // NEU: sorgt dafür, dass Farbwechsel am Accent weich animieren
    const ensureColorTransition = (el) => {
        if (!el) return;
        el.classList.add('transition-colors','duration-500','ease-out'); // clean color fade
    };

    const setOpacity = (el, visible) => {
        if (!el) return;
        el.classList.toggle('opacity-100', !!visible);
        el.classList.toggle('opacity-0', !visible);
    };

    const fadeOutBrand = (brand) => {
        const { iconShow, logoShow } = imgsOf(brand);
        setOpacity(iconShow, false); // bis md sichtbar (CSS)
        setOpacity(logoShow, false); // ab lg sichtbar (CSS)
    };

    const fadeInBrand = (brand) => {
        const { iconShow, logoShow, iconHide, logoHide } = imgsOf(brand);
        setOpacity(iconHide, false);
        setOpacity(logoHide, false);
        setOpacity(iconShow, true);
        setOpacity(logoShow, true);
    };

    const setAccentColor = (brand) => {
        if (!accent) return;
        accent.classList.remove('text-brand-pine','text-brand-gold','text-brand-goldDark');
        // Grundnergütl = Grün, Sonnbichl = Gold
        if (brand === 'grund') accent.classList.add('text-brand-pine');
        else accent.classList.add('text-brand-gold'); // oder 'text-brand-goldDark' falls gewünscht
    };

    /* Init */
    [txt, iconSonn, iconGrund, logoSonn, logoGrund].forEach(ensureFade);
    ensureColorTransition(accent); // <<--- wichtig für den Farb-Übergang

    let currBrand = brandKeyFrom(txt?.textContent || ROTATE[0]);
    // Anfangszustand sauber setzen
    (() => {
        const { iconShow, logoShow, iconHide, logoHide } = imgsOf(currBrand);
        setOpacity(iconShow, true);
        setOpacity(logoShow, true);
        setOpacity(iconHide, false);
        setOpacity(logoHide, false);
        setAccentColor(currBrand); // wird jetzt weich animiert bei späteren Wechseln
    })();

    /* Rotation: Text + Bilder + Accent synchron (Fade-Out -> Switch -> Fade-In) */
    if (txt) {
        let i = ROTATE.indexOf(txt.textContent?.trim()) >= 0
            ? ROTATE.indexOf(txt.textContent.trim()) : 0;

        setInterval(() => {
            // 1) Text & aktuelles sichtbares Bildpaar ausblenden
            txt.classList.replace('opacity-100','opacity-0');
            fadeOutBrand(currBrand);

            // 2) Wechsel nach der Fade-Dauer
            setTimeout(() => {
                i = (i + 1) % ROTATE.length;
                const nextText  = ROTATE[i];
                const nextBrand = brandKeyFrom(nextText);

                txt.textContent = nextText;
                currBrand = nextBrand;

                // Farbwechsel am Accent (animiert via transition-colors)
                setAccentColor(currBrand);

                // Bilder wieder einblenden
                fadeInBrand(currBrand);

                // Text wieder einblenden
                txt.classList.replace('opacity-0','opacity-100');
            }, FADE_MS);
        }, PERIOD_MS);

        // Externe Änderungen/Resize konsistent halten
        const applyCurrent = () => {
            currBrand = brandKeyFrom(txt.textContent || '');
            const { iconShow, logoShow, iconHide, logoHide } = imgsOf(currBrand);
            setOpacity(iconShow, true);
            setOpacity(logoShow, true);
            setOpacity(iconHide, false);
            setOpacity(logoHide, false);
            setAccentColor(currBrand);
        };
        const mo = new MutationObserver(applyCurrent);
        mo.observe(txt, { childList:true, characterData:true, subtree:true });
        window.addEventListener('resize', applyCurrent);
    }

    /* Mobile Menu (optional) */
    const openMenu = () => {
        if (!menu) return;
        menu.classList.remove('translate-x-full','hidden');
        overlay && overlay.classList.remove('hidden');
        btn && btn.setAttribute('aria-expanded','true');
        document.documentElement.style.overflow = 'hidden';
    };
    const closeMenu = () => {
        if (!menu) return;
        menu.classList.add('translate-x-full');
        overlay && overlay.classList.add('hidden');
        btn && btn.setAttribute('aria-expanded','false');
        document.documentElement.style.overflow = '';
    };
    if (btn && menu) {
        btn.addEventListener('click', () => {
            const expanded = btn.getAttribute('aria-expanded') === 'true';
            expanded ? closeMenu() : openMenu();
        });
        overlay && overlay.addEventListener('click', closeMenu);
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeMenu(); });
        menu.querySelectorAll('a')?.forEach(a => a.addEventListener('click', closeMenu));
    }
});
