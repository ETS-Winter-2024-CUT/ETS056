# Activité 2 :

## 1

```php
<?php
    function calcMoyenneAleatoire($borneInf, $borneSup, $n) {
        if ($borneSup < $borneInf) {
            throw new Exception("La borne supérieure est plus petite que la borne inférieure!");
        }

        $somme = 0;

        for ($i = 0; $i < $n; $i++) {
            $somme += rand($borneInf, $borneSup);
        }

        return $somme / $n;
    }

    echo "Entrez la borne inférieure : ";
    $borneInf = intval(fgets(STDIN));

    echo "Entrez la borne supérieure : ";
    $borneSup = intval(fgets(STDIN));

    echo "Entrez le nombre de valeurs : ";
    $nbValeurs = intval(fgets(STDIN));

    echo calcMoyenneAleatoire($borneInf, $borneSup, $nbValeurs);
    echo "\n";
?>
```

## 2

```php
<?php
?>
```

## 3

```php
<?php
    function nFactorielle($x, $n) {
        for ($i = 0; $i < $n; $i++) {
            $fact = 1;

            for ($j = 2; $j <= $x; $j++) {
                $fact *= $j;
            }

            $x = $fact;
        }

        return $x;
    }

    echo nFactorielle(3, 2) . "\n";
?>
```

## 4

```php
<?php
?>
```
