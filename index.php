<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");


// accés au à la propriété privé par la fonction
//echo $merlin ->getNom();
echo $merlin ->nom;