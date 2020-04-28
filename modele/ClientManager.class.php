<?php
class clientManager
{
    private $_db;

    // Le constructeur prend en paramettre l'instance PDO
    public function __construct($db)
    {
        $this->_db=$db;
    }
    public function add(Client $client)
    {
        $resq=$this->_db->prepare("INSERT INTO client(nom,prenom,cnib) VALUES(:nom,:prenom,:cnib)");
        $resq->bindValue(':nom', $client->getNom());
        $resq->bindValue(':prenom', $client->getPrenom());
        $resq->bindValue(':cnib', $client->getCnib());
        $resq->execute();
    }

    public function get($id)
   {
     $sql=$this->_db->query("SELECT * FROM client WHERE id=".$id);
     $row=$sql->fetch();
     $sql->closeCursor();
     $clients=new Client($row);
     return $clients;
   }

    public function liste()
    {
        $client=[];
        $resq=$this->_db->query('SELECT * FROM client ORDER BY nom');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $client[]=new Client ($donnees);
        }
        return $client;
    }

    public function delete($id)
    {
        $resq=$this->_db->prepare("DELETE FROM client WHERE id=?");
        $resq->execute(array($id));
    }

    public function update($client)
    { 
                $sql=$this->_db->prepare("UPDATE client SET nom=:nom,prenom=:prenom,cnib=:cnib WHERE id=:id");
                $sql->execute(array('nom'=>$client->getNom(),
                'prenom'=>$client->getPrenom(),
                'cnib'=>$client->getCnib(),
                'id'=>$client->getId()));  
       }
}

