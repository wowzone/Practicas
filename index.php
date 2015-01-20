<?php 
require "clases/clases.php";

$obj = new ClasePersonas();

$datos = $obj->getPersonas();


foreach ($datos as $d) 
{
	echo $d["nombre"]. "---". $d["correo"]. "---". $d["descripcion"]. "---". $d['fecha'];
	echo "<br>";
}



//print_r($datos);

/*
for ($i=0; $i < sizeof($datos) ; $i++) 
{ 
	
	echo $datos[$i]["nombre"]."---". $datos[$i]["correo"]."---".$datos[$i]["descripcion"];
	echo "<br>";
}
*/


