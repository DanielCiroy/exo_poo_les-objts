<?php
 class personne{
    public $nom;
    public $age;

    public function __construct(string $nom ,int $age){
        $this->nom=$nom;
        $this->age=$age;
    }

    public function setPers(string $nom, int $age){
        $this->$nom=nom;
        $this->$age=age;
    }

    public function getPers(string $nom, int $age){
        $this->nom;
        $this->age;

    }
 }