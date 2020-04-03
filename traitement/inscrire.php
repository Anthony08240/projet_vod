<?php

 include ('../include/connect_bdd.php');

if(isset($_POST['forminscription']))
{

        $pseudo= !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $mail= !empty($_POST['mail']) ? $_POST['mail'] : NULL;
        $mail2= !empty($_POST['mail2']) ? $_POST['mail2'] : NULL;
        $motdepasse= !empty($_POST['motdepasse']) ? $_POST['motdepasse'] : NULL;
        $motdepasse2= !empty($_POST['motdepasse2']) ? $_POST['motdepasse2'] : NULL;

    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['motdepasse']) AND !empty($_POST['motdepasse2']))
    {
        

        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            if($mail == $mail2)
            {
               

                if($motdepasse == $motdepasse2)
                {
                    $sql = $bdd->prepare("INSERT INTO user ( pseudo, mail, motdepasse )
                    VALUES ( :pseudo, :mail, :motdepasse )");

                    $sql->execute(array(
                    ":pseudo" => $pseudo,
                    ":mail" => $mail,
                    ":motdepasse" => $motdepasse
                    ));
                   $erreur = "votre compte a bien eter crée !";
                }
                else
                {
                    $erreur = "vos mots de passe ne corréspondent pas !";
                }
          
            }
            else
            {
                $erreur = "vos mail ne correspondent pas !";
            }
        }
        else
        {
            $erreur = "votre pseudo ne doit pas dépasser 250 caractères !";
        }
    }
    else
    {
        $erreur = "tout les champs doive etre complétés ! ";
    }
}
      



if(isset($erreur))
{
    echo '<font color="red">' .$erreur. "</font>";
}
 ?>