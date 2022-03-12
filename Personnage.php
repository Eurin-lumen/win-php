<?php
/**
 * création de notre classe
 */
class Personnage
{
    // propriétes 
    // public pour la visibilité de la variable 
    private $vie = 80;
    private  $atk = 20;
    private $nom; 

    /**
     * Public / Private / Protected
     */
    //creer des 
    // un contructeur
    public function __construct($nom){

        $this->nom = $nom;
    }
    public function mort(){
       return $this->vie <= 0;
    }
   

    // methode  pour accéder a la propriété privé
    public function getNom(){
        return $this ->nom;
    }
    public function getVie(){
        return $this->vie;
    }
    public function getAtk(){
        return $this->atk;
    }

   public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie += $vie;
        }
   }

        // exemple d'utilisation de private 
    private function empecher_negatif(){
        if($this->vie <= 0){
            $this->vie = 0;
        }

    }
   public function attaque($cible){


        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    
   

   }
}