<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $erreurs = array();

    // Valider le nom
    if (empty($_POST["nom"]) || is_numeric($_POST["nom"])) {
        $erreurs[] = "Le nom est invalide!";
    }

    // Valider l'age
    if (empty($_POST["age"]) || !is_numeric($_POST["age"])) {
        $erreurs[] = "L'age est invalide!";
    }

    // Afficher le resultat
    if (count($erreurs) == 0) {
        echo "Salut " . $_POST["nom"] . ", tu as " . $_POST["age"] . " ans!\n";
    } else {
        foreach ($erreurs as $erreur) {
            echo "<p style='color:red'" . $erreur . "</p>\n";
        }
    }
}
