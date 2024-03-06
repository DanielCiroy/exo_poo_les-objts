
<?php
 require_once('famille.php');

 $premierMembre= new famille();

 $premierMembre->setNom('daniel');
 $premierMembre->setAge(22);

 var_dump($premierMembre->getNom(), $premierMembre->getAge());