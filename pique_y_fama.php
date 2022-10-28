<?php
//CONECTANDO
require ("conexion.php");
//CARGANDO DATOS DE LA VISITA
require ("insertar_trafico.php");
//OBTENIENDO DIGITOS DEL NÚMERO OCULTO AL AZAR O DEL FORMULARIO
if(isset($_POST['num_1'])==true){
	$num_1=$_POST['num_1'];
}else{
	$num_1=rand(1,9);
}
if(isset($_POST['num_2'])==true){
	$num_2=$_POST['num_2'];
}else{
	$num_2=rand(1,9);
	while($num_1==$num_2){
		$num_2=rand(1,9);
	}
}
if(isset($_POST['num_3'])==true){
	$num_3=$_POST['num_3'];
}else{
	$num_3=rand(1,9);
	while($num_1==$num_3 or $num_2==$num_3){
		$num_3=rand(1,9);
	}
}
if(isset($_POST['num_4'])==true){
	$num_4=$_POST['num_4'];
}else{
	$num_4=rand(1,9);
	while($num_1==$num_4 or $num_2==$num_4 or $num_3==$num_4){
		$num_4=rand(1,9);
	}
}
//CALCULANDO PISTAS PIQUE Y FAMA
$mensaje_de_error='';
$i=0;
$e=1;
while($i<=9){
	if(isset($_POST["num_1_" . $e])==true and isset($_POST["num_2_" . $e])==true and isset($_POST["num_3_" . $e])==true and isset($_POST["num_4_" . $e])==true){
		if($_POST["num_1_" . $e]=='' and $_POST["num_2_" . $e]=='' and $_POST["num_3_" . $e]=='' and $_POST["num_4_" . $e]==''){
			$valor_num_1[$i]='';
			$valor_num_2[$i]='';
			$valor_num_3[$i]='';
			$valor_num_4[$i]='';
			$pista_pique[$i]=0;
			$pista_fama[$i]=0;
		}else{
			$valor_num_1[$i]=$_POST["num_1_" . $e];
			$valor_num_2[$i]=$_POST["num_2_" . $e];
			$valor_num_3[$i]=$_POST["num_3_" . $e];
			$valor_num_4[$i]=$_POST["num_4_" . $e];
			if($valor_num_1[$i]==$valor_num_2[$i] or $valor_num_1[$i]==$valor_num_3[$i] or $valor_num_1[$i]==$valor_num_4[$i] or $valor_num_2[$i]==$valor_num_3[$i] or $valor_num_2[$i]==$valor_num_4[$i] or $valor_num_3[$i]==$valor_num_4[$i]){
				$mensaje_de_error=$mensaje_de_error . "<br>ERROR-$e: Hay una o varias Cifras repetidas en el turno $e";
			}
			
			$pista_pique[$i]=0;
			$pista_fama[$i]=0;
			if($num_1==$valor_num_1[$i]){
				$pista_fama[$i]=$pista_fama[$i]+1;
			}else{
				if($valor_num_1[$i]==$num_2 or $valor_num_1[$i]==$num_3 or $valor_num_1[$i]==$num_4){
					$pista_pique[$i]=$pista_pique[$i]+1;
				}
			}
			if($num_2==$valor_num_2[$i]){
				$pista_fama[$i]=$pista_fama[$i]+1;
			}else{
				if($valor_num_2[$i]==$num_1 or $valor_num_2[$i]==$num_3 or $valor_num_2[$i]==$num_4){
					$pista_pique[$i]=$pista_pique[$i]+1;
				}
			}
			if($num_3==$valor_num_3[$i]){
				$pista_fama[$i]=$pista_fama[$i]+1;
			}else{
				if($valor_num_3[$i]==$num_1 or $valor_num_3[$i]==$num_2 or $valor_num_3[$i]==$num_4){
					$pista_pique[$i]=$pista_pique[$i]+1;
				}
			}
			if($num_4==$valor_num_4[$i]){
				$pista_fama[$i]=$pista_fama[$i]+1;
			}else{
				if($valor_num_4[$i]==$num_1 or $valor_num_4[$i]==$num_2 or $valor_num_4[$i]==$num_3){
					$pista_pique[$i]=$pista_pique[$i]+1;
				}
			}
		}
	}else{
		$valor_num_1[$i]='';
		$valor_num_2[$i]='';
		$valor_num_3[$i]='';
		$valor_num_4[$i]='';
		$pista_pique[$i]=0;
		$pista_fama[$i]=0;
	}
	$i=$i+1;
	$e=$e+1;
}
//PREPARANDO EL NÚMERO OCULTO PARA IMPRIMIR
$num_1_imp='?';
$num_2_imp='?';
$num_3_imp='?';
$num_4_imp='?';
$gano='NO';
$i=0;
while($i<=9){
	if($pista_fama[$i]==4){
		$num_1_imp=$num_1;
		$num_2_imp=$num_2;
		$num_3_imp=$num_3;
		$num_4_imp=$num_4;
		$gano='SI';
	}
	$i=$i+1;
}
/*
//PRUEBA DE VARIABLES
echo "NÚMERO OCULTO REAL: $num_1-$num_2-$num_3-$num_4<br>";
echo "NÚMERO OCULTO MÁSCARA: $num_1_imp-$num_2_imp-$num_3_imp-$num_4_imp<br>";

$i=0;
$e=1;
while($i<=9){
	$p_01=$_POST["num_1_$e"];
	$p_02=$_POST["num_2_$e"];
	$p_03=$_POST["num_3_$e"];
	$p_04=$_POST["num_4_$e"];
	echo "PASO DE PARÁMETROS: $p_01, $p_02, $p_03, $p_04<br>";
	echo "Renglon-$e: $valor_num_1[$i]-$valor_num_2[$i]-$valor_num_3[$i]-$valor_num_4[$i] Pique-$e: $pista_pique[$i] Fama-$e: $pista_fama[$i]<br>";
	$i=$i+1;
	$e=$e+1;
}
*/
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>PIQUE Y FAMA</TITLE>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="Estilo_Principal.css"/>
<style>
section table td{
	border:#000 solid 1px;
	margin:0px 0px;
	padding:0px 1px;
	text-align:center;
	vertical-align:middle;
	font-size:14px;
}
section table th{
	border:#000 solid 1px;
	margin:0px 0px;
	padding:0px 1px;
	text-align:center;
	vertical-align:middle;
	background-color:#DDD;
	font-size:14px;
}
section table ul{
	list-style:none;
	list-style-type:disc;
	padding:3px;
	list-style-position:inside;
	text-align:justify;
	font-size:14px;
}
input[type='number']{
	-moz-appearance:textfield;
	margin:0px;
	padding:1px;
	width:94%;
	text-align:center;
	background-color:#FFD;
	cursor:pointer;
	border:#000 solid 0px;
	text-decoration:none;
}
input[type='number']::-webkit-inner-spin-button, input[type='number']::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
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
<div style='text-align:center; margin:auto;'><h2>PIQUE Y FAMA</h2></div><br>
<table>
    <tr>
    	<th colspan='8'><h5>Encuentra el número oculto (????)</h5></th>
    	<th><form name=´nuevo_juego´ action='pique_y_fama.php' method='post'><input type='submit' name='enviar' value='Nuevo Juego'></form></th>
    </tr>
    <tr>
    	<th>N°</th>
    	<td><?php echo "$num_1_imp"; ?></td>
    	<td><?php echo "$num_2_imp"; ?></td>
    	<td><?php echo "$num_3_imp"; ?></td>
    	<td><?php echo "$num_4_imp"; ?></td>
    	<th rowspan='2'>Botón</th>
    	<th colspan='2'>Pistas</th>
    	<th>Instrucciones</th>
    </tr>
    <tr>
    	<th>Turnos</th>
    	<th>A</th>
    	<th>B</th>
    	<th>C</th>
    	<th>D</th>
    	<th>Piques</th>
    	<th>Famas</th>
    	<td rowspan='11' style="vertical-align:text-top; width:45%;">
		<?php
		if($gano=='NO'){
			echo "
				<ul>
						<li>Encuentra en un máximo de 10 intentos el ¡Número Oculto! de 4 Dígitos (del 1 al 9) que no se repiten (A-B-C-D), utilizando solamente las pistas: Piques y Famas.</li>
						<li>Los dígitos del número ha adivinar se esconde en las 4 casillas a la derecha (????).</li>
						<li>A medida que coloques dígitos en las columnas A, B, C y D, y luego de pulsar el boton -Verificar-, irán apareciendo las pistas (Piques y Famas).</li>
						<li>Los Piques son la cantidad de dígitos acertados en otra posición.</li>
						<li>Las Famas son la cantidad de dígitos acertados en su posición correcta.</li>
					</ul>$mensaje_de_error";
		}else{
			echo "$mensaje_de_error<br><br><br><br><h3 style='color:red;'>Felicidades Has Ganado</h3>";
		}
		?>
		</td>
    </tr>
  	<?php
    $i=0;
	$e=1;
	while($i<=9){
		echo "<tr>
			<form name='consultar' method='post' action='pique_y_fama.php'>
			<th>$e</th>
			<td><input type='number' name='num_1_$e' max='9' min='0' value='$valor_num_1[$i]'></td>
			<td><input type='number' name='num_2_$e' max='9' min='0' value='$valor_num_2[$i]'></td>
			<td><input type='number' name='num_3_$e' max='9' min='0' value='$valor_num_3[$i]'></td>
			<td><input type='number' name='num_4_$e' max='9' min='0' value='$valor_num_4[$i]'></td>
			<td><input type='submit' name='enviar_$e' value='Verificar'></td>";
		echo "<input type='hidden' name='num_1' value='$num_1'>";
		echo "<input type='hidden' name='num_2' value='$num_2'>";
		echo "<input type='hidden' name='num_3' value='$num_3'>";
		echo "<input type='hidden' name='num_4' value='$num_4'>";
		
		if($i==1){
			$o=0;
			$u=1;
			while($o<=0){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==2){
			$o=0;
			$u=1;
			while($o<=1){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==3){
			$o=0;
			$u=1;
			while($o<=2){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==4){
			$o=0;
			$u=1;
			while($o<=3){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==5){
			$o=0;
			$u=1;
			while($o<=4){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==6){
			$o=0;
			$u=1;
			while($o<=5){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==7){
			$o=0;
			$u=1;
			while($o<=6){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==8){
			$o=0;
			$u=1;
			while($o<=7){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		if($i==9){
			$o=0;
			$u=1;
			while($o<=8){
				echo "<input type='hidden' name='num_1_$u' value='$valor_num_1[$o]'>";
				echo "<input type='hidden' name='num_2_$u' value='$valor_num_2[$o]'>";
				echo "<input type='hidden' name='num_3_$u' value='$valor_num_3[$o]'>";
				echo "<input type='hidden' name='num_4_$u' value='$valor_num_4[$o]'>";
				$o=$o+1;
				$u=$u+1;
			}
		}
		echo "</form>
			<th>$pista_pique[$i]</th>
			<th>$pista_fama[$i]</th>
			</tr>";
		$i=$i+1;
		$e=$e+1;
	}
	?>
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