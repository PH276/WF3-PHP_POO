<?php
class Animal
{

    protected function deplacemant()
    {
        return  'Je me déplace <br>';
    }

    public function manger()
    {
        return 'Je mange chaque jour.<br>';
    }

    public function connexion()
    {
        return 'Je me connecte. <br>';
    }


}

class Elephant extends Animal
{

    public function quiSuisJe()
    {
        return 'Je suis un éléphant <br>';
    }


}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return 'Je suis un chat <br>';
    }

    public function manger()
    {
        return 'Je mange comme un chat.<br>';
    }


}

$eleph = new Elephant();
echo 'Eléphant  : ' . $eleph->manger();
echo 'Eléphant  : ' . $eleph->quiSuisJe();
echo '<hr>';

$chat = new Chat();
echo 'Chat  : ' . $chat->manger();
echo 'Chat  : ' . $chat->quiSuisJe();
echo '<hr>';
