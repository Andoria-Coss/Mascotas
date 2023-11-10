<?php

$objeto=null;

if (isset($_REQUEST["RazaEncontrada"]) && 
		!empty($_REQUEST["RazaEncontrada"]))
	$objeto=$_REQUEST["RazaEncontrada"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Clinica veterinaria</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  type="text/css" href="css/estilos.css"> 
</head>
<body>
<div id="header">
			<header>
				<h2>Clínica y estética veterinaria </h2>
			</header>
    </div>
	<div id="menu">
			<nav>
				
				<div id="submenu1" style="display:block">
					<ul>
					<li><a>Menu</a> <br/></li>
					<li><a href="dos.html">Opc1</a> <br/></li>
					<li><a href="dos.html">Opc2</a> <br/></li>
				</ul>

				</div>
				<br/>
				
			</nav>
        </div>

	<div id="contenido">
	
<section>
   <h3>El costo del baño es: <?php echo $objeto->getCosto();?></h3>
   
	<h4>Para el perrito <?php echo $objeto->getNombre();?></h4>
	<h4>Raza <?php echo $objeto->getRaza();?></h4>
	<h4>Del dueño <?php echo $objeto->getDueno();?></h4>
	<img src=<?php echo "img/".$objeto->getFoto();?> alt="NO SE ENCONTRO IMAGEN" style="width:304px;height:228px;"><br><br>
	<a href="index.html" class="button">Regresar</a>
</section></div>

	<footer>
		Todos los derechos reservados
	</footer>
</body>
</html>