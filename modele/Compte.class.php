<?php
class Compte
{
    private $id;
    private $login;
    private $pwd;

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
        return $this->id;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getPwd()
    {
        return $this->pwd;
    }

    public function setId($id)
    {
        $this->id=$id;
    }
    public function setLogin($login)
    {
        $this->login=$login;
    }
    public function setPwd($pwd)
    {
        $this->pwd=$pwd;
    }
}    