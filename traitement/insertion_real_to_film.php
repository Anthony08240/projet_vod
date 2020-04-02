<?php

 include ('../include/connect_bdd.php');

 $id_realisateur = !empty($_POST['id_realisateur']) ? $_POST['id_realisateur'] : '1';
 $id_film = !empty($_POST['id_film']) ? $_POST['id_film'] : '1';

  $sql = $bdd->prepare("INSERT INTO realise ( id_realisateur, id_film )
                        VALUE ( :id_realisateur, :id_film )");

  $sql->execute(array(
      ":id_realisateur" => $id_realisateur,
      ":id_film" => $id_film
  ));

  $sql-> closeCursor();

  header('location:.../ajout_film.php');

?>