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
$id=mysqli_real_escape_string($conexion,$_GET["Id"]);
$pagina=mysqli_real_escape_string($conexion,$_GET["pagina"]);
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>RA Crud delete</title>
</head>
<body>
<?php
//ACTUALIZANDO
$consulta="DELETE FROM `ruleta_datos` WHERE ID=$id";
$resultados=mysqli_query($conexion,$consulta);
header("location:ruleta_activa_crud.php?pagina=$pagina");
?>
</body>
</html>
<?php
//DESCONECTAR
mysqli_close($conexion);
?>