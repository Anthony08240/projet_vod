<?php

 include ('../include/connect_bdd.php');

  $pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
  $mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
  $motdepasse = !empty($_POST['motdepasse']) ? $_POST['motdepasse'] : NULL;

  $sql = $bdd->prepare("INSERT INTO utilisateur ( pseudo, mail, motdepasse )
                        VALUES ( :pseudo, :mail, :motdepasse )");

  $sql->execute(array(
      ":pseudo" => $pseudo,
      ":mail" => $mail,
      ":motdepasse" => $motdepasse
  ));

  header('location:.../ajout_film.php');

?>