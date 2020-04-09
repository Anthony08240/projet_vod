<?php

  include ('../include/connect_bdd.php');



    $req = $bdd->prepare(" DELETE FROM acteur WHERE id_acteur ='".$_GET['id']."' ");
    $req ->execute(array($_POST['id_acteur']));
    
    echo 'Acteur Supprimer';

?>
<br><br>
<a href="../crud_acteur.php">Retour</a>