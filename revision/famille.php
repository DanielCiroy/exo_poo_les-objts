<?php

class famille{
    public $nom;
    public $age;

  public function setNom(string $nom, int $age){
    return $this->nom=$nom;

  }

  public function getNom(){
    return $this->nom;
  }

  public function setAge(){
    return $this->age=$age;

  }

  public function getAge(){
    return $this->age;
  }
}