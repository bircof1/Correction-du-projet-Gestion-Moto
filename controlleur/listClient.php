<?php
  require_once ("../modele/Connexion.class.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $clientManager=new ClientManager($base);
  $listClient=$clientManager->liste();

  if (isset($_POST['nom']) and $_POST['prenom'] and $_POST['cnib'])
  {
    $clientManager=new ClientManager($base);
    $client=new Client($_POST);
    $clientManager->add($client);
    header("location: clients.php");
  }

  if(isset($_GET['id']))
  {
      $clientManager->delete($_GET['id']);
      header("location: ../vue/clients.php");
  }

?>