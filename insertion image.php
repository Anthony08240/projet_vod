
affiché la page du id_film

?id=<?php echo $donnee->id_film;?>


  /* envoyé photo dans bdd */

if(isset($_FILES['affiche']) AND !empty($_FILES['affiche']['name']))
{
  $tailleMax = 2097152;
  $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
  if($_FILES['affiche']['size'] <= $tailleMax)
  {
    $extensionUpload = strtolower(substr(strrchr($_FILES['affiche']['name'], '.'), 1));
    if(in_array($extensionUpload, $extensionsValides))
    {
      $chemin = "affiche/".$_SESSION['id']. ".".$extensionUpload;
      $resultat = move_uploaded_file($FILES['affiche']['tmp_name'], $_chemin);
      if($resultat)
      {
        $updateaffiche = $bdd->prepare('UPDATE film SET affiche = :affiche WHERE id = :id');
        $updateaffiche->execute (array(
          'affiche' => $_SESSION['id']. '.'. $extensionUpload,
          'id' => $_SESSION['id']
        ));
      }
      else
      {
        $err ='erreur durant l importation de l affiche';
      }
    }
    else
    {
      $err ='votre affiche doit etre au format jpg, jpeg, gif ou png';
    }
  }
  else
  {
    $err = "votre affiche ne doit pas dépasser 2Mo";
  }

}
if(isset($err))
{
  echo $err;
}



/* 2eme solution*/


if( isset($_POST['affiche']) ) // si formulaire soumis
  {
      $content_dir = 'affiche/'; // dossier où sera déplacé le fichier
   
      $tmp_file = $_FILES['fichier']['tmp_name'];
   
      if( !is_uploaded_file($tmp_file) )
      {
          exit("Le fichier est introuvable");
      }
   
      // on vérifie maintenant l'extension
      $type_file = $_FILES['fichier']['type'];
   
      if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
      {
          exit("Le fichier n'est pas une image");
      }
   
      // on copie le fichier dans le dossier de destination
      $name_file = $_FILES['fichier']['name'];
   
      if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
      {
          exit("Impossible de copier le fichier dans $content_dir");
      }
   
      echo "Le fichier a bien été uploadé";
      // et tu insères en base de données quelque chose du genre :
      // $URL = $content_dir . $name_file;
  }