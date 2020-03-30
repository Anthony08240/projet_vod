<?php

  include ('../include/connect_bdd.php');

  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $date_sortie = !empty($_POST['date_sortie']) ? $_POST['date_sortie'] : NULL;
  $affiche = !empty($_POST['affiche']) ? $_POST['affiche'] : NULL;
  $bande_anonce = !empty($_POST['bande_anonce']) ? $_POST['bande_anonce'] : NULL;
  $synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
  $dure = !empty($_POST['dure']) ? $_POST['dure'] : NULL;

  $sql = $bdd->prepare("INSERT INTO film ( nom, date_sortie, affiche, bande_anonce, synopsis, dure )
                        VALUES ( :nom, :date_sortie, :affiche, :bande_anonce, :synopsis, :dure )");

  $sql->execute(array(
      ":nom" => $nom,
      ":date_sortie" => $date_sortie,
      ":affiche" => $affiche,
      ":bande_anonce" => $bande_anonce,
      ":synopsis" => $synopsis,
      ":dure" => $dure
  ));

  $sql-> closeCursor();

  header('location:.../ajout_film.php');

?>
