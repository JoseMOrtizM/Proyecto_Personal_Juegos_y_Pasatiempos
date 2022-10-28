<?php
session_start();
if(!isset($_SESSION["usuario_ADM"])){header("location:Salir.php");}
//usuario_ADM
$user=$_SESSION["usuario_ADM"];
//conexion
require ("conexion.php");
//////////RECATANDO DATOS DEL FILTRO
//AÑO
if(isset($_POST['ano'])==true){
	$ano=$_POST['ano'];
}else{
	$consulta="SELECT YEAR(MAX(FECHA)) AS ANO FROM `trafico`";
	$resultado=mysqli_query($conexion,$consulta);
	$fila=mysqli_fetch_array($resultado);
	$ano=$fila['ANO'];
}
//IP CLIENTE
if(isset($_POST['ip_cliente'])==true){
	$ip_cliente=$_POST['ip_cliente'];
}else{
	$ip_cliente='Todas';
}
//PAGINAS VISITADAS
if(isset($_POST['pagina_visitada'])==true){
	$pagina_visitada=$_POST['pagina_visitada'];
}else{
	$pagina_visitada='Todas';
}
//////////ADAPTANDO VARIABLES DEL FILTRO PARA SENTENCIA SQL
//IP CLIENTE
if($ip_cliente=='Todas'){
	$sql_ip_cliente='';
}else{
	$sql_ip_cliente="AND IP = '$ip_cliente'";
}
//PAGINAS VISIATAS
if($pagina_visitada=='Todas'){
	$sql_pagina_visitada='';
}else{
	$sql_pagina_visitada="AND PAGINA = '$pagina_visitada' ";
}
//////////ARMANDO LOS ARRAYS DE IP CLIENTE Y PAGINAS VISITADAS
//AÑOS
$consulta="SELECT YEAR(FECHA) AS ANO FROM `trafico` GROUP BY ANO ORDER BY ANO";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$anos[$i]=$fila['ANO'];
	$i=$i+1;
}
//IPS CLIENTES
$consulta="SELECT IP FROM `trafico` GROUP BY IP ORDER BY IP";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$ips[$i]=$fila['IP'];
	$i=$i+1;
}
//PAGINAS VISITADAS
$consulta="SELECT PAGINA FROM `trafico` GROUP BY PAGINA ORDER BY PAGINA";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$paginas[$i]=$fila['PAGINA'];
	$i=$i+1;
}
///////////OBTENIENDO DATOS DE GRAFICAS
//GRAFICA 1
$consulta="SELECT 
	MONTH(FECHA) AS MES, 
	COUNT(ID) AS VISITAS 
	FROM `trafico` 
	WHERE 1	
	AND YEAR(FECHA) = '$ano' 
	$sql_ip_cliente
	$sql_pagina_visitada
	GROUP BY MES";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$mes_g1[$i]=$fila['MES'];
	$visitas_g1[$i]=$fila['VISITAS'];
	$i=$i+1;
}
//GRAFICA 2
$consulta="SELECT 
	IP AS IP, 
	COUNT(ID) AS VISITAS 
	FROM `trafico` 
	WHERE 1	
	AND YEAR(FECHA) = '$ano' 
	$sql_ip_cliente
	$sql_pagina_visitada
	GROUP BY IP";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$ips_g2[$i]=$fila['IP'];
	$visitas_g2[$i]=$fila['VISITAS'];
	$i=$i+1;
}
//GRAFICA 3
$consulta="SELECT 
	PAGINA AS PAGINA, 
	COUNT(ID) AS VISITAS 
	FROM `trafico` 
	WHERE 1	
	AND YEAR(FECHA) = '$ano' 
	$sql_ip_cliente
	$sql_pagina_visitada
	GROUP BY PAGINA";
