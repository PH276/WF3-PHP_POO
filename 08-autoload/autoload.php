<?php

function inclusionAutomatique($nomDeLaclass)
{
    include_once($nomDeLaclass.'.class.php');
    echo 'On passe ds inclusionAutomatique/<br>';
    echo 'require($nomDeLaclass.class.php);<hr>';
}

spl_autoload_register('inclusionAutomatique');

// permet d'éxécuter un fn lorsque l'interpréteur voit passer un "new" ds le code. Le nom à dte du "new" (nom de la class) est passé automatiquement en argument à cette fonction
$a= new A;
$b= new B;
$c= new C;
$d= new D;
