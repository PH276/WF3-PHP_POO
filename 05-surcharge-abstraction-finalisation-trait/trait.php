<?php
 trait Tpanier
 {
     public $nbProduits = 1;
     public function affichageProduits()
     {
         return 'Affichage des produits.';
     }

     public function affichageMembre()
     {
         return 'Affichage des membres.';
     }

 }

class Site
{
    use TPanier, TMembre;
}

$site = new Site;
echo $site->affichageMembre;