$resultado=mysqli_query($conexion,$consulta);
$i=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$paginas_g3[$i]=$fila['PAGINA'];
	$visitas_g3[$i]=$fila['VISITAS'];
	$i=$i+1;
}
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
<script type="text/javascript" src="jquery.min.js"></script>
<script src="jquery.canvasjs.min.js"></script>
<style>
section table{
	width:98%;
	margin:auto;
}
section table th{
	border:solid 1px #000;
	background-color:#ddd;
	text-align:center;
}
section table td{
	border:solid 1px #000;
	background-color:#fff;
	text-align:center;
}
</style>
</head>
<body>
<?php
require ("header.php");
require ("nav.php");
require("aside.php");
?>
<section>
<h4 style='text-align:center;'>Resumen de Visitas del Sitio</h4>
<form name='filtro_trafico' action='ver_trafico.php' method='post'>
<table>
	<tr>
		<th>Año:<br><select name='ano'><option><?php echo "$ano"; ?></option>
		<?php
		$i=0;
		while(isset($anos[$i])==true){
			echo "<option>$anos[$i]</option>";
			$i=$i+1;
		}
		?>
		</select></th>
		<th>IP del Cliente:<br><select name='ip_cliente'><option><?php echo "$ip_cliente"; ?></option><option>Todas</option>
		<?php
		$i=0;
		while(isset($ips[$i])==true){
			echo "<option>$ips[$i]</option>";
			$i=$i+1;
		}
		?>
		</select></th>
		<th>Pagina Visitada:<br><select name='pagina_visitada'><option><?php echo "$pagina_visitada"; ?></option><option>Todas</option>
		<?php
		$i=0;
		while(isset($paginas[$i])==true){
			echo "<option>$paginas[$i]</option>";
			$i=$i+1;
		}
		?>
		</select></th>
		<th><input type='submit' name='filtrar' value='Filtrar'></th>
	</tr>
</table>
</form>
<br>
<table>
	<tr>
		<td colspan='2'><div id='grafica_1' style='height:150px; width:100%; margin:auto;'></div></td>
	</tr>
	<tr>
		<td><div id='grafica_2' style='height:150px; width:50%; margin:auto;'></div></td>
		<td><div id='grafica_3' style='height:150px; width:50%; margin:auto;'></div></td>
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
<script type="text/javascript">

	$(function () {
		var options = {
			title: {
				text: "Visitas por Mes"
			},
			theme: "theme1",
			exportEnabled: false,
			animationEnabled: true,
			axisX: {
				interval: 1
			},
			axisY: {
				minimum: 0,
			},
			legend: {
			cursor: "pointer",
			verticalAlign: "top",
			horizontalAlign: "center",
			itemclick: function (e) {
			if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			} else {
				e.dataSeries.visible = true;
			}
				e.chart.render();
				}
			},
			data: [{
				showInLegend: false,
				type: "column",
				name: "Visitas",
				color: "Blue",
				dataPoints: [
					<?php
						$e=0;
						while(isset($mes_g1[$e])==true){
							echo "{ x: $mes_g1[$e], y: $visitas_g1[$e], label: '$mes_g1[$e]'}";
							$e=$e+1;
							if(isset($mes_g1[$e])==true){echo ",";}else{}
						}
					?>
				]
			}]
		};
		$("#grafica_1").CanvasJSChart(options);
	});

	$(function () {
		var options = {
			title: {
				text: "Visitas por IP"
			},
			exportEnabled: false,
			animationEnabled: true,
			legend: {
				verticalAlign: "top",
				horizontalAlign: "center"
			},
			data: [
			{
				type: "pie",
				showInLegend: false,
				toolTipContent: "{legendText}: <strong>{y} Visitas - #percent %</strong>",
				indexLabel: "",
				dataPoints: [
					<?php
						$e=0;
						while(isset($ips_g2[$e])==true){
							echo "{ y: $visitas_g2[$e], legendText: '<strong>IP:</strong> $ips_g2[$e]'}";
							$e=$e+1;
							if(isset($ips_g2[$e])==true){echo ",";}else{}
						}
					?>
				]
			}
			]
		};
		$("#grafica_2").CanvasJSChart(options);
	});
	
	$(function () {
		var options = {
			title: {
				text: "Visitas por Página"
			},
			exportEnabled: false,
			animationEnabled: true,
			legend: {
				verticalAlign: "top",
				horizontalAlign: "center"
			},
			data: [
			{
				type: "pie",
				showInLegend: false,
				toolTipContent: "{legendText}: <strong>{y} Visitas - #percent %</strong>",
				indexLabel: "",
				dataPoints: [
					<?php
						$e=0;
						while(isset($paginas_g3[$e])==true){
							echo "{ y: $visitas_g3[$e], legendText: '<strong>Página:</strong> $paginas_g3[$e]'}";
							$e=$e+1;
							if(isset($paginas_g3[$e])==true){echo ",";}else{}
						}
					?>
				]
			}
			]
		};
		$("#grafica_3").CanvasJSChart(options);
	});
</script>
					