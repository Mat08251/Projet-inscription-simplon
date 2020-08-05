const sr=ScrollReveal();
//Titre formulaire
sr.reveal('.div_formulaire', {
    scale: 0.5,
    duration: 2500
});

//bloc fin inscription utilisateur
sr.reveal('.cadre1', {
    delay: 50,
    duration: 2500,
    scale: 0.6,
    origin: 'bottom',
    distance: '50px'
});

//Botuon d'envoie
sr.reveal('.bouton-renvois', {
    origin: 'bottom',
    distance: '90px',
    opacity: 0.2,
    delay: 100,
    duration: 2500
});