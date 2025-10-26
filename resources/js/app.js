import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const consentStorageKey = 'appartments-moser.maps-consent';
    const consentStates = {
        accepted: 'accepted',
        declined: 'declined',
    };

    const banner = document.getElementById('consent-banner');
    const acceptButtons = document.querySelectorAll('[data-consent-accept]');
    const declineButtons = document.querySelectorAll('[data-consent-decline]');
    const manageButtons = document.querySelectorAll('[data-consent-manage]');
    const mapWrappers = document.querySelectorAll('[data-google-maps-wrapper]');
    let mapsScriptRequested = false;

    const getConsentState = () => localStorage.getItem(consentStorageKey);
    const hasConsent = () => getConsentState() === consentStates.accepted;

    const openBanner = () => {
        if (!banner) {
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

    const showBannerIfNeeded = () => {
        if (getConsentState()) {
            return;
        }
        openBanner();
    };

    const setConsentState = (state) => {
        if (!state) {
            localStorage.removeItem(consentStorageKey);
            return;
        }
        localStorage.setItem(consentStorageKey, state);
    };

    const disableMaps = () => {
        mapWrappers.forEach((wrapper) => {
            const mapElement = wrapper.querySelector('#map');
            if (!mapElement) {
                return;
            }

            mapElement.replaceChildren();
            mapElement.removeAttribute('style');
            mapElement.classList.add('bg-gray-100');
        });
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
        if (!hasConsent()) {
            return;
        }

        updateConsentMessages();

        mapWrappers.forEach((wrapper) => {
            const mapElement = wrapper.querySelector('#map');
            if (mapElement) {
                mapElement.classList.remove('bg-gray-100');
            }
        });

        const wrapperWithKey = mapWrappers[0];
        if (!wrapperWithKey) {
            return;
        }

        const { apiKey } = wrapperWithKey.dataset;
        loadGoogleMapsScript(apiKey);
    };

    acceptButtons.forEach((button) => {
        button.addEventListener('click', () => {
            setConsentState(consentStates.accepted);
            hideBanner();
            enableMaps();
        });
    });

    declineButtons.forEach((button) => {
        button.addEventListener('click', () => {
            setConsentState(consentStates.declined);
            hideBanner();
            disableMaps();
            updateConsentMessages();
        });
    });

    manageButtons.forEach((button) => {
        button.addEventListener('click', () => {
            setConsentState(consentStates.declined);
            disableMaps();
            updateConsentMessages();
            openBanner();
        });
    });

    if (hasConsent()) {
        hideBanner();
        enableMaps();
    } else {
        if (getConsentState() === consentStates.declined) {
            hideBanner();
            disableMaps();
        } else {
            showBannerIfNeeded();
        }
        updateConsentMessages();
    }
});
