<?php
require 'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=mon_armoire;charset=utf8');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
$reponse = ORM::for_table('mes_chaussettes')->where_gt('pointure', 40)->find_many();

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
        <?php foreach ($reponse as $value) : ?>
          <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['pointure'] ?></td>
            <td><?= $value['temp_lavage'] ?></td>
            <td><?= $value['description'] ?></td>
            <td><?= $value['couleur'] ?></td>
            <td><?= $value['date_lavage'] ?></td>
          </tr>
        <?php endforeach ?>
      </table>

  </body>
</html>
