<?php

 include ('../include/connect_bdd.php');

  $pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
  $mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
  $motdepasse = !empty($_POST['motdepasse']) ? $_POST['motdepasse'] : NULL;

  $sql = $bdd->prepare("INSERT INTO utilisateur ( pseudo, mail, motdepasse, id_type )
                        VALUES ( :pseudo, :mail, :motdepasse, :id_type )");

  $sql->execute(array(
      ":pseudo" => $pseudo,
      ":mail" => $mail,
      ":motdepasse" => $motdepasse,
      ":id_type" => 2
  ));

  echo 'vous etes inscrit'

?>
<br><br>
<a href="/projet_vod">retour</a>