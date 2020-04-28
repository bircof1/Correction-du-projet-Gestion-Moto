<?php
  require_once ("../modele/Connexion.class.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $cmptManager=new CompteManager($base);
  $listCmpt=$cmptManager->liste();

  if (isset($_POST['login']) and $_POST['password'])
  {
    $cmptManager=new CompteManager($base);
    $cmpt=new Compte($_POST);
    $cmptManager->add($cmpt);
    header("location: compte.php");
  }

  if(isset($_GET['id']))
  {
      $cmptManager->delete($_GET['id']);
      header("location: ../vue/compte.php");
  }

?>