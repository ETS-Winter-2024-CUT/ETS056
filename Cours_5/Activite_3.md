## Activité 3: [Affichage du <ins>texte</ins> d'un bouton quand il est cliqué](support/cours_5_ex_3_exo.html)

```js
$(document).ready(() => {
    $(".bloc").click(function () {
        alert(`Vous avez cliqué le bloc ` + $(this)[0].innerText.toLowerCase());
    });
});
```
