<?php

function genererTableau($nbLignes, $nbColonnes)
{
    // Déclaration de la table
    echo "<table>";

    // Initialisation du compteur
    $compteur = 1;

    for ($i = 0; $i < $nbLignes; $i++) {
        echo "<tr>";

        for ($j = 0; $j < $nbColonnes; $j++) {
            echo "<td>$compteur</td>";
            $compteur++;
        }

        echo "</tr>";
    }
}
