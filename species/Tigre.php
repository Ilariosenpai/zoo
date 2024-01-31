<?php

class Tigre extends Animaux {
    public function mouvement() {
        echo "je marche";
    }

    public function noise(){

        echo "Graouuuh";


    }

    public function __construct($nom, $age, $sexe, $poids, $taille, $couleur, $race, $famille, $nourriture, $caractere, $sante, $enclos) {
        parent::__construct($nom, $age, $sexe, $poids, $taille, $couleur, $race, $famille, $nourriture, $caractere, $sante, $enclos);
    }


    



}