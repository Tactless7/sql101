<?php
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8', 'root', 'root');
$reponse = $bdd->query('SELECT * FROM mes_chaussettes WHERE pointure <= 41 AND couleur = "bleu"');
$donnees = $reponse->fetch();

 ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chaussettes</title>
  </head>
  <body>
      <table>
        <tr>
          <th>id</th>
          <th>pointure</th>
          <th>temp_lavage</th>
          <th>description</th>
          <th>couleur</th>
          <th>date_lavage</th>
        </tr>
        <?php while($donnees = $reponse->fetch()) { ?>
          <tr>
            <td><?= $donnees['id'] ?></td>
            <td><?= $donnees['pointure'] ?></td>
            <td><?= $donnees['temp_lavage'] ?></td>
            <td><?= $donnees['description'] ?></td>
            <td><?= $donnees['couleur'] ?></td>
            <td><?= $donnees['date_lavage'] ?></td>
          </tr>
        <?php }
        $reponse->closeCursor() ?>
      </table>

  </body>
</html>
