## Activité 2: [Affichage de l'<ins>id</ins> d'un bouton quand il est cliqué](support/cours_5_ex_2.html)

Note : on ne peut pas utiliser de fonction fléchée dans la fonction `click`.

```js
$(document).ready(() => {
    $("#btn-clic-1, #btn-clic-2").click(function () {
        $("p")[0].innerHTML += $(this)[0].id + "<br>";
    });
});
```
