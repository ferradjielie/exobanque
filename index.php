<?php

include ('Compte.php');
include ('Titulaire.php');

$titulaire1 = new Titulaire ("Franck","David","15/07/1994", "Paris");
$compte1= new Compte ("Compte Courant",1500.15, "euros", $titulaire1);
$compte2= new Compte ("Livret A",855.12, "euros", $titulaire1);

// $titulaire1-> afficherComptes();
$titulaire1->afficherTitulaire () ;
    
// echo $compte1->getSolde ();
// $compte1->crediter(500);
// echo "<br>";
// echo $compte1->getSolde ();

// echo "<br>";

// echo $compte1-> getSolde();
// echo "<br>";

// $compte1->debiter(1000);

// echo $compte1-> getSolde();
 $compte1->virement($compte2, 100);
  
    
      
   


echo $compte1-> getSolde ();
echo "<br>";
echo $compte2-> getSolde ();



?>