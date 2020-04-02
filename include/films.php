<!--CATALOGUE FILMS-->

<div class="axeldroite">


    <?php include ('connect_bdd.php'); ?>

    <div class="title-dada-affiche">
        <h2>A l'affiche</h2>
    </div>

    <div class="center slider">

        <?php
       $req = $bdd->prepare(" SELECT id_film, nom, date_sortie, affiche, bande_anonce, synopsis, dure, note  FROM film");
       $req ->execute();

       while( $donnees = $req->fetch() ) { ?>


        <div class="cardaxel">

            <a href="parasite.php?id=<?php echo $donnees['id_film'];?>" class="versfilm">

                <img class="poster-img" img src="<?= $donnees['affiche'];?>" alt="">
                <div class="titrefilm"><?php echo $donnees['nom']; ?></div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p><?php echo $donnees['note']; ?>/5</p>
                        <p><?php echo $donnees['dure']; ?></p>
                    </div>
                </div>
        </div>

    


    <?php } ?>
</div>