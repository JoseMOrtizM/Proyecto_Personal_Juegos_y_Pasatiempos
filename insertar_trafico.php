<?php
//OBTENIENDO FECHA HORA IP DEL CLIENTE Y RUTA ACTUAL
$fecha=date("Y-m-d");
$hora_i=date("h")+6;
$min_i=date("m")+30;
$hora=date("$hora_i:$min_i");
$ip=$_SERVER['REMOTE_ADDR'];
$ruta_actual=$_SERVER["REQUEST_URI"];
$partes1=explode("/",$ruta_actual);
$i=0;
while(isset($partes1[$i])==true){
	$ruta_actual=$partes1[$i];
	$i=$i+1;
}
$partes2=explode("?",$ruta_actual);
$ruta_actual=$partes2[0];
if($ruta_actual==''){$ruta_actual='index.php';}
$consulta="INSERT INTO `trafico`(FECHA, IP, HORA, PAGINA) VALUES ('$fecha','$ip','$hora','$ruta_actual')";
$resultado=mysqli_query($conexion,$consulta);
?>