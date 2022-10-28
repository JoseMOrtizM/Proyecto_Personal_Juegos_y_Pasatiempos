<?php
//CONECTANDO
require ("conexion.php");
//CARGANDO DATOS DE LA VISITA
require ("insertar_trafico.php");
//CANTIAD DE SORTEOS TOTALES DE LA BD
$consulta="SELECT
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$cantidad_de_soreos_totales=$fila['ID'];
//RESCATANDO VALORES DEL FORMULARIO
if(isset($_POST['filtro_sorteos'])==true){
	$filtro_sorteos=$_POST['filtro_sorteos'];
}else{
	$consulta="SELECT COUNT(`ruleta_datos`.ID) AS ID FROM `ruleta_datos`";
	$resultado=mysqli_query($conexion,$consulta);
	$fila=mysqli_fetch_array($resultado);
	$filtro_sorteos=$fila['ID'];
}
if(isset($_POST['filtro_dia_sem'])==true){
	$filtro_dia_sem=$_POST['filtro_dia_sem'];
}else{
	$filtro_dia_sem='Todos';
}
if(isset($_POST['filtro_hora'])==true){
	$filtro_hora=$_POST['filtro_hora'];
}else{
	$filtro_hora='Todas';
}
//ARMANDO VARIABLES SQL
//FILTRO SORTEOS
if(isset($_POST['filtro_sorteos'])==true){
	$rango_min_sorteo=$cantidad_de_soreos_totales-$_POST['filtro_sorteos'];
	$sql_sorteos="AND `ruleta_datos`.ID > '$rango_min_sorteo' ";
}else{
	$sql_sorteos="";
}
//FILTRO DIA SEMANA
if($filtro_dia_sem=='Todos'){
	$sql_dia_sem="";
}else{
	if($filtro_dia_sem=='Lunes'){$dia_selec="0";}else{
	if($filtro_dia_sem=='Martes'){$dia_selec="1";}else{
	if($filtro_dia_sem=='Miércoles'){$dia_selec="2";}else{
	if($filtro_dia_sem=='Jueves'){$dia_selec="3";}else{
	if($filtro_dia_sem=='Viernes'){$dia_selec="4";}else{
	if($filtro_dia_sem=='Sábado'){$dia_selec="5";}else{
	$dia_selec="6";}}}}}}
	$sql_dia_sem="AND WEEKDAY(`ruleta_datos`.FECHA) = '$dia_selec' ";
}
//FILTRO HORA
if($filtro_hora=='Todas'){
	$sql_hora="";
}else{
	$sql_hora="AND `ruleta_datos`.HORA = '$filtro_hora' ";
}
//OBTENIENDO NUMEROS GANADORES Y LA MAXIMA Y MINIMA CANTIDAD DE ACIERTOS PARA UN NÚMERO Y CANTIDAD DE SORTEOS
$consulta="SELECT
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$cantidad_de_soreos=$fila['ID'];
$consulta="SELECT
	`ruleta_datos`.NUMERO AS NUMERO,
	COUNT(`ruleta_datos`.ID) AS SALIDAS
	FROM `ruleta_numeros` 
	INNER JOIN `ruleta_datos` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY NUMERO ORDER BY SALIDAS";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
