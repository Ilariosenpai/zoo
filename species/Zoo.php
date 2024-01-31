<?php

class Zoo {
    private $nom;
    private $employe;
    private $nombreMaxEnclos;
    private $enclos;

    public function __construct($nom, $employe, $nombreMaxEnclos) {
        $this->nom = $nom;
        $this->employe = $employe;
        $this->nombreMaxEnclos = $nombreMaxEnclos;
        $this->enclos = [];
    }

    public function afficherContenuEnclos() {
        foreach ($this->enclos as $enclos) {
            $enclos->afficherContenu();
        }
    }

    public function afficherNombreAnimaux() {
        $nombreAnimaux = 0;
        foreach ($this->enclos as $enclos) {
            $nombreAnimaux += $enclos->getNombreAnimaux();
        }
        echo "Nombre d'animaux présents dans le zoo : " . $nombreAnimaux;
    }

    public function main() {
        while (true) {
            foreach ($this->enclos as $enclos) {
                $enclos->modifierEtat();
            }
            $this->employe->soccuperDuZoo();
        }
    }
}

