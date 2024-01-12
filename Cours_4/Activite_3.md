## Activité 3: [Tri en Javascript](https://www.programiz.com/javascript/online-compiler/)

Implémenter le tri par sélection avec un paramètre supplémentaire nommé "reverse" qui fait un tri décroissant lorsqu'il est égal à `true`.
Ce dernier est égal à `false` par défaut.
Pour faire cela il faut trier en ordre croissant et utiliser la méthode reverse() à la fin *si nécessaire* :

> Pseudo-code :
>
> ```python
> procédure triSelection(tableau t)
> n ← longueur(t)
> pour i de 0 à n - 2
>     min ← i      
>     pour j de i + 1 à n - 1
>         si t[j] < t[min], alors min ← j
>     fin pour
>     si min ≠ i, alors échanger t[i] et t[min]
> fin pour
> fin procédure
> ```

Implémentation en Javascript :

```js
function triSelection(tab, reverse=false) {
    const NB_ELEMENTS = tab.length;

    for (let i = 0; i < NB_ELEMENTS - 1; i++) {
        let min = i;

        for (let j = i + 1; j < NB_ELEMENTS; j++)
            if (tab[j] < tab[min])
                min = j;

        if (min !== i)
            [tab[i], tab[min]] = [tab[min], tab[i]];
    }

    if (reverse)
        tab.reverse();
}
```
