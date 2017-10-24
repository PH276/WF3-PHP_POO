<?php
class Panier
{
  public $nbProduits;

  public function ajouterArticle()
    {
    return 'L\'article a été ajouté';
  }

  public function retirerArticle()
  {
    return 'L\'article a été retiré';
  }

  public function afficherArticle()
  {
    return 'Voici les articles : ';
  }
}


$panier1 = new Panier;

echo '<pre>';
var_dump ($panier1);
echo '</pre>';

$panier1->nbProduits = 5;

echo '<pre>';
var_dump ($panier1) ;
echo '</pre>';

echo $panier1->afficherArticle();

$panier2 = new Panier;
$panier2->nbProduits = 5;

echo '<pre>';
var_dump ($panier2) ;
echo '</pre>';
