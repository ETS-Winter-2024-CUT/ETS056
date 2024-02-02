## Activité 1 : Premières requêtes

### Soumettre une requête

Dans [index.html](Exemple_2/index.html), on associe le script [formulaire.php](Exemple_2/formulaire.php) et on specifie les methodes de requête HTTP "**GET**" et "**POST**" :

```html
<form action="formulaire.php" method="GET">
    <button type="submit">GET</button>
</form>
<form action="formulaire.php" method="POST">
    <button type="submit">POST</button>
</form>
```

Et dans [formulaire.php](Exemple_2/formulaire.php), on définit la réaction à la soumission d'un des formulaires en PHP :

```php
<?php
echo "Vous avez fait une requête " . $_SERVER["REQUEST_METHOD"] . "!\n";
?>
```

### Analyser une requête

Dans [index.php](Exemple_3/index.php), on crée un formulaire dans lequel on demande le nom et l'age de l'utilisateur.

```html
<form action="formulaire.php" method="post" target="resultat">

    <label for="nom">Nom</label>
    <input type="text" name="nom" placeholder="Entrez votre nom" required>

    <label for="age">Age</label>
    <input type="text" name="age" placeholder="Entrez votre age" required>

    <button type="submit">Soumettre</button>
</form>

<iframe name="resultat"></iframe>
```

Et dans [formulaire.php](Exemple_3/formulaire.php), on définit la réaction à la soumission du formulaire en PHP :

```php
<?php
echo "Salut " . $_POST["nom"] . ", tu as " . $_POST["age"] . "ans!\n";
```

###
