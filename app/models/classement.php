<?php
    function displayClassement(){
        include('../models/configuration.php');
        
        $requete = $bdd->query('SELECT nom,ca,taux_atteinte FROM users');
        if (!$requete) {
            die("Query failed: " . $bdd->error);
        }
        
        // Fetch all results
        $reponse = $requete->fetch_all(MYSQLI_ASSOC);
        return $reponse;
    }


?>