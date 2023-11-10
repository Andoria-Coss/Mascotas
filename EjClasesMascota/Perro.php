<?php
include("Mascota.php");

class Perro 
{

  private $arrPerro = array();
  
  function __construct(){
    $oMascota = new Mascota("Tafi", "150", "chihuahua", "chi.jpeg", "Mary" );
    $this->arrPerro[0] = $oMascota;
    $oMascota = new Mascota("Rocky", "200", "golden", "golden.jpeg", "Oscar");
    $this->arrPerro[1] = $oMascota;
    //new perritu
    $oMascota = new Mascota("Wawi", "100", "electrico", "wawi.jpeg", "Coss");
    $this->arrPerro[2] = $oMascota;
    //San bernie
    $oMascota = new Mascota("Ronie", "300", "sanbernardo", "perritokawaii.jpeg", "Espin");
    $this->arrPerro[3] = $oMascota;
    //Frensh
    $oMascota = new Mascota("Nena", "250", "frenshpoodle", "perritubb.jpeg", "Mary");
    $this->arrPerro[4] = $oMascota;
    //Husky
    $oMascota = new Mascota("Ares", "350", "husky", "husky.jpg", "Roberto");
    $this->arrPerro[5] = $oMascota;
  }

  function buscar($raza){
    $oRet=null;
    $r=$raza;
    //agregar +1 en la comparación para cada perrit0u agregadou
        for($i=0; $i<6; $i++) {
           if ($this->arrPerro[$i]->getRaza()== $r )
              {$oRet=$this->arrPerro[$i];
                break;
               }
       }
        return $oRet;
  }
}

?>