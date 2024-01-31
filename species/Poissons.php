<?php

class Poisson extends Animaux {
    public function mouvement() {
        echo "je nage";
    }

    public function noise(){

        echo "Bloop Bloop";


    }

    public function __construct($nom, $age, $sexe, $poids, $taille, $couleur, $race, $famille, $nourriture, $caractere, $sante, $aquarium) {
        parent::__construct($nom, $age, $sexe, $poids, $taille, $couleur, $race, $famille, $nourriture, $caractere, $sante, $aquarium);
    }

    public function showCarac() {
        echo "Je suis un " . $this->especenom . " j'ai " . $this->age . " ans, je pèse " . $this->poids . " kg et je mesure " . $this->taille . " cm. ";
    }

    public function showEtat() {
        echo "Je suis un " . $this->especenom . " j'ai " . $this->age . " ans, je pèse " . $this->poids . " kg et je mesure " . $this->taille . " cm. ";
    }

    public function Healed(){

        if($isSick = true){

            echo $this->especenom . " a été soigné ! ";
        }  else {

            echo $this->especenom . " n'a pas besoin d'être soigné ! ";
        }

    }

}