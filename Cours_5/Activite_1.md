## Activité 1: [Utilisation de jQuery](support/cours_5_ex_1_exo.html)

Solution du professeur :

```js
$(document).ready(() => {
    // 1. Récupérer tous les paragraphes
    const paragraphes = $("p");

    // 2. Pour chaque paragraphe
    for (let p of paragraphes) {
        //   2.1. Récupérer le texte
        let texte = p.innerText;

        //   2.2. Transformer le texte en tableau (eval)
        let tableau = eval(texte);

        //   2.3. Calculer la somme des éléments du tableau
        let somme = 0;

        for (element of tableau)
            somme += element;

        //   2.4. Habiller le texte et ajouter la somme
        p.innerText = `Somme(${texte}) = ${somme}`;
    }
});
```
> Temps d'execution: 0.129150390625 ms

Solution alternative :

```js
$(document).ready(() => {
    // 1. Récupérer tous les paragraphes
    // 2. Pour chaque paragraphe
    $("p").each((_, paragraphe) => {
        // 2.1. Récupérer le texte
        let texte = paragraphe.innerText;

        // 2.3. Calculer la somme des éléments du tableau
        let somme = eval(texte.replace(/,/g, "+"));

        // 2.4. Habiller le texte et ajouter la somme
        paragraphe.innerText = `Somme(${texte}) = ${somme}`;
    });
});
```
> Temps d'execution: 0.12890625 ms