$salida_max=0;
$salida_min=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$numeros[$i]=$fila['NUMERO'];
	$salidas[$i]=$fila['SALIDAS'];
	$salida_porc[$i]=round(100*($salidas[$i]/$cantidad_de_soreos),1);
	if($i==0){
		$salida_max=$fila['SALIDAS'];
		$salida_porc_max=$salida_porc[$i];
		$salida_min=$fila['SALIDAS'];
		$salida_porc_min=$salida_porc[$i];
	}else{
		if($salida_max<$fila['SALIDAS']){
			$salida_max=$fila['SALIDAS'];
			$salida_porc_max=$salida_porc[$i];
		}else{
			$salida_max=$salida_max;
		}
		if($salida_min>$fila['SALIDAS']){
			$salida_min=$fila['SALIDAS'];
			$salida_porc_min=$salida_porc[$i];
		}else{
			$salida_min=$salida_min;
			$salida_porc_min=$salida_porc[$i];
		}
	}
	$i=$i+1;
}
$cantidad_de_numeros_sql=$i;
//CORRIGIENDO NÚMEROS QUE NO SALEN
$o=0;
if($cantidad_de_numeros_sql==38){
}else{
	$i=0;
	while($i<=37){
		$e=0;
		$verf='error';
		while(isset($numeros[$e])==true){
			if($i==$numeros[$e]){$verf='ok';}
			$e=$e+1;
		}
		if($verf=='error'){
			$numeros_faltantes[$o]=$i;
			$o=$o+1;
		}
		$i=$i+1;
	}
}
//armando array final de números
$u=0;
while(isset($numeros_faltantes[$u])==true){
	$numeros_completos[$u]=$numeros_faltantes[$u];
	$salidas_completas[$u]=0;
	$u=$u+1;
}
$i=0;
while(isset($numeros[$i])==true){
	$numeros_completos[$u]=$numeros[$i];
	$salidas_completas[$u]=$salidas[$i];
	$u=$u+1;
	$i=$i+1;
}
//OBTENIENDO RESULTADOS RESUMEN:
//ROJO Y NEGRO
$consulta="SELECT
	`ruleta_numeros`.COLOR AS COLOR,
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY COLOR ORDER BY COLOR";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$negro=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$rojo=$fila['ID'];
//PAR Y IMPAR
$consulta="SELECT
	`ruleta_numeros`.PAR AS PAR ,
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY PAR  ORDER BY PAR ";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$impar=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$fila=mysqli_fetch_array($resultado);
$par=$fila['ID'];
//COLUMNAS
$consulta="SELECT
	`ruleta_numeros`.COL AS COL ,
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY COL  ORDER BY COL ";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$col_1=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$col_2=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$col_3=$fila['ID'];
//DOCENAS
$consulta="SELECT
	`ruleta_numeros`.DOC AS DOC ,
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY DOC  ORDER BY DOC ";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$doc_1=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$doc_2=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$doc_3=$fila['ID'];
//MITADES
$consulta="SELECT
	`ruleta_numeros`.MIT AS MIT ,
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY MIT  ORDER BY MIT ";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$mit_1=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$mit_2=$fila['ID'];
//SECTORES
$consulta="SELECT
	`ruleta_numeros`.SEC AS SEC ,
	COUNT(`ruleta_datos`.ID) AS ID
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora
	GROUP BY SEC  ORDER BY SEC ";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$sec_a=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$sec_b=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$sec_c=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$sec_d=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$sec_e=$fila['ID'];
$fila=mysqli_fetch_array($resultado);
$sec_f=$fila['ID'];
//FECHAS DESDE Y HASTA DEL FILTRO
$consulta="SELECT
	MIN(`ruleta_datos`.FECHA) AS FECHA_MIN,
	MAX(`ruleta_datos`.FECHA) AS FECHA_MAX
	FROM `ruleta_datos`
	INNER JOIN `ruleta_numeros` ON `ruleta_datos`.NUMERO=`ruleta_numeros`.NUMERO
	WHERE 1 
	$sql_sorteos
	$sql_dia_sem
	$sql_hora";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$fecha_min_filtro=$fila['FECHA_MIN'];
