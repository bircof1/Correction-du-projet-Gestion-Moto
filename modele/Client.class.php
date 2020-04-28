<?php
class client
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_cnib;

    public function __construct(array $donnee){

        foreach ($donnee as $key => $value) {
    
            $methode='set'.ucfirst($key);
            
            if((method_exists($this,$methode))){
              $this->$methode($value);
            }
        }
      }

    public function getId()
    {
        return $this->_id;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getCnib()
    {
        return $this->_cnib;
    }

    public function setId($id)
    {
        $this->_id=$id;
    }
    public function setNom($nom)
    {
        $this->_nom=$nom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom=$prenom;
    }
    public function setCnib($cnib)
    {
        $this->_cnib=$cnib;
    }
}    