const sr=ScrollReveal();

sr.reveal('h1', {
    scale: 0.8,
    duration: 2500
});

sr.reveal('.card', {
    delay: 400,
    duration: 2800,
    interval: 500
});

sr.reveal('.form-check', {
    origin: 'left',
    distance: '250px',
    duration: 2500
});

sr.reveal('.bouton-suivant', {
    origin: 'bottom',
    distance: '50px',
    duration: 2800,
    delay: 400
});