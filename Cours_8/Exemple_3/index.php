<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='', initial-scale=1.0">
    <title>Cours 8 - Exemple 3</title>

    <style>
        label,
        input,
        button {
            margin-bottom: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 200px;
        }

        iframe {
            width: 200px;
            box-sizing: border-box;
        }
    </style>

</head>

<body>

    <form action="formulaire.php" method="post" target="resultat">

        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Entrez votre nom" required>

        <label for="age">Age</label>
        <input type="text" name="age" placeholder="Entrez votre age" required>

        <button type="submit">Soumettre</button>

    </form>

    <iframe name="resultat"></iframe>

</body>

</html>
