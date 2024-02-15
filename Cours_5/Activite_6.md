## Activité 6: [Changer la couleur d'un élément lorsqu'il est cliqué](support/cours_5_exo_5.html)

```js
$(document).ready(function () {
    // Initialisation des compteurs de blocs
    let compteurBleu = 0,
        compteurRouge = 0;

    // Ajouter un bloc rouge lorsque le bouton est cliqué
    $("#btn-ajouter").click(function () {
        // Ajouter un bloc rouge
        $("#panneau-principal").append("<div class='bloc rouge'></div>");

        compteurRouge++;
        $("#compteur-rouge").text(compteurRouge);
    });

    $("#panneau-principal").on("click", ".bloc", function () {
        $(this).toggleClass("rouge bleu");

        if ($(this).hasClass("rouge")) {
            compteurBleu--;
            compteurRouge++;
        } else if ($(this).hasClass("bleu")) {
            compteurBleu++;
            compteurRouge--;
        } else {
            alert("Mauvaise couleur!" + $(this).attr("class"));
        }

        $("#compteur-rouge").text(compteurRouge);
        $("#compteur-bleu").text(compteurBleu);
    });
});
```
