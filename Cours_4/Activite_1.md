## Activité 1: [Fonctions Javascript](https://www.programiz.com/javascript/online-compiler/)

1. Écrire une fonction qui génère un entier aléatoire entre une borne inférieure et une borne supérieure dont la signature est la suivante en utilisant la librairie ***Math*** :

    **Attention**! Si la borne supérieure est plus petite que la borne inférieure, déclencher une erreur avec l'instruction `throw`.

```js
function genererEntierEntreBornes(borneInf, borneSup) {
    if (borneInf  borneSup) {
        throw new Error('Borne supérieure est plus petite que la borne inférieure.');
    }

    return parseInt(Math.random() * (borneSup - borneInf + 1) + borneInf);
 }
```


2. Écrire une fonction qui reçoit un entier entre 1 et 7 qui retourne une chaîne de caractères qui l'associe au nom du jour correspondant (*1 = lundi, 2 = mardi, etc.*) dont la signature est la suivante :

    **Attention**! Si la valeur ne se situe pas entre 1 et 7 inclusivement, retourner la valeur `null`.

```js
function convertirEntierNomJour(valeur) {
    switch (valeur) {
        case 1:
            return "Lundi";
        case 2:
            return "Mardi";
        case 3:
            return "Mercredi";
        case 4:
            return "Jeudi";
        case 5:
            return "Vendredi";
        case 6:
            return "Samedi";
        case 7:
            return "Dimanche";
        default:
            return null;
    }
}
```
