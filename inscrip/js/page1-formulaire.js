const sr=ScrollReveal();



sr.reveal('.div_formulaire', {
    scale: 0.5,
    duration: 2500
});

sr.reveal('.etape2', {
    origin: 'left',
    distance: '150px',
    duration: 2500,
    delay: 400
});

sr.reveal('label', {
    interval: 500,
    duration: 2500
});

sr.reveal('input', {
    interval: 500,
    duration: 2500
});

sr.reveal('select', {
    
    duration: 2500
});

sr.reveal('.bouton-suivant', {
    origin:'bottom',
    duration: 2800,
    distance: '50px'
});