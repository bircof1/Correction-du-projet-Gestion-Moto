<?php
require_once ("../controlleur/listClient.php");
require_once ("../autoload.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../font/css/bootstrap.min.css">
    <script type="text/javascript" src="../font/js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../font/css/style.css">
    <title>Gestion des motos</title>
</head>
<body>

    <div class="container" id="container">
        <div class="container" id="banniere">
            <div class="div-1">
                <img src="../font/picture/img1.jpg" alt="logo de gauche" class="logo">
            </div>
            <div class="welcom">
                <p>ETABLISSEMENT OUEDRAOGO ET FRERE</p>
                <P>Vente de motos de toutes marques</P>
            </div>

            <div class="div-2">
                <img src="../font/picture/1436_default_1568652221.png" alt="logo de droit" class="logo">
            </div>
            
        </div>
        <div class="bienvenu">GESTION DES CLIENTS</div>
      <div class="global-content">
        <div class="contenu">
        <button type="button" class="deconnect"> <a href="../index.php">Se deconnecter</a> </button>
            <aside class="content-video">
                <h3 id="navig">Menu navigation</h3>
                <h3 id="c3" class="menu-vertic" > <a href="clients.php"> CLIENTS </a></h3>
                <h3 id="c4" class="menu-vertic" > <a href="motos.php"> MOTOS </a></h3>
                <h3 id="c5" class="menu-vertic" > <a href="ventes.php"> VENTES </a></h3>
            </aside> 
            
            <aside class="content-video2">
                <h3 id="navig2">&copy; simplon.co</h3>
                    <p class="menu-vertic2"> <a href="#">www.simplon.co</a> </p>
                    <p class="menu-vertic2"> <a href="#">simpliss@outlook.com</a> </p>
                    <p class="menu-vertic2">Tel: 79 25 42 44</p>
                    <p class="menu-vertic2">Tel: 61 34 65 54</p>
                    <p class="menu-vertic2">Tel: 67 18 60 63</p>
            </aside> 
        </div>
          <div class="global-page">
            
                       <div class="c-table">
                       <div class="sms">LISTE DE TOUTES LES CLIENTS</div>
                           <table class="table table-bordered">
                              <thead>
                                <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Nom</th>
                                  <th id="colone" scope="col">Prenom</th>
                                  <th id="colone" scope="col">CNIB</th>
                                  <th id="colone" scope="col">Edit</th>
                                  <th id="colone" scope="col">Delete</th>
                                  <th id="colone" scope="col">Detail</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              <tr>             
                                       <?php    
                                       foreach($listClient as $key => $value) {
                                       ?>
                                         <tr>
                                            <td id="colone"><?=$key+1?></td>
                                            <td id="colone"><?=$value->getNom()?></td>
                                            <td id="colone"><?=$value->getPrenom()?></td>
                                            <td id="colone"><?=$value->getCnib()?></td>
                                            <td id="colone"><a href="updateClient.php?id=<?= $value->getId()?>" type="button" id="edit"> Editer </a></td>
                                            <td id="colone"><a href="clients.php?id=<?= $value->getId()?>" type="button" id="del"> delete </a></td>
                                            <td id="colone"><a href="detailClient.php?id=<?= $value->getId()?>"  type="button" id="det"> Detail </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                              </tbody>
                            </table>
                            <p>TOTAL: <?php echo count($listClient)?></p>

                            <!-- <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(5)">Nouveau</button>
                            </div> -->

                        </div>
                        
                   </div>

                   <div class="cache" id="formulaire">
                   <div class="c-table">
                       <div class="sms">FORMULAIRE D'INSERTION DES CLIENTS</div>

                       <form action="" method="post" enctype="multipart/form-data"> 
                       <div class="row">
                              <div class="col">
                              <input type="text" class="form-control" name="nom" placeholder="Nom" required ="required">
                               
                              </div>
                              <div class="col">
                              <input type="text" class="form-control" name="prenom" placeholder="Prénom" required ="required">
                                
                            </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                              <input type="text" class="form-control" name="cnib" placeholder="CNIB" required ="required">
                              </div>
                            </div><br>
                            <div class="panel-footer">
                                <input type="submit" class="btn btn-success pull-right btn" value='Enregistrer'>
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(1)">Fermer</button>
                            </div>
                         </form>

                        </div>
                   </div>
            </div>
            
            <div class="cache" id="modifer">
                   <div class="c-table">
                       <div class="sms">FORMULAIRE DE MODIFICATION</div>

                       <form action="#"method="post" enctype="multipart/form-data"> 
                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" name="nom" placeholder="nom" required ="required">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" name="prenom" placeholder="Pénom" required ="required">
                            </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" name="cnib" placeholder="CNIB" required ="required">
                              </div>
                            <div class="row">
                         </form>

                            <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn">Modifier</button>
                                <button type="button" class="btn btn-success pull-right btn"onclick="afficher(1)">Fermer</button>
                            </div>

                        </div>
                   </div>

            </div>
      </div>
    </div>
    <script src="../font/js/script.js" type="text/javascript" charset="utf-8">
          
    </script>
</body>
</html>