'use strict'; 

const SPACE_KEY = 'Space';
const LEFT_ARROW_KEY = 'ArrowLeft';
const RIGHT_ARROW_KEY = 'ArrowRight';
const UP_ARROW_KEY = 'ArrowuP';
const IMG_PATH = 'public/img/carousel/';

let state;
const main = document.querySelector('main')
const btnMenu = document.querySelector('#btnDow')
const btnPrevious = document.querySelector('#btnPrevious')
const btnNext = document.querySelector('#btnNext')
const btnPlay = document.querySelector('#btnPlay')
const btnRandom = document.querySelector('#btnRandom')
const nav = document.querySelector('#navPaly')
const legend = document.querySelector('#legend')
const avis = document.querySelector('#avis')
const img = document.querySelector('#carousel>img')
let imgTxt = '', legendeTxt = '', avisTxt = ''

function onSliderGoToNext() {
    if (state.index === Object.keys(state).length - 2) {
        state.index = 0
        imgTxt = IMG_PATH + state[state.index + 1][0]
        legendeTxt = state[state.index + 1][1]
        avisTxt = state[state.index + 1][2]
        refreshSlider(imgTxt, legendeTxt, avisTxt)
    }
    else {
        imgTxt = IMG_PATH + state[state.index + 1][0]
        legendeTxt = state[state.index + 1][1]
        avisTxt = state[state.index + 1][2]
        refreshSlider(imgTxt, legendeTxt, avisTxt)
    }
    state.index++
}

function onSliderGoToPrevious() {
    if (state.index === 1) {
        state.index = Object.keys(state).length - 2
        imgTxt = IMG_PATH + state[state.index][0]
        legendeTxt = state[state.index][1]
        avisTxt = state[state.index][2]
        refreshSlider(imgTxt, legendeTxt, avisTxt)
    }
    else {
        state.index--
        imgTxt = IMG_PATH + state[state.index][0]
        legendeTxt = state[state.index][1]
        avisTxt = state[state.index][2]
        refreshSlider(imgTxt, legendeTxt, avisTxt)
    }
}

function onSliderGoToRandom() {
    console.log('Run......: onSliderGoToRandom')
    let index;

    //boucle de validation (do while)

    /*
     * Récupération d'un numéro de slide aléatoire différent
     * du numéro de slide actuel.
     */

    // Passage à une slide aléatoire.

    // Mise à jour de l'affichage.

}

function onSliderKeyUp(event) {
    switch(event.code)
   {
       case RIGHT_ARROW_KEY:
       onSliderGoToNext();
       break;

       case SPACE_KEY:
       onSliderToggle();
       break;

       case LEFT_ARROW_KEY:
       onSliderGoToPrevious();
       break;
   }
}

//lance la lecture automatique ou la stop
function onSliderToggle() {
    console.log(state)
    if (state.timer === null) {
        console.log('if........: onSliderToggle')
        state.timer = setInterval(onSliderGoToNext, 2000);
        btnPlay.firstChild.classList.replace("fa-play", "fa-pause")
    }
    else {
        window.clearInterval(state.timer)
        console.log('else........: onSliderToggle')
        btnPlay.firstChild.classList.replace("fa-pause", "fa-play")
        state.timer = null
    }
}

function onToolbarToggle() {
    btnMenu.firstChild.classList.toggle('fa-caret-right');
    btnMenu.firstChild.classList.toggle('fa-caret-left');
    nav.classList.toggle('hide');
    console.log(nav.classList)

}

function refreshSlider(image, legende, avistext) {
    img.src = image
    legend.innerHTML = legende
    avis.innerHTML = avistext
}

document.addEventListener('DOMContentLoaded', function () {
    // Initialisation du carrousel.
    state = {
        '1': ['1.jpg', 'John Doe', 'Après un accident de voiture avec ma femme Jane nous avons décidé de faire appel à JPBC Design pour refaire l\'aménagement de notre cuisine nous sommes ravis du service proposé. Nous avons même fait appel à eux pour notre chambre.'],
        '2': ['2.jpg', 'Bruce Wayne', 'J\'ai fais appel à JPBC Design pour refaire le salon de mon manoir familial vieillissant. Je suis très satisfait de leur prestation. je pense faire appel à eux pour réaménager une grande cave.'],
        '3': ['3.jpg', 'Jane Doe', 'Nous avions déjà fait appel à JPBC Design, Nous avons été très heureux de la qualité de la réalisation pour notre cuisine, c\'est pourquoi nous avons fais de nouveau appel à leur service. La satisfaction est toujours au rendez-vous.'],
        '4': ['4.jpg', 'Clark Kent', 'JPBC Design a sue redonner vie au salon de ma maman. En effet cela faisait depuis ma naissance que des débris de météorite avait saccagé leur petite maison à Smallville. Nous reviendrons vers eux pour le reste de la maison.'],
        '5': ['5.jpg', 'Till Lindemann', 'Je peux enfin me détendre convenablement dans une salle de bain sobre et épuré. merci JPBC Design pour me permettre de décompresser après être resté deux heures à se donner dans un concert pyrotechnique.'],
        '6': ['6.jpg', 'Mme Murphy', 'Je suis un peu déstabilisée depuis le passage de JPBC Design pour le réaménagement de notre cuisine mes enfants, Lex et Tim, ont comme une sensation d\'insécurité. Ils me rapportent des histoires étranges avec des Vélociraptors']
    }
    state.index = 1;
    state.timer = null;
    img.src = IMG_PATH+state[1][0]
    legend.innerHTML = state[1][1]
    avis.innerHTML = state[1][2]

    // Installation des gestionnaires d'évènement. (fonction utilities)

    /*
     * L'évènement d'appui sur une touche doit être installé sur l'ensemble de la
     * page, on ne recherche pas une balise en particulier dans l'arbre DOM.
     *
     * L'ensemble de la page c'est la balise <html> et donc la variable document.
     */

    // Affichage initial.

    /*
    document.addEventListener("keydown", function (e) {
        e.preventDefault()    // vire le comportement par défaut du navigateur
        console.log("event code", e.code) //CELUI-CI 
        console.log("event keyCode", e.keyCode)
        console.log("event key", e.key)
    })
    */
    // let test = document.querySelector("#test")
    // test.addEventListener("click", (e) => {
    //     e.preventDefault();
    //     if (test.innerHTML == "Play") {
    //         test.innerHTML = "Stop"
    //     } else {
    //         test.innerHTML = "Play"
    //     }

    // })

})

btnNext.addEventListener('click', onSliderGoToNext)
btnPrevious.addEventListener('click', onSliderGoToPrevious)
btnPlay.addEventListener('click', onSliderToggle)
document.addEventListener("keyup", onSliderKeyUp)
btnMenu.addEventListener("click", onToolbarToggle)