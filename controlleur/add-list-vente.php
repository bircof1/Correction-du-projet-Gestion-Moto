<?php
  require_once ("../modele/Connexion.class.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $venteManag=new VenteManager($base);
  $list_vente=$venteManag->afficheVente();
  $vente_jr=$venteManag->getToday();

  if (isset($_POST['mot_id']) and $_POST['cli_id'] and $_POST['date_vente'] and $_POST['prix_vente'])
  {
    $venteManag=new VenteManager($base);
    $vente=new Vente($_POST);
    $venteManag->addVente($vente);
    header("location: ventes.php");
  }

  if(isset($_GET['id']))
  {
      $venteManag->delete($_GET['id']);
      header("location: ventes.php");
  }

?>

