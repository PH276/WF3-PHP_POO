<?php
class Vehicule
{
    private $litreEssence;

    public function setLitreEssence($arg)
    {
        $this->litreEssence = $arg;
    }

    public function getLitreEssence()
    {
        return $this->litreEssence;
    }

}

class Pompe
{
    private $litreEssence;

    public function setLitreEssence($arg)
    {
        $this->litreEssence = $arg;
    }

    public function getLitreEssence()
    {
        return $this->litreEssence;
    }

    public function donnerEssence(Vehicule $vehicule)
    {
        $this->litreEssence -= 50;
        $vehicule->setLitreEssence(50);
    }

}

$vehicule1 = new Vehicule;
$pompe1 = new Pompe;

$vehicule1->setLitreEssence(0);

$pompe1->setLitreEssence(800);

$pompe1->donnerEssence($vehicule1);

var_dump($pompe1);
echo '<br>';
var_dump($vehicule1);
