/* envoyé photo dans bdd */

if(iset($_FILES['affiche']) AND !empty($_FILES['affiche']['name']))
{
  $tailleMax = 2097152;
  $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
  if($_FILES['affiche']['size'] <= $tailleMax)
  {
    $extensionUpload = strtolower(subcstr(strrchr($_FILES['affiche']['name'], '.'), 1));
    if(in_array($extensionsUpload, $extensionsValides))
    {
      $chemin = "affiche/".$nom['nom']. ".".$extensionUpload;
      $resultat = move_uploaded_file($FILES['affiche']['tmp_name'], $_chemin);
      if($resultat)
      {
        $updateaffiche = $bdd->prepare('UPDATE affiche SET affiche = :affiche WHERE name = :name');
        $updateaffiche->execute (array(
          'affiche' => $nom['nom']. '.'. $extensionUpload,
          'name' => $nom['nom']
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