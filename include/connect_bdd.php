<?php
try   {
  $user = "dbu526395";
  $pass = "PaPef:5F";
  // Je me connecte à ma bdd
  $bdd = new PDO('mysql:host=db5000303615.hosting-data.io;dbname=dbs296602;charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}
?>