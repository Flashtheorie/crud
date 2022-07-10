<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require '../credentials.php';





$donnees = [ 
    'id'=> 0,
    'nom'=> $_POST['nom'],
    'prenom'=> $_POST['prenom'],
    'email'=> $_POST['email'],
    'password'=> $_POST['password'],
    'pseudo'=> $_POST['pseudo']


      ];

$req = $bdd->prepare("INSERT INTO utilisateurs VALUES (:id, :nom, :prenom, :email, :password, :pseudo)");
$req->bindParam(':id', $donnees['id'], PDO::PARAM_INT);
$req->bindParam(':nom', $donnees['nom'], PDO::PARAM_STR);
$req->bindParam(':prenom', $donnees['prenom'], PDO::PARAM_STR);
$req->bindParam(':email', $donnees['email'], PDO::PARAM_STR);
$req->bindParam(':password', $donnees['password'], PDO::PARAM_STR);
$req->bindParam(':pseudo', $donnees['pseudo'], PDO::PARAM_STR);
$req->execute($donnees);

header('Location: ../index.php');