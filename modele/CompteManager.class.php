<?php
class CompteManager
{
    private $_db;

    // Le constructeur prend en paramettre l'instance PDO
    public function __construct($db)
    {
        $this->_db=$db;
    }

    public function add(Compte $cmpt)
    {
        $resq=$this->_db->prepare("INSERT INTO compte (login,password) VALUES(:login,:password)");
        $resq->execute(array(
            "login"=>$cmpt->getLogin(),
            "password"=>$cmpt->getPwd(),
        ));
    }

    public function get($id)
   {
     $sql=$this->_db->query("SELECT * FROM compte WHERE id=".$id);
     $row=$sql->fetch();
     $sql->closeCursor();
     $cmpt=new Compte($row);
     return $cmpt;
   }

    public function liste()
    {
        $cmpt=[];
        $resq=$this->_db->query('SELECT * FROM compte');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $cmpt[]=new Compte ($donnees);
        }
        return $cmpt;
    }

    public function delete($id)
    {
        $resq=$this->_db->prepare("DELETE FROM compte WHERE id=?");
        $resq->execute(array($id));
    }

    public function update($cmpt)
    { 
                $sql=$this->_db->prepare("UPDATE compte SET login=:login,password=:password WHERE id=:id");
                $sql->execute(array(
                'login'=>$cmpt->getLogin(),
                'password'=>$cmpt->getPwd(),
                'id'=>$cmpt->getId()));  
       }
}

