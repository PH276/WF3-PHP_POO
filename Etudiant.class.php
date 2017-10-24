<?php
class Etudiant
{
  public $prenom;
  public $nom;

 public function __construct($arg)
 {
  echo 'instanciation';
  $this->setPrenom($arg);
 }

  public function setPrenom($arg)
  {
    $this->prenom = $arg;
}

  public function setNom($arg)
  {
    $this->nom = $arg;
  }

  public function getPrenom($arg)
  {
    return $this->prenom;
  }

  public function getNom($arg)
  {
    return $this->nom;
  }

}

$e = new Etudiant('Pascal');

var_dump($e);
