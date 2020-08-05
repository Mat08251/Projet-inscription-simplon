const sr=ScrollReveal();
//Titre formulaire
sr.reveal('.div_formulaire', {
    scale: 0.5,
    duration: 2500
});

//Numéro étape
sr.reveal('.etape2', {
    origin: 'left',
    distance: '150px',
    duration: 2500,
    delay: 400
});

//cadre question formulaire
sr.reveal('.cadre1', {
    scale: 0.8,
    interval: 500,
    duration: 3000
});


//info fin inscription
sr.reveal('.cadre_inscription_pied_page', {
    scale: 0.8,
    opacity: 0.1,
    duration: 3200,
    delay: 200,
});

//Bouton envoie
sr.reveal('.bouton', {
    origin: 'bottom',
    distance: '80px',
    duration: 2500,
    delay: 500
});