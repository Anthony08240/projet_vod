
 <!--AFFICHE-->

 <?php include ('connect_bdd.php'); ?>

 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>


<div class="center slider">
        <?php
        $req = $bdd->prepare(" SELECT id_film, affiche FROM film");
        $req ->execute();

        while( $donnees = $req->fetch() ) { ?>
            <a class="link-poster" href="parasite.php?id=<?php echo $donnees['id_film'];?>"><img src="<?= $donnees['affiche'];?>" alt=""></a>
        <?php } ?>
    </div>