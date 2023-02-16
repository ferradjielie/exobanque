<?php

class Titulaire {

    private string $_nom;
    private string $_prenom;
    private string $_datedenaissance;
    private string $_ville;
    private array $_comptes;

    public function __construct (string $nom, string $prenom, string $datedenaissance, string $ville) {

        $this-> _nom = $nom;
        $this -> _prenom= $prenom;
        $this -> _datedenaissance=$datedenaissance;
        $this-> _ville = $ville;
        $this-> _comptes = [];
    
    }

    public function afficherTitulaire () {
        echo $this-> _nom . " ". $this-> _prenom. " ". $this->_datedenaissance. " ". $this-> _ville."<br>";
        foreach ($this-> _comptes as $compte) { 
            echo $compte; 
        }
    }


    public function ajouterCompte (Compte $comptes) {
        $this->_comptes[]=$comptes;
    }

    public function getNom () {
        return $this->_nom;
    }
    public function getPrenom () {
        return $this-> _prenom;

    }

    public function getDatedenaissance () {
        return $this -> _datedenaissance;
    }
    public function getVille (){
        return $this->_ville;

    }
    public function afficherComptes(){
        echo "Comptes bancaires de :". $this->_prenom." ".$this->_nom. "<br>";
        foreach ($this-> _comptes as $compte) { 
            echo $compte; 
        }

    }

    public function __toString () {
        return $this-> _nom . " ". $this-> _prenom. " ". $this->_datedenaissance. " ". $this-> _ville. $this->_comptes=[];
    }
}








?>