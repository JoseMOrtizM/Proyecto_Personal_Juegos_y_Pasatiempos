<?php

try{
	
	$login_adm=htmlentities(addslashes($_POST["nombre_admin"]));
	$password_adm=htmlentities(addslashes($_POST["contrasena_admin"]));
	require ("conexion.php");
	
	$consulta="SELECT * FROM `datos_admin` WHERE USUARIO= '$login_adm' AND CONTRASENA= '$password_adm'";
	
	$resultados=mysqli_query($conexion,$consulta);
	
	$cuenta=0;
	
	while(($fila=mysqli_fetch_array($resultados))==true){
		$cuenta=1;
	}
	
	if($cuenta==1){

		session_start();// iniciando sesion de usuario
		
		$_SESSION["usuario_Adm"]=$login_adm;

		header("location:QMF2016_Adm_Grupos.php");
	
	}else{

		echo "ALGO ANDA MAL";
	
		header("location:QMF2016_Adm_Sitio.php");	

	}

	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>