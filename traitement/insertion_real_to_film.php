<?php

 include ('../include/connect_bdd.php');

 $id_realisateur= !empty($_POST['id_realisateur']) ? $_POST['id_realisateur'] : NULL;
 $id_film= !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;

  $sql = $bdd->prepare("INSERT INTO realise ( id_realisateur, id_film )
                        VALUES ( :id_realisateur, :id_film )");

  $sql->execute(array(
      ":id_realisateur" => $id_realisateur,
      ":id_film" => $id_film
  ));

  header('location:.../ajout_film.php');

?>