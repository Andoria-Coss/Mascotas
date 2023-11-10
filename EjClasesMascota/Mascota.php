<?php
class Mascota
{
  protected $nombre;  //private, public
  protected $raza;
  protected $costo;
  protected $dueno;

  public function getCosto() //GET OBTIENE
  {
    return $this->costo;
  }
 
  public function setCosto($costo) //SET ASIGNA
  {
    $this->costo= $costo;
  }
 
  public function getNombre()
  {
    return $this->nombre;
  }
 
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
 
 public function getRaza()
  {
    return $this->raza;   //this.raza
  }
 
  public function setRaza($raza)
  {
    $this->raza = $raza;
  }
 
  public function getDueno()
  {
    return $this->dueno;   //this.dueno
  }
 
  public function setDueno($dueno)
  {
    $this->dueno = $dueno;
  }

  protected function toString()
  {
    return "Esta mascota {$this->nombre} es {$this->raza} El dueño es {$this->dueno}.";
  }

  function setFoto($valor){
    $this->sFoto = $valor;
  }

  function getFoto(){
    return $this->sFoto;
  }
  
  function __construct($sNom, $nCosto, $sRaza, $sFot, $sDue){
    $this->nombre = $sNom;
    $this->costo = $nCosto;
    $this->raza = $sRaza;
    $this->sFoto = $sFot;
    $this->dueno =$sDue;
  }
}
?>