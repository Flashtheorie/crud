<?php

require 'credentials.php';


$user = $_GET['id'];

$req = $bdd->prepare("DELETE FROM utilisateurs WHERE id = :id");
$req->bindParam(':id', $user, PDO::PARAM_INT);
$req->execute();

header('Location: index.php');