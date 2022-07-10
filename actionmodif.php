<?php
include 'credentials.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);




    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pseudo = $_POST['pseudo'];

    $bdd = new PDO('mysql:host=localhost;dbname=demo_crud','demo_crud','eBWF4kT0(rTKW@vF');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $req = $bdd->prepare("UPDATE utilisateurs SET nom = :nom, prenom = :prenom, email = :email, password = :password, pseudo = :pseudo WHERE email = :pseudo");
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $req->bindParam(':email', $email, PDO::PARAM_STR);
    $req->bindParam(':password', $password, PDO::PARAM_STR);
    $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $req->execute();
    //header('Location: index.php');
    echo "Modification effectuée";

?>