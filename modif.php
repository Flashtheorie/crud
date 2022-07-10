<?php
include 'credentials.php';
$id = $_GET['id'];
$req = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = :id");
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();
$user = $req->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD</title>
</head>
<body class="bg-yellow-200">
<div class="grid h-screen place-items-center">


<form class="space-y-6" action="actionmodif.php" method="POST">
        <div>
          <label for="nom" class="block text-sm font-medium text-gray-700"> Nom </label>
          <div class="mt-1">
            <input value="<?= $user->nom; ?>" id="nom" name="nom" type="text" autocomplete="nom" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="prenom" class="block text-sm font-medium text-gray-700"> Prénom </label>
          <div class="mt-1">
            <input value="<?= $user->prenom; ?>"  id="prenom" name="prenom" type="text" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
          <div class="mt-1">
            <input value="<?= $user->password; ?>" id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
          <div class="mt-1">
            <input value="<?= $user->email; ?>" id="email" name="email" type="email" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="pseudo" class="block text-sm font-medium text-gray-700"> Pseudo </label>
          <div class="mt-1">
            <input value="<?= $user->pseudo; ?>" id="pseudo" name="pseudo" type="text" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>
        

          <div class="text-sm">
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="submit">Modifier l'utilisateur</button>
          <a href="index.php" class="mt-6 text-xl text-blue-500 font-bold">Retour à la liste des utilisateurs</a>
        </div>

        <div>
          
        </div>
      </form>






</div>
</body>
</html>
