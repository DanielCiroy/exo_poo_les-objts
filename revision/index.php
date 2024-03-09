
<?php
 require_once('famille.php');

 $premierMembre= new famille();

 $premierMembre->getNom('daniel');
 $premierMembre->setAge(22);

 var_dump($premierMembre->getNom(), $premierMembre->getAge());