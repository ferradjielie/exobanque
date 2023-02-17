<?php

class Compte {
    private float $_solde;
    private string $_devise;
    private string $_libelle;
    private Titulaire $_titulaire;
    
    public function __construct (string $libelle, float $solde, string $devise,  Titulaire $titulaire) 
    {
        $this->_solde= $solde;
        $this->_devise= $devise;
        $this-> _libelle= $libelle;
        $this->_titulaire= $titulaire;
        $this->_titulaire->ajouterCompte($this);
    }

    public function getSolde() {
        return $this->_solde;
    }

    public function getDevise () {
        return $this -> _devise;
    }
    public function getLibelle () {
        return $this->_libelle;
    }
    public function getTitulaire () {
        return $this->_titulaire;
    }

    public function __toString()
    {
        return $this->_libelle.":"." ". $this-> _solde. " ". $this-> _devise. "<br>";
    }

    public function crediter ($montant) {
        $this-> _solde  += $montant ;
    }
    public function debiter ($montant) {
        $this-> _solde  -= $montant ;
    }

    public function virement (Compte $destinataire,  float $montant) {
     
      $this->debiter($montant)  ;
      $destinataire->crediter($montant);
    }



}


?>