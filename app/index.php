<?php

if ($_SERVER['REQUEST_URI'] === '/') {
    header('Location: /controllers/classement.php'); // Utiliser un chemin absolu pour éviter des problèmes de redirection
    exit(); 
}
?>