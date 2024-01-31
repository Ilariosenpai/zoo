<?php

class Employe {
    private $nom;
    private $age;
    private $sexe;
    

    public function __construct($nom, $age, $sexe) {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    // Getters and Setters for the employee's characteristics
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    
    public function examinerEnclos($enclos) {
        
        if ($enclos->propre == true) {
            echo "L'enclos est propre, pas besoin de le nettoyer !";
        } else {
            echo "L'enclos est sale, il faut le nettoyer !";
        }
    }

    // Method to clean an enclosure if it's dirty and empty
    public function nettoyerEnclos($enclos) {
       
        if ($enclos->propre == false && $enclos->animalsinside == false) {
            echo "L'enclos a été nettoyé !";
        } else {
            echo "L'enclos n'a pas besoin d'être nettoyé !";
        }
    }

    // Method to feed animals in an enclosure when they are not sleeping
    public function nourrirAnimaux($enclos) {
        
        if ($enclos->animalsinside == true && $enclos->animalsasleep == false) {
            echo "Les animaux ont été nourris !";
        } else {
            echo "Les animaux n'ont pas besoin d'être nourris !";
        }
    }

    // Method to add a new animal to an enclosure if possible
    public function ajouterAnimal($animal, $enclos) {
        
        if ($enclos->animalsinside == false) {
            echo "L'animal a été ajouté à l'enclos !";
        } else {
            echo "L'animal n'a pas pu être ajouté à l'enclos !";
        }
    }

    // Method to remove an animal from an enclosure
    public function enleverAnimal($animal, $enclos) {
        
        if ($enclos->animalsinside == true) {
            echo "L'animal a été enlevé de l'enclos !";
        } else {
            echo "L'animal n'a pas pu être enlevé de l'enclos !";
        }
    }

    // Method to transfer an animal from one enclosure to another
    public function transfererAnimal($animal, $enclosSource, $enclosDestination) {
      
        if ($enclosSource->animalsinside == true && $enclosDestination->animalsinside == false) {
            echo "L'animal a été transféré dans l'enclos " . $enclosDestination->nom . " !";
        } else {
            echo "L'animal n'a pas pu être transféré dans l'enclos " . $enclosDestination->nom . " !";
        }
    }


    

    


   

}