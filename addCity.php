<?php
    require_once("connexion.php");
    // on place la requête SQL dans une variable
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $city = $_POST['city'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $sql = $dbh->prepare("INSERT INTO meteo (ville, haut, bas) VALUES (?, ?, ?)");
     // on execute la requête
    $sql->execute([$city, $haut, $bas]);

    header("Location: index.php");
    exit;
}
?>

