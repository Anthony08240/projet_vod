
 <!--AFFICHE-->

 <?php include ('../include/connect_bdd.php'); ?>

 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>affiche</title>
 </head>
 <body>


 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>


<div class="center slider">
        <?php
        $req = $bdd->prepare(" SELECT affiche FROM film");
        $req ->execute();

        while( $donnees = $req->fetch() ) {

        ?>

            <a class="link-poster" href=""><img src="<?= $donnees['affiche'];?>"/></a> 

        <?php } ?>
    </div>
 </body>
 </html>