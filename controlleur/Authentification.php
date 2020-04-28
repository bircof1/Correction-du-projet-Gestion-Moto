<?php 
require_once ("/modele/login.class.php");
// require_once ("../autoload.php");
$rep=verif();
if($rep=='ok')
{
    header("location: vue/acceuil.php");
}

 else {
 $erreur=$rep; 
 echo $erreur;
}
?> 
