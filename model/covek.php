<?php


/**
 * Prosiruje class -u zivo bice ali ne u funkcionalnom smislu. Ssamo da prikazem razumevanje OOP koncepta.
 * Ne pozivam super klasu ili parent klasu , tu je cisto radi reda..
 *
 * @author borcha
 */
class covek extends zivobice{
   
    var $prezime;
    var $ime;
    var $pol;
    var $boja_kose;
    var $boja_ociju;
    var $rasa;
    var $datum_rodjenja;
    var $mesto_rodjenja;
    
    //put your code here
    /**
     * Parametri konstruktora
     * @param type $_prezime
     * @param type $_ime
     * @param type $_pol
     * @param type $_bojakose
     * @param type $_bojaociju
     * @param type $_rasa
     * @param type $_datumrodjenja
     * @param type $_mestorodjenja
     */
    public function __construct($_prezime,$_ime,$_pol,$_bojakose,$_bojaociju,$_rasa,$_datumrodjenja,$_mestorodjenja) {
       
        $this->prezime=$_prezime;
        $this->ime=$_ime;
        $this->pol=$_pol;
        $this->boja_kose=$_bojakose;
        $this->boja_ociju=$_bojaociju;
        $this->rasa=$_rasa;
        $this->datum_rodjenja=$_datumrodjenja;
        $this->mesto_rodjenja=$_mestorodjenja;
    }
    
    function getPol() {
        return $this->pol;
    }

    function getBoja_kose() {
        return $this->boja_kose;
    }

    function getBoja_ociju() {
        return $this->boja_ociju;
    }

    function getRasa() {
        return $this->rasa;
    }

    function setPol($pol) {
        $this->pol = $pol;
    }

    function setBoja_kose($boja_kose) {
        $this->boja_kose = $boja_kose;
    }

    function setBoja_ociju($boja_ociju) {
        $this->boja_ociju = $boja_ociju;
    }

    function setRasa($rasa) {
        $this->rasa = $rasa;
    }

 
    function getDatum_rodjenja() {
        return $this->datum_rodjenja;
    }

    function getMesto_rodjenja() {
        return $this->mesto_rodjenja;
    }

    function setDatum_rodjenja($datum_rodjenja) {
        $this->datum_rodjenja = $datum_rodjenja;
    }

    function setMesto_rodjenja($mesto_rodjenja) {
        $this->mesto_rodjenja = $mesto_rodjenja;
    }

    function getPrezime() {
        return $this->prezime;
    }

    function getIme() {
        return $this->ime;
    }

    function setPrezime($prezime) {
        $this->prezime = $prezime;
    }

    function setIme($ime) {
        $this->ime = $ime;
    }


    function getResult(){
        echo 'Prezime, Ime: ' . $this->getPrezime() . ", " . $this->getIme() . "<br>";
        echo 'Pol: ' . $this->getPol(). "<br>";
        echo 'Boja kose: ' . $this->getBoja_kose(). "<br>";
        echo 'Boja ociju: ' . $this->getBoja_ociju(). "<br>";
        echo 'Rasa: ' . $this->getRasa(). "<br>";
        echo 'Datum rodjenja: ' . $this->getDatum_rodjenja(). "<br>";
        echo 'Mesto rodjenja: ' . $this->getMesto_rodjenja(). "<br>"; 
        echo "<br/><br/><br/><br/>";
    }
   
    
}
