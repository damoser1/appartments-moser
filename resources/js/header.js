document.addEventListener('DOMContentLoaded', () => {
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
});
