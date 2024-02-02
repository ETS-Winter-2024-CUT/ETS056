
<?php

    function connexionMySQLi($hostname, $username, $password, $database) {
            
        // Établir la connexion avec MySQLi
        $conn = new mysqli($hostname, $username, $password, $database);

        // Retourner une valeur vide en cas d'écher de connexion
        if ($conn->connect_error) {
            return null;
        }

        return $conn;

    }

?>