<?php
//INICIANDO SESSION
session_start();
//VERIFICANDO SESSION
if(!isset($_SESSION["usuario_ADM"])){
	header("location:salir.php");
}
// RESCATANDO USUARIO
$usuario=$_SESSION["usuario_ADM"];
//CONECTANDO CON LA BD
require ("conexion.php");
//RESCATANDO DATOS DEL FORMULARIO
$id=mysqli_real_escape_string($conexion,$_POST["id"]);
$fecha=mysqli_real_escape_string($conexion,$_POST["fecha"]);
$hora=mysqli_real_escape_string($conexion,$_POST["hora"]);
$numero=mysqli_real_escape_string($conexion,$_POST["numero"]);
$pagina=mysqli_real_escape_string($conexion,$_POST["pagina"]);
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>RA Crud update</title>
</head>
<body>
<?php
//ACTUALIZANDO
$consulta="UPDATE `ruleta_datos` SET FECHA='$fecha', HORA='$hora', NUMERO='$numero' WHERE ID='$id'";
$resultados=mysqli_query($conexion,$consulta);
header("location:ruleta_activa_crud.php?pagina=$pagina");
?>
</body>
</html>
<?php
//DESCONECTAR
mysqli_close($conexion);
?>