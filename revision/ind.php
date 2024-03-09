<?php

namespace personne;
class daniel{
    public $nom;
    public $age;
}

namespace personnage;
class daniel{
    public $nom;
    public $age;
}

$daniel= new \personne\daniel();

$daniel-> nom='dan';
$daniel->age=20;
var_dump($daniel);

$ciroy= new\personnage\daniel;

$ciroy=->nom='jdidji';
$age->age=100;
var_dump($ciroy);