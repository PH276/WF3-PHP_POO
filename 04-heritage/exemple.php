<?php
class Membre
{
    public $id = 15;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo 'Internaute créé <br>';
    }

    public function inscription()
    {
        return 'Je m\'inscris.<br>';
    }

    public function connexion()
    {
        return 'Je me connecte. <br>';
    }


}

class Admin extends Membre
{
    public function accessBackOffice()
    {
        return 'Accès back office <br>';
    }


}

$admin = new Admin();
echo $admin->connexion();
echo $admin->accessbackOffice();
echo $admin->id;
