<?php
final class Application
{

    public function launchApp()
    {
        return "l'appllication s'est lancée.":
    }
}

//class Extension extends Application{} // Erreur -> non extensible
    $app = new Application; // class instanciable

    echo $app->launchApp();

    class App
    {

        final public function launchApp()
        {
            return "l'appllication se lance.":
        }
    }

class Extension2 extends App
{

    public function launchApp() // erreur (ne peutt pas surchargé)
    {
        //bla bla bla bla bla 
    }

}
