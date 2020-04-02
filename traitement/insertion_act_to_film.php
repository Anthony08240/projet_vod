<?php

 include ('../include/connect_bdd.php');

 $id_acteur= !empty($_POST['id_acteur']) ? $_POST['id_acteur'] : '1';
 $id_film= !empty($_POST['id_film']) ? $_POST['id_film'] : '1';

  $sql = $bdd->prepare("INSERT INTO joue_dans ( id_acteur, id_film )
                        VALUES ( :id_acteur, :id_film )");

  $sql->execute(array(
      ":id_acteur" => $id_acteur,
      ":id_film" => $id_film
  ));

  $sql-> closeCursor();

  header('location:.../ajout_film.php');

?>