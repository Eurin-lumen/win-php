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
       return $this->vie <= 0;
    }

   public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie += $vie;
        }
   }


   public function attaque($cible){


        $cible->vie -= $this->atk;
    $cible->vie=20;
    
    var_dump($cible);

   }
}