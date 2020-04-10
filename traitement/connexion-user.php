<?php

include ('../include/connect_bdd.php');


    $pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
    $motdepasse = !empty($_POST['motdepasse']) ? $_POST['motdepasse'] : NULL;




   $req = $bdd->prepare("SELECT pseudo, motdepasse FROM utilisateur 
                           WHERE pseudo = :pseudo 
                            AND  motdepasse = :motdepasse");

    $req->execute(array(
        'pseudo' => $motdepasse,
        'motdepasse' => $motdepasse
        ));

    $resultat = $req->fetch();

    $count = $req->rowCount();
    if($count > 0)
    {

    
    $_session['id_user'] = $resultat['id_user'];
    $_session['pseudo'] = $pseudo;
    header('location:../index.php'); 
    }






    else{

        echo "problème pseudo, mot de passe ou mail introuvable";
    }
    ?>


<!--


include ('../include/connect_bdd.php');


session_start();  // démarrage d'une session

// on vérifie que les données du formulaire sont présentes
if (isset($_POST['pseudo']) && isset($_POST['motdepasse'])) {

    // cette requête permet de récupérer l'utilisateur depuis la BD
    $requete = "SELECT pseudo, motdepasse, id_type FROM utilisateur WHERE pseudo=? AND motdepasse=?";
    $resultat = $bdd->prepare($requete);
    $pseudo = $_POST['pseudo'];
    $motdepasse = $_POST['motdepasse'];
    $resultat->execute(array($pseudo, $motdepasse ));
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['motdepasse'] = $motdepasse;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }
}
var_dump($pseudo, $motdepasse )


?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Résultat de l'authentification</title>
</head>
<body>
    <h1>Résultat de l'authentification</h1>
    
    if (isset($authOK)) {
        echo "<p>Vous étes connectée</p>";
        echo '<a href="../index.php">Poursuivre vers la page d\'accueil</a>';
    }
    else { ?>
        <p>Vous n'avez pas été reconnu(e)</p>
        <p><a href="../connexion.php">Nouvel essai</p>
    
</body>
</html>


-->