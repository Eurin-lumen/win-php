<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");

$merlin->regenerer();

// nouveau personnages
$harry = new Personnage("Harry");

var_dump($merlin); // -> accède à l'élement

var_dump($harry); 