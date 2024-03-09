
<?php
 require_once('famille.php');

 $premierMembre= new famille();

 $premierMembre->nom='daniel';
 $premierMembre->age=22;

 $deuxieumeFamille= new famille2();
 $deuxieumeFamille->nom='djidji';
 $deuxieumeFamille->age=55;

 var_dump($premierMembre);
 var_dump($deuxieumeFamille);