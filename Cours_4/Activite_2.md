## Activité 2: [Boucles en Javascript](https://www.programiz.com/javascript/online-compiler/)

1. Écrire une fonction nommée `doubleFactorielle` qui reçoit un entier  et qui retourne la double factorielle de ce dernier :

```js
function factorielle(n) {
    let result = 1;

    for (let i = 2; i <= n; i++) {
        result *= i;
    }

    return result;
}

function doubleFactorielle(n) {
    return factorielle(factorielle(n));
}
```

2. Écrire une fonction qui reçoit une borne inférieure et une borne supérieure qui invite l'utilisateur (prompt) à faire une saisie jusqu'à ce qu'il ou elle entre une valeur située entre les bornes inclusives.
Lorsque la valeur est rejetée, afficher un avertissement et relancer l'invitation.
Si l'utilisateur fait plus de 10 essais, quitter la function et retourner null.
Retourner la valeur saisie si elle est valide.

```js
function saisirEntierEntrebornes(borneInf, borneSup) {
    const MAX_TRIES = 10;
    let tries = 0;

    while (tries < MAX_TRIES) {
        let value = prompt(`Entrez une valeur comprise entre ${borneInf} et ${borneSup}`);

        if (value >= borneInf && value <= borneSup)
            return value;

        console.log("Valeur incorrecte!");
        tries++;
    }

    return null;
}
```
