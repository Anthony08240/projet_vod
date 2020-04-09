
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un realisateur</title>

</head>

<body>

    <body>


        <!-- modifier un realisateur -->

        <div id="container">

            <?php
    include ('include/connect_bdd.php');


$req = $bdd->prepare(" SELECT id_realisateur, nom, prenom, date_n, photo FROM realisateur WHERE id_realisateur ='".$_GET['id']."'");
$req ->execute();

while( $donnees = $req->fetch() ) { ?>

<center>
            <form action="traitement/modifier_realisateur.php?id=<?php echo $donnees['id_realisateur'];?>" method="POST" >
                <h2>Modifier un realisateur</h2>

                <label><b>Nom</b><br><br></label>
                <input type="text" value="<?php echo $donnees['nom']?>" name="nom" autofocus> <br><br>

                <label><b>Prenom</b><br><br></label>
                <input type="text" value="<?php echo $donnees['prenom']?>" name="prenom"> <br><br>

                <label><b>Photo</b><br><br></label>
                <input type="text" value="<?php echo $donnees['photo']?>" name="photo"> <br><br>

                <label><b>Date de naissance</b><br><br></label>
                <input type="date" value="<?php echo $donnees['date_n']?>" name="date_n"><br><br><br><br>

                <input class="ok" type="submit" id='submit' value='MODIFIER'> <br><br>


            </form>
</center>
<?php } ?>
        </div>

    </body>

</html>