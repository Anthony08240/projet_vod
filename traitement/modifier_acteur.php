<?php

  include ('../include/connect_bdd.php');


  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
  $date_n = !empty($_POST['date_n']) ? $_POST['date_n'] : NULL;
  $photo = !empty($_POST['photo']) ? $_POST['photo'] : NULL;


  $sql = $bdd->prepare ("UPDATE acteur 
           SET nom = ?, prenom = ?, date_n = ?, photo = ?
           WHERE id_acteur ='".$_GET['id']."' ");
           
  $sql->execute([$nom,$prenom,$date_n,$photo]);

echo 'Modification effectué' 

?>
<br><br>
<a href="../crud_acteur.php">Retour</a>