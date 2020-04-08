<!--CATALOGUE FILMS-->
<?php include ('connect_bdd.php'); ?>

<div class="axeldroite">

    <?php
       $req = $bdd->prepare(" SELECT id_film, nom, date_sortie, affiche, bande_anonce, synopsis, dure, note  FROM film");
       $req ->execute();

       while( $donnees = $req->fetch() ) { ?>

    <a href="parasite.php?id=<?php echo $donnees['id_film'];?>" class="versfilm">

        <div class="cardaxel">

            <img class="poster-img" img src="<?= $donnees['affiche'];?>" alt="">
            <div class="titrefilm"><?php echo $donnees['nom']; ?></div>
            <div class="infoaxel">
                <div class="textaxel">
                    <p><?php echo $donnees['note']; ?>/5</p>
                    <p><?php echo $donnees['dure']; ?></p>
                </div>
            </div>


        </div>
    </a>
    <?php } ?>

</div>

</div>