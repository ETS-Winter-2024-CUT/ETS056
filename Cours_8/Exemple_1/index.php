<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours 8 - Exemple 1</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            width: 20px;
            height: 20px;
            text-align: center;
        }
    </style>

</head>

<body>
    <?php
    require_once 'script.php';
    genererTableau(3, 7);
    ?>
</body>

</html>
