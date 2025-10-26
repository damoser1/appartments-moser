import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const consentStorageKey = 'appartments-moser.maps-consent';
    const banner = document.getElementById('consent-banner');
    const acceptButtons = document.querySelectorAll('[data-consent-accept]');
    const mapWrappers = document.querySelectorAll('[data-google-maps-wrapper]');
    let mapsScriptRequested = false;

    const hasConsent = () => localStorage.getItem(consentStorageKey) === 'true';

    const showBanner = () => {
        if (!banner || hasConsent()) {
            return;
        }
        banner.classList.remove('hidden');
        banner.setAttribute('aria-hidden', 'false');
    };

    const hideBanner = () => {
        if (!banner) {
            return;
        }
        banner.classList.add('hidden');
        banner.setAttribute('aria-hidden', 'true');
    };

    const updateConsentMessages = () => {
        mapWrappers.forEach((wrapper) => {
            const message = wrapper.querySelector('[data-map-consent-message]');
            if (!message) {
                return;
            }

            if (hasConsent()) {
                message.classList.add('hidden');
                message.setAttribute('aria-hidden', 'true');
            } else {
                message.classList.remove('hidden');
                message.setAttribute('aria-hidden', 'false');
            }
        });
    };

    const loadGoogleMapsScript = (apiKey) => {
        if (!apiKey) {
            return;
        }

        if (window.google && window.google.maps) {
            if (typeof window.initMap === 'function') {
                window.initMap();
            }
            return;
        }

        if (mapsScriptRequested) {
            return;
        }

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=initMap`;
        script.async = true;
        script.defer = true;
        script.onerror = () => {
            mapsScriptRequested = false;
        };
        document.head.appendChild(script);
        mapsScriptRequested = true;
    };

    const enableMaps = () => {
        updateConsentMessages();
        const wrapper = mapWrappers[0];
        if (!wrapper) {
            return;
        }

        const { apiKey } = wrapper.dataset;
        loadGoogleMapsScript(apiKey);
    };

    acceptButtons.forEach((button) => {
        button.addEventListener('click', () => {
            localStorage.setItem(consentStorageKey, 'true');
            hideBanner();
            enableMaps();
        });
    });

    if (hasConsent()) {
        hideBanner();
        enableMaps();
    } else {
        showBanner();
        updateConsentMessages();
    }
});
