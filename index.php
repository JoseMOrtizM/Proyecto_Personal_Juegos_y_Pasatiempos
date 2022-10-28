<?php
//CONECTANDO
require ("conexion.php");
//CARGANDO DATOS DE LA VISITA
require ("insertar_trafico.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Inicio</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
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
<h2 style="border-bottom:#7C5F43 4px double; text-align:center;">Aplicaciones Desarrolladas</h2>
<ol>
<a href='sudoku.php'><li><img src="IMAGENES/sudoku.jpg"/><br>Sudoku</li></a>
<a href='pique_y_fama.php'><li><img src="IMAGENES/pique_y_fama.jpg"/><br>Pique y Fama</li></a>
<a href='cryptograma.php'><li><img src="IMAGENES/cryptograma.jpg"/><br>Cryptograma</li></a>
<a href='palabra_oculta.php'><li><img src="IMAGENES/palabra_oculta.jpg"/><br>Palabra Oculta</li></a>
<a href='MUNDIAL2018/index.php'><li><img src="IMAGENES/quiniela_rusia_2018.jpg"/><br>Quiniela: Rusia-2018</li></a>
<a href='ruleta_activa.php'><li><img src="IMAGENES/ruleta_activa.jpg"/><br>Prónostico: Ruleta Activa</li></a>
<a href='http://www.paulesuyortiz.tk'><li><img src="IMAGENES/poinca.jpg"/><br>POINDCA</li></a>
<a href='http://www.fundacrystal.tk'><li><img src="IMAGENES/fundacrystal.jpg"/><br>Fundación Crystal</li></a>
</ol>
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