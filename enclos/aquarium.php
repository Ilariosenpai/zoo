<?php

class Aquarium extends Enclos{

    private $eau;

    public function __construct($nom, $propre, $animalsinside, $eau)
    {
        parent::__construct($nom, $propre, $animalsinside);
        $this->eau = $eau;
    }

    function checkWaterQuality($aquarium)
    {
        if ($aquarium->eau == "sale") {
            echo "L'eau est sale, il faut la changer !";
        } else {
            echo "L'eau est propre, pas besoin de la changer !";
        }
    }
}