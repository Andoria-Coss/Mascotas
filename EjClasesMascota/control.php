<?php
include_once("Perro.php");
$objPerro=new Perro();
$obj=null;
$r="";

     	$r=$_POST["razas"];
     	try{
     	$obj=$objPerro->buscar($r);
     $_REQUEST["RazaEncontrada"] = $obj;
     }catch(Exception $e){
				$sError = $e->getMessage();
				error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
			}
     include_once("resultado.php");

?>     