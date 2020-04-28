<?php
class VenteManager
{
    private $_db;
 
    // Le constructeur prend en paramettre l'instance PDO
    public function __construct($db)
    {
        $this->_db=$db;
    }

    public function addVente(Vente $vente)
    {
        $resq=$this->_db->prepare("INSERT INTO vente (mot_id,cli_id,date_vente,prix_vente) VALUES(:mot_id,:cli_id,:date_vente,:prix_vente)");
        $resq->bindValue(':mot_id', $vente->getMoto());
        $resq->bindValue(':cli_id', $vente->getClient());
        $resq->bindValue(':date_vente', $vente->getDate());
        $resq->bindValue(':prix_vente', $vente->getPrix());
        $resq->execute();
    }

    public function get($id)
   {
     $sql=$this->_db->query("SELECT * FROM vente WHERE id=".$id);
     $row=$sql->fetch();
     $sql->closeCursor();
     $vent=new Vente($row);
     return $vent;
   }

    public function afficheVente()
    {
        $moto=[];
        $resq=$this->_db->query('SELECT * FROM vente ORDER BY mot_id');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $vent[]=new Vente ($donnees);
        }
        return $moto;
    }

    public function getToday()
    {
        $moto=[];
        $vent=[];
        $resq=$this->_db->query("SELECT * FROM vente WHERE date_vente=(SELECT current_date)");
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $vent[]=new Vente ($donnees);
        }
        return $vent;
    }

    public function delete($id)
    {
        $resq=$this->_db->exec("DELETE * FROM vente WHERE id=".$id);
        return $resq>0;
    }

    public function update(Vente $vent)
    {
         try{ 
                $sql=$this->_db->prepare('UPDATE vente SET mot_id=:mot_id,cli_id=:cli_id,date=:date,prix=:prix WHERE id=:id');
                $d=$sql->execute(array('mot_id'=>$vent->getMoto(),
                'cli_id'=>$vent->getClient(),
                'date'=>$vent->getDate(),
                'prix'=>$vent->getPrix(),
                'id'=>$vent->getId()
              ));  
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
       }
}