$fecha_max_filtro=$fila['FECHA_MAX'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>RULETA ACTIVA</TITLE>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="Estilo_Principal.css"/>
<script src="Chart.js"></script>
<?php
require ("efecto_entrada.php");
?>
<style>
table{
	margin:auto;
}
section table th{
	margin:0px;
	padding:0px 2px;
	background-color:#CCC;
	border:1px solid #333;
	text-align:center;
	font_size:12px;
}
section table td{
	margin:0px;
	padding:0px 2px;
	background-color:#FFF;
	border:1px solid #333;
	text-align:center;
	font_size:12px;
}
.rojo{
	background-color:#f00;
	color:#fff;
}
.negro{
	background-color:#000;
	color:#fff;
}
.cero{
	background-color:#0f0;
	color:#000;
}
</style>
</head>
<body>
<?php
require ("header.php");
require ("nav.php");
require("aside.php");
?>
<section style='font-size:14px;'>
<table style='width:100%; '>
	<tr>
		<td colspan='2' style='border:0px;'>
			<h6 style='color:#550; font-size:18px;'>Para analizar más detalles, puedes filtrar por:</h6>
			<h6 style='text-align:center; margin:3px auto 10px auto; font-size:16px;'>
				<form name='filtro' action='ruleta_activa.php' method='post'>
					Sorteos: <input type='number' name='filtro_sorteos' max='<?php echo "$cantidad_de_soreos_totales"; ?>' value='<?php echo "$cantidad_de_soreos"; ?>' required style='width:80px;'> 
					Dia: <select name='filtro_dia_sem' required>
						<option><?php echo "$filtro_dia_sem";  ?></option>
						<option>Todos</option>
						<option>Lunes</option>
						<option>Martes</option>
						<option>Miércoles</option>
						<option>Jueves</option>
						<option>Viernes</option>
						<option>Sábado</option>
						<option>Domingo</option>
					</select> 
					Hora: <select name='filtro_hora' required>
						<option><?php echo "$filtro_hora";  ?></option>
						<option>Todas</option>
						<option>09:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
						<option>15:00</option>
						<option>16:00</option>
						<option>17:00</option>
						<option>18:00</option>
						<option>19:00</option>
					</select>
					<br><br>
					<input type='submit' name='boton' value='Filtrar'>
					<br>
				</form>
			</h6>
			<h6 style='color:#500; font-size:14px;'>Los datos filtrados van del día <?php echo "$fecha_min_filtro"; ?> al día <?php echo "$fecha_max_filtro"; ?></h6>
			<table>
				<tr>
					<th>Probables Ganadores</th>
				</tr>
				<tr>
					<td><canvas id="bar" height="200" width="500"></canvas></td>
				</tr>
			</table>
		</td>
		<td rowspan='2' style='border:0px;'>
			<table style='font-size:12px;'>
				<tr>
					<th colspan='4'>Lista Completa</th>
				</tr>
				<tr>
					<th>N°</th><th>Nombre</th><th>IZQ</th><th>DER</th>
				</tr>
				<?php
					$i=0;
					while(isset($numeros_completos[$i])==true){
						$consulta="SELECT * FROM `ruleta_numeros` WHERE NUMERO = '$numeros_completos[$i]' ";
						$resultado=mysqli_query($conexion,$consulta);
						$fila=mysqli_fetch_array($resultado);
						$color=$fila['COLOR'];
						$num=$fila['NUMERO'];
						$nombre=$fila['NOMBRE'];
						$izq=$fila['IZQ'];
						$der=$fila['DER'];
						echo "<tr>";
						echo "<td ";
						if($color=='ROJO'){echo "class='rojo'";}else{if($color=='NEGRO'){echo "class='negro'";}else{echo "class='cero'";}}
						echo ">$num</td>";
						echo "<td>$nombre</td>";
						echo "<td ";
						$consulta1="SELECT COLOR FROM `ruleta_numeros` WHERE NUMERO = '$izq' ";
						$resultado1=mysqli_query($conexion,$consulta1);
						$fila1=mysqli_fetch_array($resultado1);
						$color1=$fila1['COLOR'];
						if($color1=='ROJO'){echo "class='rojo'";}else{if($color1=='NEGRO'){echo "class='negro'";}else{echo "class='cero'";}}
						echo ">$izq</td>";
						echo "<td ";
						$consulta2="SELECT COLOR FROM `ruleta_numeros` WHERE NUMERO = '$der' ";
						$resultado2=mysqli_query($conexion,$consulta2);
						$fila2=mysqli_fetch_array($resultado2);
						$color2=$fila2['COLOR'];
						if($color2=='ROJO'){echo "class='rojo'";}else{if($color2=='NEGRO'){echo "class='negro'";}else{echo "class='cero'";}}
						echo ">$der</td>";
						echo "</tr>";
						$i=$i+1;
					}
				?>
			</table>
		</td>
	</tr>
	<tr>
		<td style='border:0px;'>
			<table style='width:250px; font-size:12px;'>
				<tr>
					<th colspan='10'>Número Ganadores</th>
				</tr>
				<tr>
					<th class='rojo'>Roj</th><td style='font-size:11px;'><?php echo "$rojo"; ?></td>
					<th colspan='2' style='background-color:#fa6;'>1°Col</th><th colspan='2' style='background-color:#a6f;'>2°Col</th><th colspan='2' style='background-color:#6fa;'>3°Col</th>
					<th style='background-color:#caf;'>Par</th><td style='font-size:11px;'><?php echo "$par"; ?></td>
				</tr>
				<tr>
					<th class='negro'>Neg</th><td style='font-size:11px;'><?php echo "$negro"; ?></td>
					<td colspan='2'><?php echo "$col_1"; ?></td>
					<td colspan='2'><?php echo "$col_2"; ?></td>
					<td colspan='2'><?php echo "$col_3"; ?></td>
					<th style='background-color:#fac;'>Imp</th>
					<td style='font-size:11px;'><?php echo "$impar"; ?></td>
				</tr>
				<tr>
					<th rowspan='4'  style='background-color:#fa6;'>1°D</th><td rowspan='4' style='font-size:11px;'><?php echo "$doc_1"; ?></td>
					<th class='rojo'>1</th><td><?php $xxx=1;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>2</th><td><?php $xxx=2;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>3</th><td><?php $xxx=3;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th rowspan='6' style='background-color:#cdf;'>1°M</th><td rowspan='6' style='font-size:11px;'><?php echo "$mit_1"; ?></td>
				</tr>
				<tr>
					<th class='negro'>4</th><td><?php $xxx=4;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>5</th><td><?php $xxx=5;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>6</th><td><?php $xxx=6;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='rojo'>7</th><td><?php $xxx=7;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>8</th><td><?php $xxx=8;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>9</th><td><?php $xxx=9;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='negro'>10</th><td><?php $xxx=10;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>11</th><td><?php $xxx=11;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>12</th><td><?php $xxx=12;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th rowspan='4' style='background-color:#a6f;'>2°D</th><td rowspan='4' style='font-size:11px;'><?php echo "$doc_2"; ?></td>
					<th class='negro'>13</th><td><?php $xxx=13;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>14</th><td><?php $xxx=14;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>15</th><td><?php $xxx=15;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='rojo'>16</th><td><?php $xxx=16;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>17</th><td><?php $xxx=17;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>18</th><td><?php $xxx=18;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='rojo'>19</th><td><?php $xxx=19;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>20</th><td><?php $xxx=20;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>21</th><td><?php $xxx=21;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th rowspan='6' style='background-color:#fcd;'>2°M</th><td rowspan='6' style='font-size:11px;'><?php echo "$mit_2"; ?></td>
				</tr>
				<tr>
					<th class='negro'>22</th><td><?php $xxx=22;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>23</th><td><?php $xxx=23;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>24</th><td><?php $xxx=24;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th rowspan='4' style='background-color:#6fa;'>3°D</th><td rowspan='4' style='font-size:11px;'><?php echo "$doc_3"; ?></td>
					<th class='rojo'>25</th><td><?php $xxx=25;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>26</th><td><?php $xxx=26;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>27</th><td><?php $xxx=27;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='negro'>28</th><td><?php $xxx=28;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>29</th><td><?php $xxx=29;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>30</th><td><?php $xxx=30;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='negro'>31</th><td><?php $xxx=31;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>32</th><td><?php $xxx=32;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>33</th><td><?php $xxx=33;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<th class='rojo'>34</th><td><?php $xxx=34;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='negro'>35</th><td><?php $xxx=35;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th class='rojo'>36</th><td><?php $xxx=36;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
				</tr>
				<tr>
					<td colspan='2'></td><th colspan='2' class='cero'>0</th><td><?php $xxx=0;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td>
					<th colspan='2' class='cero'>00</th><td><?php $xxx=37;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){echo "$salidas[$i]"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "0";} ?></td><td colspan='2'></td>
				</tr>
			</table>
		</td>
		<td style='border:0px;'>
			<table>
				<tr>
					<th>Saildas/Sectores</th>
				</tr>
				<tr>
					<td><canvas id="radar" height="220" width="215"></canvas></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
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
<?php
//DATOS SOBRE ESCRITOS CON ANIMACIÓN EN LA GRÁFICA 2
$lado=220;
$radio=0.4*($lado/2);
$pos1x=$lado/2;
$pos1y=($lado/2)-$radio;
$var1=$sec_a;
$pos2x=($lado/2)+($radio*sin(3.1415269/3));
$pos2y=($lado/2)-($radio*sin(3.1415269/6));
$var2=$sec_b;
$pos3x=($lado/2)+($radio*sin(3.1415269/3));
$pos3y=($lado/2)+($radio*sin(3.1415269/6));
$var3=$sec_c;
$pos4x=$lado/2;
$pos4y=($lado/2)+$radio;
$var4=$sec_d;
$pos5x=($lado/2)-($radio*sin(3.1415269/3));
$pos5y=($lado/2)+($radio*sin(3.1415269/6));
$var5=$sec_e;
$pos6x=($lado/2)-($radio*sin(3.1415269/3));
$pos6y=($lado/2)-($radio*sin(3.1415269/6));
$var6=$sec_f;
?>
<script>
function comenzar(){

	var barChartData = {
			labels : ["<?php echo "$numeros_completos[0]"; ?>","<?php echo "$numeros_completos[1]"; ?>","<?php echo "$numeros_completos[2]"; ?>","<?php echo "$numeros_completos[3]"; ?>","<?php echo "$numeros_completos[4]"; ?>","<?php echo "$numeros_completos[5]"; ?>","<?php echo "$numeros_completos[6]"; ?>","<?php echo "$numeros_completos[7]"; ?>","<?php echo "$numeros_completos[8]"; ?>","<?php echo "$numeros_completos[9]"; ?>","<?php echo "$numeros_completos[10]"; ?>","<?php echo "$numeros_completos[11]"; ?>","<?php echo "$numeros_completos[12]"; ?>","<?php echo "$numeros_completos[13]"; ?>","<?php echo "$numeros_completos[14]"; ?>","<?php echo "$numeros_completos[15]"; ?>","<?php echo "$numeros_completos[15]"; ?>","<?php echo "$numeros_completos[17]"; ?>","<?php echo "$numeros_completos[18]"; ?>","<?php echo "$numeros_completos[19]"; ?>"],
			datasets : [
				{
					fillColor : "#00C",
					strokeColor : "#009",
					data : [<?php $zzz=$salida_max-$salidas_completas[0]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[1]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[2]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[3]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[4]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[5]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[6]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[7]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[8]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[9]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[10]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[11]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[12]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[13]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[14]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[15]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[16]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[17]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[18]; echo "$zzz"; ?>,<?php $zzz=$salida_max-$salidas_completas[19]; echo "$zzz"; ?>]
				}
			]
		};

		var radarChartData = {
			labels : ["0","28","9","26","30","11","7","20","32","17","5","22","34","15","3","24","36","13","1","37","27","10","25","29","12","8","19","31","18","6","21","33","16","4","23","35","14","2"],
			datasets : [
				{
					fillColor : "rgba(150,150,0,0.3)",
					strokeColor : "rgba(150,150,0,0.3)",
					pointSize : "rgba(150,150,0,0.3)",
					pointStrokeColor : "rgba(150,150,0,0.3)",
					data : [<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>]
				},
				{
					fillColor : "rgba(0,150,0,0.3)",
					strokeColor : "rgba(0,150,0,0.3)",
					pointSize : "rgba(0,150,0,0.3)",
					pointStrokeColor : "rgba(0,150,0,0.3)",
					data : [0,0,0,0,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
				},
				{
					fillColor : "rgba(0,0,150,0.3)",
					strokeColor : "rgba(0,0,150,0.3)",
					pointSize : "rgba(0,0,150,0.3)",
					pointStrokeColor : "rgba(0,0,150,0.3)",
					data : [0,0,0,0,0,0,0,0,0,0,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
				},
				{
					fillColor : "rgba(150,0,150,0.3)",
					strokeColor : "rgba(150,0,150,0.3)",
					pointSize : "rgba(150,0,150,0.3)",
					pointStrokeColor : "rgba(150,0,150,0.3)",
					data : [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
				},
				{
					fillColor : "rgba(150,0,0,0.3)",
					strokeColor : "rgba(150,0,0,0.3)",
					pointSize : "rgba(150,0,0,0.3)",
					pointStrokeColor : "rgba(150,0,0,0.3)",
					data : [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,0,0,0,0,0,0,0,0,0]
				},
				{
					fillColor : "rgba(166,94,46,0.3)",
					strokeColor : "rgba(166,94,46,0.3)",
					pointSize : "rgba(166,94,46,0.3)",
					pointStrokeColor : "rgba(166,94,46,0.3)",
					data : [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,<?php echo "$salida_porc_max"; ?>,0,0,0]
				},
				{
					fillColor : "rgba(150,150,150,0.3)",
					strokeColor : "rgba(150,150,150,0.6)",
					pointColor : "rgba(0,0,0,1)",
					pointStrokeColor : "rgba(0,0,0,1)",
					data : [
					<?php $xxx=0;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=28;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=9;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=26;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=30;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=11;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=7;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=20;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=32;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=17;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=5;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=22;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=34;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=15;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=3;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=24;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=36;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=13;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=1;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=37;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=27;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=10;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=25;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=29;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=12;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=8;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=19;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=31;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=18;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=6;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=21;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=33;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=16;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=4;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=23;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=35;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=14;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>,
					<?php $xxx=2;$i=0;$verf=0; while(isset($numeros[$i])==true){if($xxx==$numeros[$i]){$yyy=$salida_porc[$i]; echo "$yyy"; $verf=1;} $i=$i+1;} if($verf==1){}else{echo "$salida_porc_max";} ?>
					]
				}
			]
		};
	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
	new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
	
	
	setInterval(animacion,50);
}

function animacion(){

	var elemento=document.getElementById("radar");
	lienzo=elemento.getContext("2d");
	lienzo.fillStyle = "#555";
	lienzo.font="14px verdana blue";
	lienzo.textAlign="center";
	lienzo.textBaseline="top";
	lienzo.fillText("<?php echo "$var1"; ?>",<?php echo "$pos1x";?>,<?php echo "$pos1y";?>);
	lienzo.fillText("<?php echo "$var2"; ?>",<?php echo "$pos2x";?>,<?php echo "$pos2y";?>);
	lienzo.fillText("<?php echo "$var3"; ?>",<?php echo "$pos3x";?>,<?php echo "$pos3y";?>);
	lienzo.fillText("<?php echo "$var4"; ?>",<?php echo "$pos4x";?>,<?php echo "$pos4y";?>);
	lienzo.fillText("<?php echo "$var5"; ?>",<?php echo "$pos5x";?>,<?php echo "$pos5y";?>);
	lienzo.fillText("<?php echo "$var6"; ?>",<?php echo "$pos6x";?>,<?php echo "$pos6y";?>);
}
window.addEventListener("load",comenzar,false);
</script>