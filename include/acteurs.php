<!--Liste acteurs-->

<div class="acteurs-titre">Acteurs</div>
<section class="liste-acteurs">
    <div class="acteur">


<?php
$req = $bdd->prepare(" SELECT nom, prenom, date_n, photo FROM acteur ");
        $req ->execute();

        while( $donnees = $req->fetch() ) { ?>





        <img class="img-acteur" src="<?php echo $donnees['photo']?>" alt="">
        <div><?php echo $donnees['prenom']?> <?php echo $donnees['nom']?></div>

<?php } ?>

</div>


        
</section>