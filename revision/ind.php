<?php
include_once('pers.php');

$dan= new personne('ciroy', 30);

$dan->setPers('daniella',100);

$dan->getPers();

var_dump($dan);

