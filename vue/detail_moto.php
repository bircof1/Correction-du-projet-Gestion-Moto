<?php
require_once ("../controlleur/update-moto.php");
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
        <div class="bienvenu">GESTION DES MOTOS</div>
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
            
                   <div class="cache" id="modifer">
                   <div class="c-table">
                   <div class="sms"> DETAIL DE MOTO N° <?= $valuer->getId()?> </div>
                   <label class="p_detail">Marque:</label> <span class="p_detail2"> <?= $valuer->getMarque()?> </span> <br>
                   <label class="p_detail">Cathegorie:</label> <span class="p_detail2"><?= $valuer->getCathegorie()?></span> <br>
                   <label class="p_detail">Modele:</label><span class="p_detail2"> <?= $valuer->getModel()?> </span>  <br>
                   <label class="p_detail">Cylindre:</label> <span class="p_detail2"> <?= $valuer->getCylindre()?> </span>  <br>
                   <label class="p_detail">N° de serie:</label><span class="p_detail2"> <?= $valuer->getNumero_seri()?> </span>  <br>
                   <label class="p_detail">Prix d'achat:</label><span class="p_detail2"> <?= $valuer->getPrix()?> </span>  <br>
                            
                            <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn"> <a href="motos.php">Fermer</a> </button>
                            </div>

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