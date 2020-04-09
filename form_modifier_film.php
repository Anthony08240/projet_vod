
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un film</title>

</head>

<body>

    <body>


        <!-- modifier un film -->

        <div id="container">

            <?php
    include ('include/connect_bdd.php');


$req = $bdd->prepare(" SELECT id_film, nom, date_sortie, affiche, bande_anonce, synopsis, dure, note FROM film WHERE id_film ='".$_GET['id']."'");
$req ->execute();

while( $donnees = $req->fetch() ) { ?>

<center>
            <form action="traitement/modifier_film.php?id=<?php echo $donnees['id_film'];?>" method="POST" >
                <h2>Modifier un Film</h2>

                <label><b>Nom Du Film</b><br><br></label>
                <input type="text" value="<?php echo $donnees['nom']?>" name="nom" autofocus> <br><br>

                <label><b>Date De Sortie</b><br><br></label>
                <input type="date" value="<?php echo $donnees['date_sortie']?>" name="date_sortie"> <br><br>

                <label><b>Synopsis</b><br><br></label>
                <input type="text" value="<?php echo $donnees['synopsis']?>" name="synopsis"><br><br>

                <label><b>Durée</b><br><br></label>
                <input type="time" value="<?php echo $donnees['dure']?>" name="dure"><br><br>

                <label><b>Note</b><br><br></label>
                <input type="text" value="<?php echo $donnees['note']?>" name="note"><br><br>

                <label><b>affiche</b><br><br></label>
                <input type="text" value="<?php echo $donnees['affiche']?>" name="affiche"><br><br><br><br>

                <input class="ok" type="submit" id='submit' value='MODIFIER'> <br><br>


            </form>
</center>
<?php } ?>
        </div>

    </body>

</html>