<?php
	require_once "conexion.php";
	require_once "metodos.php";

	$nombre=$_POST['nombreUsuario'];
	$password= $_POST['passwordUsuario'];


	$datos= array(
				$nombre,
				$password);

	$obj=new metodo();
	if($obj->validarDatos($datos)>0){
			header("location:app.php");
		}
		else{
			echo "fallo al ingresar";
		}
?>