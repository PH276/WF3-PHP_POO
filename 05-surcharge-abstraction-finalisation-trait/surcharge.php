<?php
class A
{
    public function calcul(){
        return 10;
    }
}

class B extends A
{
    $resultat = parrent::calcul();
    return $resultat + 5;
}
