 <!--REAL BA-->

 <div class="real-real">Réalisateur</div>

<div class="real-ba">


    

    <div class="real">
    <?php
$req = $bdd->prepare(" SELECT nom, prenom, date_n, photo, id_film FROM realisateur NATURAL JOIN realise  WHERE id_film ='".$_GET['id']."' ");
        $req ->execute();

        while( $donnees = $req->fetch() ) { ?>
        <div class="img-real">

            <img src="<?php echo $donnees['photo']?>" alt="">
            <div><?php echo $donnees['prenom']?> <?php echo $donnees['nom']?></div>

        
        </div>
        <?php } ?>
   
    </div>

    <div class="ba-yt">
    <?php
    $req = $bdd->prepare(" SELECT bande_anonce, id_film FROM film WHERE id_film ='".$_GET['id']."' ");
        $req ->execute();

        while( $donnees = $req->fetch() ) { ?>


            <?php echo $donnees['bande_anonce']; ?>
        <?php } ?>
    </div>

</div>
