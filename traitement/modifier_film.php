<?php

  include ('../include/connect_bdd.php');


  $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $date_sortie = !empty($_POST['date_sortie']) ? $_POST['date_sortie'] : NULL;
  $affiche = !empty($_POST['affiche']) ? $_POST['affiche'] : NULL;
  $synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
  $dure = !empty($_POST['dure']) ? $_POST['dure'] : NULL;
  $note = !empty($_POST['note']) ? $_POST['note'] : NULL;


  $sql = $bdd->prepare ("UPDATE film 
           SET nom = ?, date_sortie = ?, affiche = ?, synopsis = ?, dure = ?,note = ?
           WHERE id_film ='".$_GET['id']."' ");
           
  $sql->execute([$nom,$date_sortie,$affiche,$synopsis,$dure,$note]);

echo 'Modification effectué' 

?>
<br><br>
<a href="../crud.php">Retour</a>