<?php

    // Inclure les fonctions de connexion
    require_once("connexionMySQLi.php");
    require_once("connexionPDO.php");

    // Basculer entre MySQLi et PDO
    $bascule = true;

    if ($bascule) {

        // Établir la connexion avec MySQLi
        $conn = connexionMySQLi("localhost", "admin", "admin", "tch056_cours_8b");

        // Arrêter le script si la connexion échoue
        if ($conn == null) {
            die("Connexion échouée avec MySQLi : " . $conn->connect_error);
        } else {
            echo "Connexion réussie avec MySQLi!<br>";
        }

        // Requête SQL
        $requete = "SELECT * FROM utilisateurs";

        // Exécuter la requête
        $resultat = $conn->query($requete);

        // Afficher le nombre de résultats
        echo "Nombre de résultats: " . $resultat->num_rows . "<br>";

        // Afficher les résultats ligne par ligne
        while($ligne = $resultat->fetch_assoc()) {
            echo $ligne["identifiant"] . " " . $ligne["mot_de_passe"] . "<br>";
        }

    } else {

        // Établir la connexion avec PDO
        $conn = new PDO("mysql:host=localhost;dbname=tch056_cours_8b", "admin", "admin");
            
        //
        if ($conn == null) {
            die("Connexion échouée avec PDO : " . $conn->connect_error);
        } else {
            echo "Connexion réussie avec PDO!<br>";
        }

        // Requête SQL
        $requete = "SELECT * FROM utilisateurs";

        // Exécuter la requête
        $resultat = $conn->query($requete);

        // Afficher le nombre de résultats
        echo "Nombre de résultats: " . $resultat->rowCount() . "<br>";

        // Afficher les résultats ligne par ligne
        while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo $ligne["identifiant"] . " " . $ligne["mot_de_passe"] . "<br>";
        }

    }

?>