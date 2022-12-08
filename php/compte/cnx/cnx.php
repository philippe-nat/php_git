<?php
$dsn = 'mysql:host=localhost;port=3306;dbname=test;charset=utf8';
$user = 'root';
$password = '';

try {
    $cnx = new PDO($dsn, $user, $password);
    echo 'connexion effectuée';
} catch (PDOException $e) {
    echo 'Erreur PDO ' . $e->getMessage();
    error_log($e->getMessage());
}