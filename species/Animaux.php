<?php

abstract class Animaux{

     protected $taille;
     protected $especenom;
     protected $age;
     protected $isSick;
     protected $isSleeping;
     protected $isHungry;
     protected $poids;
     





    abstract public function mouvement();

    public function mange() {
        echo "je mange";
    }

    abstract public function noise();

    public function __construct($poids, $taille, $especenom, $age, $isSick, $isSleeping, $isHungry) {
        $this->poids = $poids;
        $this->taille = $taille;
        $this->especenom = $especenom;
        $this->age = $age;
        $this->isSick = $isSick;
        $this->isSleeping = $isSleeping;
        $this->isHungry = $isHungry;
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


    public function dodo(){

        if ($isSleeping = true) {

            echo "Je dors";
            
        } else{

            echo "je suis réveillé";
        }

        
    }

    public function faim(){

        if ($isHungry = true) {

            echo "J'ai faim";
            
        } else{

            echo "Je n'ai pas faim";
        }

        
    }





}




