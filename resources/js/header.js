document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('mainHeader');

    // Standort-Rotation
    const standorte = ['am Sonnbichl', 'am Grundnergütl'];
    let idx = 0;
    const txt = document.getElementById('standortText');
    if (txt) {
        setInterval(() => {
            txt.classList.toggle('opacity-100');
            txt.classList.toggle('opacity-0');
            setTimeout(() => {
                idx = (idx + 1) % standorte.length;
                txt.textContent = standorte[idx];
                txt.classList.toggle('opacity-0');
                txt.classList.toggle('opacity-100');
            }, 500);
        }, 3000);
    }

    // Scroll-Handler: Header ein-/ausblenden
    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            header.classList.remove('-translate-y-full');
        } else {
            header.classList.add('-translate-y-full');
        }
    });
});
