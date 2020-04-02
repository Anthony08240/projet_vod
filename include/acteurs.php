<!--Liste acteurs-->

<div class="acteurs-titre">Acteurs</div>
<section class="liste-acteurs">
    


<?php
$req = $bdd->prepare(" SELECT nom, prenom, date_n, photo, id_film FROM acteur NATURAL JOIN joue_dans WHERE id_film ='".$_GET['id']."' ");
        $req ->execute();

        while( $donnees = $req->fetch() ) { ?>



<div class="acteur">

        <img class="img-acteur" src="<?php echo $donnees['photo']?>" alt="">
        <div><?php echo $donnees['prenom']?> <?php echo $donnees['nom']?></div>
        </div>

<?php } ?>



        
</section>