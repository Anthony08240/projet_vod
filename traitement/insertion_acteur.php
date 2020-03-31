<?php

  include ('../include/connect_bdd.php');

  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
  $date_n = !empty($_POST['date_n']) ? $_POST['date_n'] : NULL;
  $photo = !empty($_POST['photo']) ? $_POST['photo'] : NULL;

  $sql = $bdd->prepare("INSERT INTO acteur ( nom, prenom, date_n, photo, )
                        VALUES ( :nom, :prenom, :date_n, :photo, )");

  $sql->execute(array(
      ":nom" => $nom,
      ":prenom" => $prenom,
      ":date_n" => $date_n,
      ":photo" => $photo
  ));

  $sql-> closeCursor();

  header('location:.../ajout_film.php');

?>
