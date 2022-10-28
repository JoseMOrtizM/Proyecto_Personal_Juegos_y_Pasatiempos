<?php
session_start();
if(!isset($_SESSION["usuario_ADM"])){header("location:Salir.php");}
//usuario_ADM
$user=$_SESSION["usuario_ADM"];
//conexion
require ("conexion.php");
//OBTENIENDO CANTIDAD DE PALABRAS
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>ZONA ADM</title>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="Estilo_Principal.css"/>
<?php
require ("efecto_entrada.php");
?>
</head>
<body>
<?php
require ("header.php");
require ("nav.php");
require("aside.php");
?>
<section>
<h3>Bienvenido: <?php echo "$user"; ?></h3>
<br>
<ul>
<li><a href='ruleta_activa_crud.php'>Datos Ruleta Activa</a></li>
<li><a href='ver_trafico.php'>Datos de Tráfico del sitio</a></li>
</ul>
<br>
</section>
<?php
require ("footer.php");
?>
<br><br>
</body>
</html>
<?php
mysqli_close($conexion);
?>