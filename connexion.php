<!-- connexion vers la base de données -->

<?php
try {
    // On se connecte à MySQL
    $dbh = new PDO('mysql:host=localhost;port=3308;dbname=weatherapp;charset=utf8', 'root');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}