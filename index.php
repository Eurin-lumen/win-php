<?php

require 'Personnage.php';

$merlin = new Personnage();
$merlin->regenerer();

// nouveau personnages
$harry = new Personnage();
$harry->perte();


var_dump($merlin); // -> accède à l'élement

var_dump($harry); 