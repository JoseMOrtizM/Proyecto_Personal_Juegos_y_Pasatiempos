<?php session_start();if(!isset($_SESSION["usuario_Adm"])){header("location:index.php");}
require ("conexion.php");
$cod_ini=$_POST["cod_ini"];
$pagina=$_POST["pagina"];
$usuario=$_POST["usuario"];
echo "UPDATE `datos_usuarios` SET USUARIO=NULL, CORREO=NULL, CONTRASENA=NULL WHERE CODIGO_INICIO='$cod_ini'<br>";
$consulta="UPDATE `datos_usuarios` SET USUARIO=NULL, CORREO=NULL, CONTRASENA=NULL WHERE CODIGO_INICIO='$cod_ini'";
$resultados=mysqli_query($conexion,$consulta);
echo "DELETE FROM `quinielas` WHERE USUAIRO='$usuario'<br>";
$consulta="DELETE FROM `quinielas` WHERE USUAIRO='$usuario'";
$resultados=mysqli_query($conexion,$consulta);
mysqli_close($conexion);
header("location:QMF2016_Adm_Tabla_Usuarios.php?pagina=$pagina");
?>