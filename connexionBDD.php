<?php 


//Permet d'afficher les erreurs 
ini_set('display_errors','On');
error_reporting(E_ALL);

// Caracteristiue de la connexion 
$dsn = 'mysql:dbname=formulaire;host=localhost;port=8888;charset=utf8';

//info de connexion 

$user = 'Adriano'; // root
$pwd = 'wzX3e-49QstWhL0N'; //

// Créer la connexion à la BDD

$pdo = new PDO($dsn,$user,$pwd,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Permet d'activer le mode verbeux pour les erreurs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // lire les enregistrement comme un tableau
]);

?>