<?php
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['taille']) && isset($_GET['poids'])) {
    $taille = $_GET['taille'];
    $poids = $_GET['poids'];

    // Calcul de l'IMC
    $imc = $poids / (($taille / 100) * ($taille / 100));

    // Affichage
    echo "<p>Votre Indice de Masse Corporelle (IMC) est : $imc</p>";
}
