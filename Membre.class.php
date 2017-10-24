<?php
class Membre
{
    private $prenom;
    private $nom;

    public function __construct($prenom, $nom)
    {
        echo 'instanciation';
        $this->setPrenom($prenom);
        $this->setNom($nom);
    }

    public function setPrenom($arg)
    {
        $this->prenom = $arg;
        
    }

    public function setNom($arg)
    {
        $this->nom = $arg;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

}

$moi = new Membre('Pascal', 'HUITOREL');
var_dump($moi);

echo '<br>';
echo $moi->getPrenom().'<br>';
echo $moi->getNom().'<br>';
