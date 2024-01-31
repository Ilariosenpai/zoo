<?php

class Volière extends Enclos{


    private $plafond;

    public function __construct($nom, $propre, $animalsinside, $plafond)
    {
        parent::__construct($nom, $propre, $animalsinside);
        $this->plafond = $plafond;
    }

}