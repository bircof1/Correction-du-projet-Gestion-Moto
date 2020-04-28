<?php
 require_once ("../modele/Connexion.class.php");
 require_once ("../autoload.php");
$db=new Db();
$base=$db->getBase();
$cmptManager=new CompteManager($base);

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $valuer=$cmptManager->get((int)$id);
}
  
  if (isset($_POST['login']) and $_POST['password'] and isset($_POST['id']))
  {
      $motoManager=new CompteManager($base);
      $cmpt=new Compte($_POST);
      $cmptManager->update($cmpt);
      header("location: compte.php");
  }
?>
