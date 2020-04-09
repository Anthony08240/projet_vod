<?php

  include ('../include/connect_bdd.php');



    $req = $bdd->prepare(" DELETE FROM realisateur WHERE id_realisateur ='".$_GET['id']."' ");
    $req ->execute(array($_POST['id_realisateur']));
    
    echo 'realisateur Supprimer';

?>
<br><br>
<a href="../crud_realisateur.php">Retour</a>