<?php
	/**
	 El nombre de la base de datos en xampp es datos_de_usuarios y dentro de ella se creo una tabla usuarios que es von la cual se estara trabajando ddentro
	 de la aplicacion.
	 */
	class conectar
	{
		private $servidor="localhost";
		private $usuario="root";
		private $bd="datos_de_usuarios";
		private $pass="";

		public function conexion()
		{
			$conexion =mysqli_connect($this->servidor,
									  $this->usuario,
									  $this->pass,
									  $this->bd);
			return $conexion;
		}
	}

?>
