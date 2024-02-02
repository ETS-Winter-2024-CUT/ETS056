<?php

    // Basculer entre MySQLi et PDO
    $bascule = true;

    if ($bascule) {

        // Paramètres de connexion à la base de données
        $hostname = "localhost";
        $username = "admin";
        $password = "admin";
        $database = "tch056_cours_8b";

        // Établir la connexion avec MySQLi
        $conn = new mysqli($hostname, $username, $password, $database);

        // Arrêter le script si la connexion échoue
        if ($conn->connect_error) {
            die("Connexion échouée: " . $conn->connect_error);
        }

        // Afficher un message si la connexion est réussie
        echo "Connexion réussie avec MySQLi!";

    } else {

        // Paramètres de connexion à la base de données
        $hostname = "localhost";
        $username = "admin";
        $password = "admin";
        $database = "tch056_cours_8b";

        try {

            // Établir la connexion avec PDO
            $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
            
            // Activer le mode d'erreur
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Afficher un message si la connexion est réussie
            echo "Connexion réussie avec PDO!";

        } catch(PDOException $e) {

            // Arrêter le script si la connexion échoue
            die("Connexion échouée: " . $e->getMessage());
        
        }

    }

?>