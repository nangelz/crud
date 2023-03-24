<?php

	require_once "conexion.php";
	require_once "metodos.php";

	$nombre=$_POST['name'];
	$password= $_POST['password'];
	$telefono= $_POST['telefono'];
	$id =$_POST['id'];

	$datos= array(
				$nombre,
				$password,
				$telefono,
				$id);

	$obj=new metodo();
	if($obj->actualizarDatos($datos)==1){
			header("location:app.php");
		}
		else{
			echo "fallo al agregar";
		}



?>