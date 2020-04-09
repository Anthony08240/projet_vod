<?php

  include ('../include/connect_bdd.php');



    $req = $bdd->prepare(" DELETE FROM film WHERE id_film ='".$_GET['id']."' ");
    $req ->execute(array($_POST['id_film']));
    
    echo 'Film Supprimer';

?>
<br><br>
<a href="../crud.php">Retour</a>