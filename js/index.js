const sr=ScrollReveal();

//animation titre Bienvenue
sr.reveal('.titre-accueil', {
    duration: 2500,
    origin: 'left',
    distance: '50px',
    reset: true
});

//animation titre Formation
sr.reveal('.titre-formation', {
    duration: 2500,
    scale: 0.5,
    reset: true
});

//animation des cards de formation
sr.reveal('.formation', {
    origin: 'left',
    distance: '180px',
    duration: 2500,
    delay: 5
});