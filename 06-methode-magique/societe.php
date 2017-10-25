<?php
/**
 *
 */
class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    function __set($nom, $valeur)
    {
        echo "la propriété $nom n'existe pas ==> $valeur non affectée<br>";
    }

    function __get($nom)
    {
        echo "la propriété $nom n'existe pas ==> non affichable<br>";
    }

    function __call($nom, $arguments)
    {
        echo "la méthode $nom n'existe pas. Les arg étaient ".
        implode(', ', $arguments) . '.';
    }

}

$societe = new Societe;
$societe->ville = 'Paris';
$societe->pays = 'France'; // déclenche __set()

echo $societe->pays; // déclenche __get()

$societe->kjgfn(1, 2, 3); // déclenche __call()
