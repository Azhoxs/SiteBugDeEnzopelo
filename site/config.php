<?php
$servername = "localhost"; // le nom du serveur
$username = "root"; // le nom d'utilisateur
$password = "root"; // le mot de passe
$dbname = "site_maintenance_appli"; // le nom de la base de données

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
