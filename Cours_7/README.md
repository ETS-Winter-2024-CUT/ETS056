## Cours 7 : Utilisation de php

## Hello World!

```php
<?php
    echo "Bonjour!";
?>
```

## Sous-programmes

```php
<?php
    function somme($a, $b) {
        return $a + $b;
    }

    // Afficher la somme de 2 et 3
    echo somme(2, 3);
?>
```

## Entrée utilisateur

```php
<?php
    // Saisir string
    echo "Entrez votre nom : ";
    $nom = fgets(STDIN);

    // Saisir string et converti en entier
    echo "Entrez votre age : ";
    $age = intval(fgets(STDIN));

    // Affichage
    echo "Nom : $nom\n";
    echo "Age : $age\n";
?>
```
