<?php

  include ('../include/connect_bdd.php');

  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $date_sortie = !empty($_POST['date_sortie']) ? $_POST['date_sortie'] : NULL;
  $affiche = !empty($_POST['affiche']) ? $_POST['affiche'] : NULL;
  $synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
  $dure = !empty($_POST['dure']) ? $_POST['dure'] : NULL;
  $note = !empty($_POST['note']) ? $_POST['note'] : NULL;

  $sql = $bdd->prepare("UPDATE film ( nom, date_sortie, affiche, synopsis, dure, note )
                        VALUES ( :nom, :date_sortie, :affiche, :synopsis, :dure, :note )");

  $sql->execute(array(
      ":nom" => $nom,
      ":date_sortie" => $date_sortie,
      ":affiche" => $affiche,
      ":synopsis" => $synopsis,
      ":dure" => $dure,
      ":note" => $note
  ));

  header('location:.../crud.php');

?>
