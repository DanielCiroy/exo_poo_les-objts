<?php
 class personne{
    public $nom;
    public $age;

    public function __construct(string $nom ,int $age){
        $this->nom=$nom;
        $this->age=$age;
    }
 }