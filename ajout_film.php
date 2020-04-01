<?php
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un film</title>

    <link rel="stylesheet" href="css/reset.css">
    
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />

    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Bellota+Text:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700,800,900|Quicksand:300,400,500,600,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body>

<?php 
include 'include/nav.php'; ?>


  <!-- zone de connexion -->

    <div id="container">
      

        <form action="traitement/insertion_film.php" method="POST">
            <h2>Ajouter un Film</h2>

            <label><b>Nom Du Film</b><br></label>
            <input class="login" type="text" placeholder="Nom Du Film" name="nom" required autofocus> <br>

            <label><b>Date De Sortie</b><br></label>
            <input class="login" type="date" placeholder="Date De Sortie" name="date_sortie" required> <br>

            <label><b>Synopsis</b><br></label>
            <input class="login"  type="text" placeholder="Synopsis" name="synopsis" required><br>

            <label><b>Durée</b><br></label>
            <input class="login"  type="time" placeholder="Dure" name="dure" required><br>

            <label><b>Note</b><br></label>
            <input class="login"  type="text" placeholder="note de 1 à 5" name="note"><br>

            <label><b>bande anonce</b><br></label>
            <input class="login"  type="text" placeholder="Lien de la video" name="bande_anonce"><br>

            <label><b>affiche</b><br></label>
            <input class="login"  type="text" placeholder="url de l'affiche" name="affiche"><br>

            <input  class="ok" type="submit" id='submit' value='AJOUTER'> <br>


        </form>
    </div>

<!-- ajout acteur-->


<div id="container">
  <form id="contact" action="traitement/insertion_acteur.php" method="post">
    <h2><center>Ajouter un acteur</center></h2>
    <fieldset>
    <b>nom de l'acteur</b><br>
      <input placeholder="nom de l'acteur" name="nom" type="text" required>
    </fieldset><br><br>
    <fieldset>
    <b>prenom de l'acteur</b><br>
      <input placeholder="Prenom de l'acteur" name="prenom" type="text" required>
    </fieldset><br><br>
    <fieldset>
    <b>date de naissance</b><br>
      <input placeholder="Date de Naissance" name="date_n" type="date" required>
    </fieldset><br><br>
    <fieldset>
    <b>photo de l'acteur</b><br>
      <input placeholder="url De La Photo" name="photo" type="text" required>
    </fieldset><br><br>
    <fieldset>
           <select  name="id_cinema" required >
            <?php
                include ('include/connect_bdd.php');

                $req = $bdd->prepare(" SELECT id_film, nom FROM film ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option value="<?= $donnees['id_film']; ?>"> Nom Du Film : <?= $donnees['nom']; ?> </option>


              <?php  }

             ?>





            </select>
    </fieldset><br><br>
    <fieldset>
      <button class="ok" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>


<!-- ajout realisateur-->


<div id="container">
  <form id="contact" action="traitement/insertion_real.php" method="post">
    <h2><center>Ajouter un realisateur</center></h2>
    <fieldset>
    <b>nom du realisateur</b><br>
      <input placeholder="nom de l'acteur" name="nom" type="text" required>
    </fieldset><br><br>
    <fieldset>
    <b>prenom du realisateur</b><br>
      <input placeholder="Prenom de l'acteur" name="prenom" type="text" required>
    </fieldset><br><br>
    <fieldset>
    <b>date de naissance</b><br>
      <input placeholder="Date de Naissance" name="date_n" type="date" required>
    </fieldset><br><br>
    <fieldset>
    <b>photo du realisateur</b><br>
      <input placeholder="url De La Photo" name="photo" type="text" required>
    </fieldset><br><br>
    <fieldset>
           <select  name="id_cinema" required >
            <?php

                $req = $bdd->prepare(" SELECT id_film, nom FROM film ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option value="<?= $donnees['id_film']; ?>"> Nom Du Film : <?= $donnees['nom']; ?> </option>


              <?php  }

             ?>





            </select>
    </fieldset><br><br>
    <fieldset>
      <button class="ok" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<?php 
include 'include/footer.php'; ?>


<?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Un problème est survenue</p>";
            }
            ?> 
</body>
</html>