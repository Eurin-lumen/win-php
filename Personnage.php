<?php
/**
 * création de notre classe
 */
class Personnage
{
    // propriétes 
    // public pour la visibilité de la variable 
    public $vie = 80;
    public $atk = 20;
    public $nom;
    //creer des 
    // un contructeur
    public function __construct($nom){

        $this->nom = $nom;
    }
    public function mort(){
        $this->vie = 0;
    }

    public function regenerer(){
        $this->vie = 100;
    }
    

}