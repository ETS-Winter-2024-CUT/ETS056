## Activité 4: [Exercice 3 - Convertir en fonctions fléchées](support/cours_5_exo_3.js)

### Partie 1 :

Fonction pour saluer en français.

```js
/**
 * @returns {void}
 */
const direBonjour = () => {
    console.log("Bonjour !");
};
```

### Partie 2 :

Calculer la différence entre deux nombres.

```js
/**
 * @param {number} a - Le premier nombre.
 * @param {number} b - Le deuxième nombre.
 * @returns {number} La différence entre les deux nombres.
 */
const calculerDifference = (a, b) => {
    return a - b;
}
```

### Partie 3 :

Générer une liste de valeurs pseudo-aléatoires.

```js
/**
 * @param {number} x - La valeur initiale de x.
 * @param {number} a - Le coefficient a.
 * @param {number} b - Le coefficient b.
 * @param {number} delta - L'incrément de x à chaque itération.
 * @param {number} taille - La taille de la liste générée.
 * @returns {number[]} La liste aléatoire générée.
 */
const genererListeAleatoire = (x, a, b, delta, taille) => {
    // Initialiser la liste de valeurs aléatoires
    const liste = [];

    // Générer les valeurs aléatoires
    for (let i = 0; i < taille; i++) {
        liste.push(a * Math.sin(x) + b * Math.cos(x));
        x += delta;
    }

    return sequence;
}
```
