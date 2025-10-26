document.addEventListener('DOMContentLoaded', () => {
    /* ========= Elements ========= */
    const txt        = document.getElementById('standortText');

    // Bild-Paare (bis md: Icons sichtbar; ab lg: Logos sichtbar → regelt CSS)
    const iconSonn   = document.getElementById('icon-sonn');
    const iconGrund  = document.getElementById('icon-grund');
    const logoSonn   = document.getElementById('logo-sonn');
    const logoGrund  = document.getElementById('logo-grund');

    // „Familie Moser“-Accent-Span
    const accent     = document.getElementById('brandAccent');

    // Header (wird ausgeblendet, wenn Menü offen)
    const header     = document.getElementById('mainHeader');

    // Menü
    const btn        = document.getElementById('menuToggle');
    const menu       = document.getElementById('mobileMenu');
    const overlay    = document.getElementById('mobileOverlay');
    const closeBtn   = document.getElementById('mobileClose');

    /* ========= Settings ========= */
    const ROTATE    = ['am Sonnbichl', 'am Grundnergütl'];
    const PERIOD_MS = 3000;  // Intervalldauer
    const FADE_MS   = 500;   // Übergangsdauer Text/Bilder
    const HDR_FADE  = 200;   // Header-Opacity-Transition (ms)
    const MENU_HIDE = 300;   // Drawer-Transition (ms) – muss zu Tailwind duration passen

    /* ========= Helpers ========= */
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

    const ensureColorTransition = (el) => {
        if (!el) return;
        el.classList.add('transition-colors','duration-500','ease-out');
    };

    const setOpacity = (el, visible) => {
        if (!el) return;
        el.classList.toggle('opacity-100', !!visible);
        el.classList.toggle('opacity-0', !visible);
    };

    const fadeOutBrand = (brand) => {
        const { iconShow, logoShow } = imgsOf(brand);
        setOpacity(iconShow, false); // (bis md sichtbar)
        setOpacity(logoShow, false); // (ab lg sichtbar)
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
        if (brand === 'grund') accent.classList.add('text-brand-pine');   // Grün
        else accent.classList.add('text-brand-gold');                     // Gold
    };

    // Header sanft aus-/einblenden + interaktiv sperren/aktivieren
    header?.classList.add('transition-opacity', `duration-[${HDR_FADE}ms]`);
    const hideHeader = () => {
        if (!header) return;
        header.classList.add('opacity-0','pointer-events-none');
        header.setAttribute('aria-hidden','true');
        header.setAttribute('inert','');
        // nach Opacity-Transition vollständig entfernen (kein Layout-Shift beim Close, da Overlay/Drawer darüber liegen)
        setTimeout(() => header.classList.add('hidden'), HDR_FADE);
    };
    const showHeader = () => {
        if (!header) return;
        header.classList.remove('hidden');
        // einen Frame warten, damit die Opacity-Transition greift
        requestAnimationFrame(() => header.classList.remove('opacity-0'));
        header.classList.remove('pointer-events-none');
        header.setAttribute('aria-hidden','false');
        header.removeAttribute('inert');
    };

    /* ========= Init ========= */
    [txt, iconSonn, iconGrund, logoSonn, logoGrund].forEach(ensureFade);
    ensureColorTransition(accent);

    let currBrand = brandKeyFrom(txt?.textContent || ROTATE[0]);

    // Anfangszustand sauber setzen
    (function initVisualState() {
        const { iconShow, logoShow, iconHide, logoHide } = imgsOf(currBrand);
        setOpacity(iconShow, true);
        setOpacity(logoShow, true);
        setOpacity(iconHide, false);
        setOpacity(logoHide, false);
        setAccentColor(currBrand);
    })();

    /* ========= Rotation (Text + Bilder + Accent synchron) ========= */
    if (txt) {
        let i = ROTATE.indexOf(txt.textContent?.trim()) >= 0
            ? ROTATE.indexOf(txt.textContent.trim()) : 0;

        setInterval(() => {
            // 1) Text & aktuelles Paar ausblenden
            txt.classList.replace('opacity-100','opacity-0');
            fadeOutBrand(currBrand);

            // 2) Wechsel
            setTimeout(() => {
                i = (i + 1) % ROTATE.length;
                const nextText  = ROTATE[i];
                const nextBrand = brandKeyFrom(nextText);

                txt.textContent = nextText;
                currBrand = nextBrand;

                setAccentColor(currBrand);
                fadeInBrand(currBrand);

                // 3) Text wieder einblenden
                txt.classList.replace('opacity-0','opacity-100');
            }, FADE_MS);
        }, PERIOD_MS);

        // Externe Textänderungen + Resize konsistent halten
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

    /* ========= Menu open/close ========= */
    function openMenu() {
        if (!menu) return;
        // Drawer zeigen & reinsliden
        menu.classList.remove('hidden');
        requestAnimationFrame(() => menu.classList.remove('translate-x-full'));
        overlay && overlay.classList.remove('hidden');
        btn && btn.setAttribute('aria-expanded','true');
        document.documentElement.style.overflow = 'hidden';

        // Header ausblenden
        hideHeader();
    }

    function closeMenu() {
        if (!menu) return;
        // Drawer raussliden & nach Transition verstecken
        menu.classList.add('translate-x-full');
        overlay && overlay.classList.add('hidden');
        btn && btn.setAttribute('aria-expanded','false');
        document.documentElement.style.overflow = '';

        // Header wieder einblenden
        showHeader();

        setTimeout(() => menu.classList.add('hidden'), MENU_HIDE);
    }

    btn      && btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        expanded ? closeMenu() : openMenu();
    });
    closeBtn && closeBtn.addEventListener('click', closeMenu);
    overlay  && overlay.addEventListener('click', closeMenu);
    menu?.querySelectorAll('a')?.forEach(a => a.addEventListener('click', closeMenu));
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });
});
