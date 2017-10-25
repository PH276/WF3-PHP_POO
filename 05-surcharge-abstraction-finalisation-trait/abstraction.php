<?php
abstract class Joueur
{
    public function seConnecter()
    {
        return $this->etreMajeur();
    }

    abstract public function etreMajeur();
    abstract public function devise();
}

class JoueurFR extends Joueur
{
    public function etreMajeur()
    {
        return 18;
    }

    public function devise();
    {
        return '€';
    }

}

class JoueurUS extends Joueur
{
    public function etreMajeur()
    {
        return 21;
    }

    public function devise();
    {
        return '$';
    }

}
