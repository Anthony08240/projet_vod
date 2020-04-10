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

<!-- 

include('../include/connectbdd.php');

$pseudo= !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$nom = !empty($_POST['nom_user']) ? $_POST['nom_user'] : NULL;
$prenom = !empty($_POST['prenom_user']) ? $_POST['prenom_user'] : NULL;
$mail = !empty($_POST['mail_user']) ? $_POST['mail_user'] : NULL;
$mdp = !empty($_POST['mdp_user']) ? $_POST['mdp_user'] : NULL;
$type = !empty($_POST['type_user']) ? $_POST['type_user'] : NULL;



$req = $bdd->prepare("SELECT * FROM user 
                       WHERE pseudo = :pseudo AND mail_user = :mail_user ");

$req->execute(array(
    'pseudo' => $pseudo,
    'mail_user' => $mail
    ));

$resultat = $req->fetch();


$count = $req->rowCount();
if($count == 0)
{
$req = $bdd->prepare ("INSERT INTO user (pseudo,nom_user,prenom_user,mail_user,mdp_user,id_typeuser)
VALUES ( :pseudo, :nom_user, :prenom_user, :mail_user, :mdp_user, :type_user )");



$req->execute(array(
'pseudo' => $pseudo,
'nom_user' => $nom,
'prenom_user' => $prenom,
'mail_user' => $mail,
'mdp_user' => $mdp,
'type_user' => $type
));

$req-> closeCursor();
header('location:../index.php'); 

}
else{

    echo "Ce pseudo ou cette adresse mail est déjà utilisé";
    header('location:../inscription.php');
}
-->