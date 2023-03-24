<?php

	require_once "conexion.php";
	require_once "metodos.php";

	$nombre=$_POST['name'];
	$password= $_POST['password'];
	$telefono= $_POST['telefono'];

	$datos= array(
				$nombre,
				$password,
				$telefono);

	$obj=new metodo();
	if($obj->insertarDatos($datos)==1){
			header("location:app.php");
		}
		else{
			echo "fallo al agregar";
		}

?>