<?php 
	$id= $_GET['id'];

	require_once 'conexion.php';
	require_once 'metodos.php';

	$obj = new metodo();
	if($obj-> eliminarDatos($datos)==1){

		header("location:app.php");
	}else {
		echo 'fallo al eliminar';
	}




 ?>