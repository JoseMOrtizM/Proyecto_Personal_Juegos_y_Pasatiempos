<?PHP
//OBTENIENDO NOMBRE DEL ARCHIVO PHP ACTUAL
$ruta_actual=$_SERVER["REQUEST_URI"];
$partes1=explode("/",$ruta_actual);
$i=0;
while(isset($partes1[$i])==true){
	$ruta_actual=$partes1[$i];
	$i=$i+1;
}
$partes2=explode("?",$ruta_actual);
$ruta_actual=$partes2[0];
//IMPRIMIENDO NAV
echo "<nav>";
if($ruta_actual=='index.php' or $ruta_actual==''){
	echo "<div><a href='autenticacion.php'>Zona Adm</a></div>";
}
if($ruta_actual=='autenticacion.php' or $ruta_actual=='sudoku.php' or $ruta_actual=='cryptograma.php'or $ruta_actual=='palabra_oculta.php' or $ruta_actual=='pique_y_fama.php' or $ruta_actual=='ruleta_activa.php'){
	echo "<div><a href='index.php'>Volver</a></div>";
}
if($ruta_actual=='zona_adm.php'){
	echo "<div><a href='salir.php'>Salir</a></div>";
}
if($ruta_actual=='ruleta_activa_crud.php' or $ruta_actual=='ver_trafico.php'){
	echo "<div><a href='zona_adm.php'>Zona Principal</a></div>&nbsp<div><a href='salir.php'>Salir</a></div> ";
}
echo "&nbsp";
echo "</nav><p style='border-bottom:#7C5F43 4px double;'></p>";
?>