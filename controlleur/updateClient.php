<?php
 require_once ("../modele/Connexion.class.php");
 require_once ("../autoload.php");
$db=new Db();
$base=$db->getBase();
$clientManager=new ClientManager($base);

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $valuer=$clientManager->get((int)$id);
}
  
  if (isset($_POST['nom']) and $_POST['prenom'] and $_POST['cnib'] and isset($_POST['id']))
  {
      $clientManager=new clientManager($base);
      $client=new Client($_POST);
      $clientManager->update($client);
      header("location: ../vue/clients.php");
      // print_r($moto);
  }
?>
