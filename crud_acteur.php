<? include ('include/connect_bdd.php'); ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<center>
  <div class="container">
    <form id="contact">
      <h3><center>affichage des acteur </center></h3>
        <table border="1">
          <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Date de naissance</td>
            <td>Photo</td>
            <td>modifier</td>
            <td>supprimer</td>
          </tr>

          <?php
       $req = $bdd->prepare(" SELECT id_acteur, nom, prenom, date_n, photo  FROM acteur");
       $req ->execute();

       while( $donnees = $req->fetch() ) { ?>

            <tr>
              <td><?= $donnees['id_acteur']; ?></td>
              <td><?= $donnees['nom']; ?></td>
              <td><?= $donnees['prenom']; ?></td>
              <td><?= $donnees['date_n']; ?></td>
              <td><img class="poster-img" img src="<?= $donnees['photo'];?> "height="200px"></td>
              <td><button><a href="form_modifier_acteur.php?id=<?php echo $donnees['id_acteur'];?>" style="color:black;">Modifier</a></button></td>
              <td><button><a href="traitement/supprimer_acteur.php?id=<?php echo $donnees['id_acteur'];?>" style="color:black;">Supprimer</a></button></td>
            </tr>


            <?php
          }
          ?>




        </table>
    </form>
  </div>
</center>
</body>
</html>