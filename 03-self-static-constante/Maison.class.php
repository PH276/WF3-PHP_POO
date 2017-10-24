<?php
class Maison
{
    public static $espaceTerrain = '500m²';
    public $couleur = 'blanc';
    private static $nbPiece = 7;
    const HAUTEUR = '10m';

    public static function getNbPiece()
    {
        return self::$nbPiece;
    }

}

echo "espace terrain : " . Maison::$espaceTerrain . '<br>';
$maison = new Maison;
echo "couleur : " . $maison->couleur . '<br>';

echo "nb de pièces : " . Maison::getNbPiece() . '<br>';
echo "Hauteur : " . Maison::HAUTEUR . '<br>';
