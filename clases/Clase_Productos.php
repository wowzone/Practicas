<?php 

require "clase_Connect.php";
/**
* clase productos
*/
class Productos
{
		
	public function insertProducto()
	{
		//print_r($_POST);
		$query = "SELECT codigo FROM productos WHERE codigo = '".$_POST["codigo"]."' ";
		$res = mysql_query($query, ConexionDB::con());

		if (mysql_num_rows($res) == 0) 
		{
			$query = " INSERT INTO
					   values 
					 ( null,'".$_POST["producto"]."', '".$_POST["precio"]."','".$_POST["codigo"]."');
					 ";

			$resultado = mysql_query($query, ConexionDB::con());

			header("location: insert_producto.php?m=1");
				
		}
		else
		{
			header("location: insert_producto.php?m=2");
		}

		return $resultado;
	}
}