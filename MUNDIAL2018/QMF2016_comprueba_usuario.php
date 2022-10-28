<?php

try{
	
	$login=htmlentities(addslashes($_POST["nombre_usuario"]));
	$password=htmlentities(addslashes($_POST["contrasena"]));
	require ("conexion.php");
	
	$consulta="SELECT * FROM `datos_usuarios` WHERE USUARIO= '$login' AND CONTRASENA= '$password'";
	
	$resultados=mysqli_query($conexion,$consulta);
	
	$cuenta=0;
	
	while(($fila=mysqli_fetch_array($resultados))==true){
		$cuenta=1;
	}

	if($cuenta==1){
		
		session_start();// iniciando sesion de usuario
		
		$_SESSION["usuario"]=$login;
		
		header("location:QMF2016_Instructivo.php");
	
	}else{
	
		header("location:index.php");	
	
	}

	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>