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
    //creer des methodes

    public function regenerer(){
        $this->vie = 100;
    }
    public function perte(){
        $this->vie = 2;
    }

}