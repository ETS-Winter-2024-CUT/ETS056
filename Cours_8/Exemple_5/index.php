<?php
// Démarrer la session
session_start();

// Stocker le nombre de visites côté serveur
if (isset($_SESSION['nb_visites'])) {
    $_SESSION['nb_visites']++;
} else {
    $_SESSION['nb_visites'] = 1;
}

// Stocker la date de la dernière visite côté serveur
setcookie('derniere_visite', date('c'), time() + (86400 * 30));

// Stocker le nombre de visites côté client
if (!isset($_COOKIE['nb_visites'])) {
    setcookie('nb_visites', 1, time() + (86400 * 30));
} else {
    setcookie('nb_visites', $_COOKIE['nb_visites'] + 1, time() + (86400 * 30));
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCH056 - Cours 8 - Exemple 4</title>
</head>

<body>
    <p>Exemple de gestion de session</p>
    <p>Nombre de visites : <?php echo $_SESSION['nb_visites']; ?></p>
    <a href="index.php">Rafraîchir</a>

    <?php
    // Afficher le nombre de visites
    if (isset($_COOKIE['nb_visites'])) {
        $cookie = $_COOKIE['nb_visites'];
        $derniere_visite = $_COOKIE['derniere_visite'];

        echo "<p>Cookie : $cookie</p>";
        echo "<p>Votre dernière visite date de : $derniere_visite</p>";
    }
    ?>
</body>

</html>
