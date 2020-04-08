<? include ('include/connect_bdd.php'); ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="container">
    <form id="contact">
      <h3><center>affichage des films </center></h3>
        <table border="1">
          <tr>
            <td>ID du film</td>
            <td>Nom du film</td>
            <td>Affiche</td>
            <td>Synopsis</td>
            <td>Date de sortie</td>
            <td>Duré</td>
            <td>Note</td>

            <td>modifier</td>
            <td>supprimer</td>
          </tr>

          <?php
       $req = $bdd->prepare(" SELECT id_film, nom, date_sortie, affiche, bande_anonce, synopsis, dure, note  FROM film");
       $req ->execute();

       while( $donnees = $req->fetch() ) { ?>

            <tr>
              <td><?= $donnees['id_film']; ?></td>
              <td><?= $donnees['nom']; ?></td>
              <td><img class="poster-img" img src="<?= $donnees['affiche'];?> "height="200px"></td>
              <td><?= $donnees['synopsis']; ?></td>
              <td><?= $donnees['date_sortie']; ?></td>
              <td><?= $donnees['dure']; ?></td>
              <td><?= $donnees['note']; ?></td>
              <td><button><a href="form_modifier_film.php?id=<?php echo $donnees['id_film'];?>" style="color:black;">Modifier</a></button></td>
              <td><button><a href="form_modifier_film.php?id=<?php echo $donnees['id_film'];?>" style="color:black;">Supprimer</a></button></td>
            </tr>


            <?php
          }
          ?>




        </table>
    </form>
  </div>
</body>
</html>