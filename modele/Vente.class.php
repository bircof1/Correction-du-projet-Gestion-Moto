<?php
class Vente
{
    private $id;
    private $moto;
    private $client; 
    private $date;
    private $prix;

    // Appel du constructeur
 
    public function __construct(array $donnee){

        foreach ($donnee as $key => $value) {
    
            $methode='set'.ucfirst($key);
            
            if((method_exists($this,$methode))){
              $this->$methode($value);
            }
        }
      }
     
    // Liste des getters

    public function getId()
    {
        return $this->id;
    }

    public function getMoto()
    {
        return $this->moto;
    }
    public function getClient()
    {
        return $this->client;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    // Liste des setters

    public function setId($id)
    {
        $this->id=$id;
    }
    public function setMoto($moto)
    {
        $this->moto=$moto;
    }
    public function setClient($client)
    {
        $this->client=$client;
    }
    public function setDate($date)
    {
        $this->date=$date;
    }
    public function setPrix($prix)
    {
        $this->prix=$prix;
    }
}