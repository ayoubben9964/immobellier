<?php
/*
 * Vue Gestion des annonce
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=, initial-scale=1.0">
   <title>Admin IMMOBELLIER</title>
   <link rel="stylesheet" href="../assets/css/pico.min.css">
   <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
   <main class="container">
      <header class="header">
         <h1>Gestion des annonce</h1>
         <p><a href="../" role="button">Voir Immo</a></p>
         <p><a href="./ajout.php" role="button">Ajouter un annonce</a></p>
         <p><a href="../login/deconnexion.php" role="button">Deconnexion</a></p>
      </header>
         <?php if(count(getAnnonceLimit($limit, $offset)) != 0): ?>
      <table>
         <thead>
            <tr>
               <th>Id</th>
               <th>Title</th>
               <th>description</th>
               <th>type</th>
               <th>price</th>
               <th>surface</th>
               <th>room</th>
               <th>id_user</th>
            </tr>
         </thead>
         <tbody>
         <?php //dd(getArticleLimit($limit, $offset)) ?>
            <?php foreach (getAnnonceLimit($limit, $offset) as $key => $value) : ?>
               <tr>
                  <td><?= $value['id_annonce'] ?></td>
                  <td><?= $value['title'] ?></td>
                  <td><?= substr($value['description'],0,50). " (...)"?></td>
                  <td><?= $value['image'] ?></td>
                  <td><?= $value['type'] ?></td>
                  <td><?= $value['price'] ?></td>
                  <td><?= $value['surface'] ?></td>
                  <td><?= $value['room'] ?></td>
                  <td><?= $value['id_user'] ?></td>
                  <td>
                     <a href="./edit.php?id=<?= $value['id_annonce'] ?>" role="button">Edit</a>
                     <a href="./supp.php?id=<?= $value['id_annonce'] ?>" role="button" onclick="return confirm('Confirmer la suppression de cette annonce ?');">Supprimer</a>
                  </td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
            <?php else: ?>
<p>Aucun annonce !</p>
<?php endif; ?>
   </main>
</body>

</html>
