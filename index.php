<?php
include 'credentials.php';
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
<table class="table-auto text-2xl border border-black bg-white rounded-lg">
  <thead>
    <tr>
      <th class="border border-black p-6 bg-yellow-300">Prénom</th>
      <th class="border border-black p-6 bg-yellow-300">Nom</th>
      <th class="border border-black p-6 bg-yellow-300">Email</th>
      <th class="border border-black p-6 bg-yellow-300">Pseudo</th>
      <th class="border border-black p-6 bg-yellow-300">Modifier</th>
     <th class="border border-black p-6 bg-yellow-300">Delete</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
 // connect to dbb
$req = $bdd->prepare("SELECT * FROM utilisateurs");
$req->execute();
while ($users = $req->fetch(PDO::FETCH_OBJ))
{
    echo "<tr class='border border-black p-6'>";
    echo "<td class='border border-black p-6'>".$users->prenom."</td>";
    echo "<td class='border border-black p-6'>".$users->nom."</td>";
    echo "<td class='border border-black p-6'>".$users->email."</td>";
    echo "<td class='font-bold border border-black p-6'>".$users->pseudo."</td>";
    echo "<td class='border border-black p-6 bg-orange-500'><a class='text-red-200 font-bold ' href='modif.php?id=".$users->id."'>Modifier</a></td>";
    echo "<td class='border border-black p-6 bg-red-500'><a class='text-red-200 font-bold ' href='delete.php?id=".$users->id."'>Delete</a></td>";
    
    echo "</tr>";
}

 ?>  
    
  </tbody>
</table>
<a href="create.php" class="text-3xl font-bold text-blue-500">Ajouter un utilisateur</a>


</div>
</body>
</html>