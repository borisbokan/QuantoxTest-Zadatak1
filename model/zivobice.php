<?php

/**
 * Description of zivobice
 *
 * @author borcha
 */
class zivobice {
    var $tip;/*Covek, Zivotinja, biljka..*/
    var $naziv;/*Neki opis.... */
    var $prirodno_staniste;//tlo, voda, vazduh
    
    
    public function __construct($_tip,$_naziv,$_prirodnostaniste) {
        $this->tip=$_tip;
        $this->naziv=$_naziv;
        $this->prirodno_staniste=$_prirodnostaniste;
       
        
    }
    
    //geteri
    function getTip() {
        return $this->tip;
    }

    function getNaziv() {
        return $this->naziv;
    }
  

    function getPrirodno_staniste() {
        return $this->prirodno_staniste;
    }

    
    //Seteri
    function setTip($tip) {
        $this->tip = $tip;
    }

    function setNaziv($naziv) {
        $this->naziv = $naziv;
    }

    
    function setPrirodno_staniste($prirodno_staniste) {
        $this->prirodno_staniste = $prirodno_staniste;
    }

    
}
