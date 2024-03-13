<?php
 class personne{
    public $nom;
    public $age;

   

    public function setNom($nom){
       return $this->nom=$nom;
    }

    public function getNom($nom){
        return $this->nom;
       
    }

    public function setAge(){
        return $this->age=$age;
    }

    public function getAge(){
        return $this->age;

    }
 }