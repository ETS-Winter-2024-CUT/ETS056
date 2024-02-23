<?php
header("Content-Type: text/html");

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['poids']) && isset($_GET['taille'])) {
    $poids = $_GET["poids"];
    $taille = $_GET["taille"];

    // Calcul de l'IMC
    $imc = $poids / (($taille / 100) * ($taille / 100));

    echo "Votre Indice de Masse Corporelle (IMC) est : $imc";
}
