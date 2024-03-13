<?php
include_once('pers.php');

$dan= new personne();

$dan->setNom('daniella');
$dan->getNom();

$dan->setAge(500);
$dan->getAge();

var_dump($dan->getNom(),getAge());

