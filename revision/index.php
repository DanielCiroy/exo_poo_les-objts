
<?php
 require_once('famille.php');

 $premierMembre= new famille();

 $premierMembre->nom='daniel';
 $premierMembre->age=22;

 var_dump($premierMembre);