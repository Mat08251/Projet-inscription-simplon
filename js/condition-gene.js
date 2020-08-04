const sr=ScrollReveal();

//Titre haut du formulaire
sr.reveal('h1', {
    scale: 0.8,
    duration: 2500
});

//cards des informations
sr.reveal('.card', {
    delay: 400,
    duration: 2800,
    interval: 500
});

//case à cocher
sr.reveal('.form-check', {
    origin: 'left',
    distance: '250px',
    duration: 2500
});

//Bouton d'envoie
sr.reveal('.bouton-suivant', {
    origin: 'bottom',
    distance: '50px',
    duration: 2800,
    delay: 400
});