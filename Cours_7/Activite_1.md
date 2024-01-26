# Activité 1 :

```php
<?php
    function formaterDate($jour, $mois, $annee) {
        if ($jour < 1 || $jour > 31) {
            throw new Exception("Nombre de jours invalide");
        }

        if ($mois < 1 || $mois > 12) {
            throw new Exception("Nombre de mois invalide");
        }

        if ($annee < 0) {
            throw new Exception("Année invalide");
        }

        return "$jour/$mois/$annee";
    }

    echo "Entrez le numero du jours : ";
    $jour = intval(fgets(STDIN));

    echo "Entrez le numero du mois : ";
    $mois = intval(fgets(STDIN));

    echo "Entrez l'annee : ";
    $annee = intval(fgets(STDIN));

    echo formaterDate($jour, $mois, $annee);
    echo "\n";
?>
```
