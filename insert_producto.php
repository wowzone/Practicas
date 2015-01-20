<?php

require "clases/Clase_Productos.php";

$obj = new Productos();

	if (isset($_POST["producto"]) ) 
		{
			//print_r($_POST);
			//exit();
		$obj->insertProducto();

		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar Producto</title>
</head>
<body>

<form name="form" action="" method="post">
<h2>Ingrese el Producto</h2>
<ul>
<p><li>Producto: <input type="text" name="producto" id="producto"></li></p>
<p><li>Precio:	 <input type="text" name="precio" id="precio"></li></p>
<p><li>Código:   <input type="text" name="codigo" id="codigo"></li>
<hr>
<p><input type="hidden" name="guardar" value="si"></p>
<p><input type="submit" value="insertar" title="Insertar"></p>
</p>
</ul>
</form>
	
</body>
</html>