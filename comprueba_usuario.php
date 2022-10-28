<?php
//RESCATANDO LOS DATOS DEL FORM
$username=htmlentities(addslashes($_POST["usuario"]));
$password=htmlentities(addslashes($_POST["contrasena"]));
// CONECTANDO CON BD
require ("conexion.php");
//CONSULTANDO USUARIO EN BD
$consulta="SELECT * FROM `datos_admin` WHERE USUARIO ='$username' AND CONTRASENA = '$password'";
$resultado=mysqli_query($conexion,$consulta);
if(($fila=mysqli_fetch_array($resultado))==true){
	session_start();
	$_SESSION["usuario_ADM"]=$username;
	header("location:zona_adm.php");		
}else{
	header("location:autenticacion.php?user=invalido");
}
mysqli_close($conexion);
?>