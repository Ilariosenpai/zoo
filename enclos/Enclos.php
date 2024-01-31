<?php

abstract class Enclos{

   protected $nome;
   protected $propre = "Propre";
   protected $animalsinside = "0";

   public function __construct($nome, $propre, $animalsinside){
      $this->nome = $nome;
      $this->propre = $propre;
      $this->animalsinside = $animalsinside;
   }



   public function addAnimal($animal){
      $this->animalsinside[] = $animal;
   }

   
   public function deleteAnimal($animal){
      $key = array_search($animal, $this->animalsinside);
      if($key !== false){
         unset($this->animalsinside[$key]);
      }
   

   }

   public function getaInside(){
      return $this->animalsinside;
   }

   public function setaInside($animalsinside){
      $this->animalsinside = $animalsinside;
   }

   public function getPropre(){
      return $this->propre;
   }

   public function setPropre($propre){
      $this->propre = $propre;
   }

   public function getNome(){
      return $this->nome;
   }

   public function setNome($nome){
      $this->nome = $nome;
   }

   public function nettoyerEnclos(){
      if($this->propre == false && $this->animalsinside == false){
         $this->propre = true;
      }
   }

  


}