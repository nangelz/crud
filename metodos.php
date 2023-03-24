<?php

 /**
  * 
  */
 class metodo{
 	
 	public function mostrarDatos($sql)
 	{
 		$c = new conectar();
 		$conexion=$c->conexion();

 		$result=mysqli_query($conexion,$sql);

 		return mysqli_fetch_all($result,MYSQLI_ASSOC);

 	}

 	public function insertarDatos($datos){

 		$c= new conectar(); 
 		$conexion=$c->conexion();

 		$sql="INSERT into usuarios (name,password,telefono)
 									values('$datos[0]','$datos[1]','$datos[2]')";

 			return $result=mysqli_query($conexion,$sql);
	}

	public function actualizarDatos($datos){

 		$c= new conectar(); 
 		$conexion=$c->conexion();
	
 		$sql ="UPDATE usuarios set name='$datos[0]', password='$datos[1]',telefono='$datos[2]' where id='$datos[3]'";

 		return $result=mysqli_query($conexion,$sql);
		}

	public function eliminarDatos($id){

 		$c= new conectar(); 
 		$conexion=$c->conexion();
 
 		$id=$_GET["id"];
	
 		$sql ="DELETE from usuarios where id='$id'";

 		return $result=mysqli_query($conexion,$sql);
		
		}

	public function validarDatos($datos){

		$c= new conectar();
		$conexion=$c->conexion();

		$sql = "SELECT * from usuarios where name ='$datos[0]'and password='$datos[1]'";
		
		$result=mysqli_query($conexion,$sql);

		return $filas = mysqli_num_rows($result);

		mysqli_free_result($result);
		mysqli_close($conexion);
		}


 	}
?>