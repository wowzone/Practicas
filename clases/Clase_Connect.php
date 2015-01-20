<?php 
/**
* conexion a la base de datos con una clase estatica
*/
class ConexionDB
{
	public static function con()
	{
		$con = mysql_connect('localhost','root','adminpass');

		if (!$con) {
			echo "error sql";
			exit();
		}

		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("cesar");
		return $con;
	}

}

/**
* clase de personas
*/
class ClasePersonas
{
	private $per;
	public $imp;
	private $res;
	private $reg;

	public function __construct()
	{
		$this->per = array();
	}



/*
la function getPersonas toma la variable sql para introducir la consulta $sql
luego creamos la variable $res que contendra los registros que sacara de la consulta
para ello usamos la funcion nativa mysql_query dnd insertamos la consulta con la variable 
$sql y agragamos la conexion de la bd $con.

para rescatar los registros usamos un while y le decimos que asocie $res y lo traiga como un array asociativo
y el resultado sera pasado al parametro por la variable $reg.

el array que asocia los registros de la bd es $per que le asignamos la varible $reg, pues es esta
la que lleva todos los registros de la consulta hecha en un array asociativo y le decimos que regrese ese valor
a $per como un array.


*/
	public function getPersonas()
	{
		$sql = "SELECT * FROM personas";

		$this->res = mysql_query($sql,ConexionDB::con()); 
	
			while ($this->reg = mysql_fetch_assoc($this->res)) 
			{
				$this->per[] = $this->reg;
				return $this->per;
			}
			
		
	}

/*

esta function imprime los resultados de manera que los metodos privados 
no se usan para imprimir, de esa manera encapsulamos los resultados.



	public function impPantalla()
	{
		$this->imp = self::getPersonas();
		return $this->imp;
		
	}
	*/

}
