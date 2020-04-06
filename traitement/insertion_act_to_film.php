<?php

 include ('../include/connect_bdd.php');

 $id_acteur= !empty($_POST['id_acteur']) ? $_POST['id_acteur'] : NULL;
 $id_film= !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;

  $sql = $bdd->prepare("INSERT INTO joue_dans ( id_acteur, id_film )
                        VALUES ( :id_acteur, :id_film )");

  $sql->execute(array(
      ":id_acteur" => $id_acteur,
      ":id_film" => $id_film
  ));

  header('location:.../ajout_film.php');

?>