/**
 * Fonction pour saluer en français.
 * @function direBonjour
 * @returns {void}
 */
function direBonjour() {
    console.log("Bonjour !");
}

// [EXERCICE 1] Convertir direBonjour en fonction fléchée



/**
 * Calcule la différence entre deux nombres.
 *
 * @param {number} a - Le premier nombre.
 * @param {number} b - Le deuxième nombre.
 * @returns {number} La différence entre les deux nombres.
 */
function calculerDifference(a, b) {
    return a - b;
}

// [EXERCICE 2] Convertir calculerDifference en fonction fléchée



/**
 * Génère une liste de valeurs pseudo-aléatoires.
 *
 * @param {number} x - La valeur initiale de x.
 * @param {number} a - Le coefficient a.
 * @param {number} b - Le coefficient b.
 * @param {number} delta - L'incrément de x à chaque itération.
 * @param {number} taille - La taille de la liste générée.
 * @returns {number[]} La liste aléatoire générée.
 */
function genererListeAleatoire(x, a, b, delta, taille) {

    // Initialiser la liste de valeurs aléatoires
    const liste = [];

    // Générer les valeurs aléatoires
    for (let i = 0; i < taille; i++) {
        liste.push(a * Math.sin(x) + b * Math.cos(x));
        x += delta;
    }

    return sequence;
}

// [EXERCICE 3] Convertir genererListeAleatoire en fonction fléchée



// [EXERCICE 4] Testez vos fonctions fléchées en les appelant ici
