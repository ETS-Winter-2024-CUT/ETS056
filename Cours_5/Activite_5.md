## Activité 5: [Supprimer un élément lorsqu'il est cliqué](support/cours_5_ex_4_exo.html)

```js
$(document).ready(() => {
    // Créer le nouveau élément
    let nouveauDiv = $("<div class='bloc rouge'></div>");
    let nbBlocsSupprimes = 0;

    // Ajouter le nouveau élément
    $("#btn-ajouter").click(() => {
        $("#panneau-principal").append(nouveauDiv.clone());
    });

    // Supprimer un bloc cliqué
    $("#panneau-principal").on("click", ".bloc", function () {
        $(this).remove();
        alert(`Nombre de blocs supprimés : ${++nbBlocsSupprimes}`);
    });
});
```
