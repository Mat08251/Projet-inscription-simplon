const sr=ScrollReveal();
//Titre du formulaire
sr.reveal('.div_formulaire', {
    scale: 0.5,
    duration: 2500
});

//Numéro de l'étape
sr.reveal('.etape2', {
    origin: 'left',
    distance: '150px',
    duration: 2500,
    delay: 400
});

//cards des questions du formulaire
sr.reveal('.cadre1', {
    scale: 0.8,
    interval: 500,
    duration: 3000
});


//Bouton d'envoie
sr.reveal('.bouton', {
    origin: 'bottom',
    duration: 2800,
    distance: '50px',
    delay: 400
});