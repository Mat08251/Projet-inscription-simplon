const sr=ScrollReveal();


//Sous titre formulaire
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

//champs du formulaire
sr.reveal('label', {
    interval: 300,
    duration: 2200
});

sr.reveal('input', {
    interval: 300,
    duration: 2200
});

sr.reveal('select', {
    
    duration: 2500
});

//Bouton d'envoie
sr.reveal('.bouton-suivant', {
    origin:'bottom',
    duration: 2800,
    distance: '50px'
});