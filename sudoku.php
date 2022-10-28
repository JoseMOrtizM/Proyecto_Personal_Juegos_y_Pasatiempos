<?php
//CONECTANDO
require ("conexion.php");
//CARGANDO DATOS DE LA VISITA
require ("insertar_trafico.php");
//OBTENIENDO CANTIDAD DE SUDOKUS
$consulta="SELECT COUNT(ID) AS NUM_SUDOKUS FROM `sudokus`";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$nun_sudokus=$fila["NUM_SUDOKUS"];
//ELIGIENDO Y OBTENIENDO SUDOKU AL AZAR O POR FORM
if(isset($_POST['id_elegido'])){
	$prueba=$_POST['id_elegido'];
	if($prueba=="Aleatorio"){
		$id_elegido=rand(1, $nun_sudokus);
	}else{
		$id_elegido=$_POST['id_elegido'];
	}
}else{
	$id_elegido=rand(1, $nun_sudokus);
}
//DEFINIENDO NIVEL
if(isset($_POST['nivel'])){
	$nivel=$_POST['nivel'];
	if($nivel=="Aleatorio"){
		$nivel_aleatorio=rand(1,4);
		if($nivel_aleatorio==1){$nivel="FACIL";}
		if($nivel_aleatorio==2){$nivel="MEDIO";}
		if($nivel_aleatorio==3){$nivel="DIFICIL";}
		if($nivel_aleatorio==4){$nivel="IMPOSIBLE";}
	}
}else{
	$nivel_aleatorio=rand(1,4);
	if($nivel_aleatorio==1){$nivel="FACIL";}
	if($nivel_aleatorio==2){$nivel="MEDIO";}
	if($nivel_aleatorio==3){$nivel="DIFICIL";}
	if($nivel_aleatorio==4){$nivel="IMPOSIBLE";}
}
//ELIGIENDO Y OBTENIENDO SUDOKU AL AZAR O POR FORM
if(isset($_POST['id_elegido'])){
	$prueba=$_POST['id_elegido'];
	if($prueba=="Aleatorio"){
		$id_elegido=rand(1, $nun_sudokus);
	}else{
		$id_elegido=$_POST['id_elegido'];
	}
}else{
	$id_elegido=rand(1, $nun_sudokus);
}
//DEFINIENDO NÚMEROS A MOSTRAR EN LA PLANTILLA DEL PROBLEMA
if(isset($_POST['solucion'])){
	//CASO MOSTRAR SOLUCIÓN
	$i=1;
	$col=0;
	while($col<=8){
		$fil=0;
		while($fil<=8){
			$mostrar[$col][$fil]=$_POST["mostrar_" . $i];
			$ver[$col][$fil]=$_POST["ver_" . $i];
			$fil=$fil+1;
			$i=$i+1;
		}
		$col=$col+1;
	}
}else{
	//CASO NO MOSTRAR SOLUCIÓN
	//PONIENDO EL ARRAY DE MOSTRAR NÚMEROS EN CERO
	$i=1;
	$col=0;
	while($col<=8){
		$fil=0;
		while($fil<=8){
			$mostrar[$col][$fil]=0;
			$fil=$fil+1;
			$i=$i+1;
		}
		$col=$col+1;
	}
	//PARA NIVEL FACIL MOSTRAR ENTRE 42 Y 50 NÚMEROS
	//PARA NIVEL MEDIO MOSTRAR ENTRE 33 Y 41 NÚMEROS
	//PARA NIVEL DIFICIL MOSTRAR ENTRE 24 Y 32 NÚMEROS
	//PARA NIVEL IMPOSIBLE MOSTRAR ENTRE 15 Y 23 NÚMEROS
	if($nivel=='FACIL'){
		$num_mostrar_nivel=rand(42,50);
	}else{if($nivel=='MEDIO'){
		$num_mostrar_nivel=rand(33,41);
	}else{if($nivel=='DIFICIL'){
		$num_mostrar_nivel=rand(24,32);
	}else{if($nivel=='IMPOSIBLE'){
		$num_mostrar_nivel=rand(15,23);
	}}}}
	$cta_num_mostrado="FALTA";
	while($cta_num_mostrado=="FALTA"){
		$aleatorio_A=rand(0,8);
		$aleatorio_B=rand(0,8);
		$mostrar[$aleatorio_A][$aleatorio_B]=1;
		//CONTANDO LOS NÚMEROS MOSTRADOS QUE LLEVAMOS
		$contador=0;
		$i=0;
		while($i<=8){
			$e=0;
			while($e<=8){
				if($mostrar[$i][$e]==1){$contador=$contador+1;}else{}
				$e=$e+1;
			}
			$i=$i+1;
		}
		if($contador==$num_mostrar_nivel){$cta_num_mostrado="OK";}else{}
	}
	
	//DEFINIENDO SOLUCION
	if(isset($_POST['solucion'])){
		$solucion=$_POST['solucion'];
	}else{
		$solucion="NO";
	}
	//BUSCANDO SUDOKU EN LA BD
	$consulta="SELECT SUDOKU FROM `sudokus` WHERE ID='$id_elegido'";
	$resultado=mysqli_query($conexion,$consulta);
	$fila=mysqli_fetch_array($resultado);
	$cadena_de_array_sudoku_elegido=$fila["SUDOKU"];
	$array_sudoku_elegido=explode(",",$cadena_de_array_sudoku_elegido);
	$o=0;
	$i=0;
	while($i<=8){
		$e=0;
		while($e<=8){
			$array_sudoku_selec[$i][$e]=$array_sudoku_elegido[$o];
			$e=$e+1;
			$o=$o+1;
		}
		$i=$i+1;
	}
	//ASIGNANDO NÚMEROS DEL 101 AL 109 ANTES DE ASIGNAR ALEATORIOS 
	$i=0;
	while($i<=8){
		$num_aleat[$i]=100+$i;
		$i=$i+1;
	}
	//ASIGNANDO NÚMEROS AL AZAR A LA MATRIZ ORIGINAL
	$i=0;
	while($i<=8){
		$num_aleat[$i]=rand(1,9);
		while($num_aleat[0]==$num_aleat[1] or $num_aleat[0]==$num_aleat[2] or $num_aleat[0]==$num_aleat[3] or $num_aleat[0]==$num_aleat[4] or $num_aleat[0]==$num_aleat[5] or $num_aleat[0]==$num_aleat[6] or $num_aleat[0]==$num_aleat[7] or $num_aleat[0]==$num_aleat[8] or $num_aleat[1]==$num_aleat[2] or $num_aleat[1]==$num_aleat[3] or $num_aleat[1]==$num_aleat[4] or $num_aleat[1]==$num_aleat[5] or $num_aleat[1]==$num_aleat[6] or $num_aleat[1]==$num_aleat[7] or $num_aleat[1]==$num_aleat[8] or $num_aleat[2]==$num_aleat[3] or $num_aleat[2]==$num_aleat[4] or $num_aleat[2]==$num_aleat[5] or $num_aleat[2]==$num_aleat[6] or $num_aleat[2]==$num_aleat[7] or $num_aleat[2]==$num_aleat[8] or $num_aleat[3]==$num_aleat[4] or $num_aleat[3]==$num_aleat[5] or $num_aleat[3]==$num_aleat[6] or $num_aleat[3]==$num_aleat[7] or $num_aleat[3]==$num_aleat[8] or $num_aleat[4]==$num_aleat[5] or $num_aleat[4]==$num_aleat[6] or $num_aleat[4]==$num_aleat[7] or $num_aleat[4]==$num_aleat[8] or $num_aleat[5]==$num_aleat[6] or $num_aleat[5]==$num_aleat[7] or $num_aleat[5]==$num_aleat[8] or $num_aleat[6]==$num_aleat[7] or $num_aleat[6]==$num_aleat[8] or $num_aleat[7]==$num_aleat[8]){
			$num_aleat[$i]=rand(1,9);
		}
		$i=$i+1;
	}
	//CARGANDO NUMEROS ALEATORIOS EN PLANTILLA ORIGINAL 123456789
	$i=0;
	$col=0;
	while($col<=8){
		if($col==1){$i=3;}
		if($col==2){$i=6;}
		if($col==3){$i=1;}
		if($col==4){$i=4;}
		if($col==5){$i=7;}
		if($col==6){$i=2;}
		if($col==7){$i=5;}
		if($col==8){$i=8;}
		$fil=0;
		while($fil<=8){
			$celda[$col][$fil]=$num_aleat[$i];
			$fil=$fil+1;
			if($i==8){$i=0;}else{$i=$i+1;}
		}
		$col=$col+1;
	}
	//PONIENDO TODOS NUMEROS DE LA MATRIS DEL PROBLEMA EN CERO
	$i=0;
	while($i<=8){
		$e=0;
		while($e<=8){
			$ver[$i][$e]=0;
			$e=$e+1;
		}
		$i=$i+1;
	}
	//REASIGNANDO NUMEROS A LA MATRIS DEL PROBLEMA
	$fil_pos=0;
	while($fil_pos<=8){
		$col_pos=0;
		while($col_pos<=8){
			$fil_sud=0;
			while($fil_sud<=8){
				$col_sud=0;
				while($col_sud<=8){
					if($array_sudoku_selec[$fil_pos][$col_pos]=="[" . $fil_sud . "][" . $col_sud . "]"){
						$ver[$fil_pos][$col_pos]=$celda[$fil_sud][$col_sud];
					}
					$col_sud=$col_sud+1;
				}
				$fil_sud=$fil_sud+1;
			}
			$col_pos=$col_pos+1;
		}
		$fil_pos=$fil_pos+1;
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>SUDOKU</TITLE>
<link rel="stylesheet" href="Estilo_Principal.css"/>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<style>
section table th{
	font:Verdana, Geneva, sans-serif; 
	height:15px;
	width:53px;
	margin:0px;
	padding:0px 2px;
	background-color:#CCC;
	border:1px solid #333;
	text-align:center;
	font-size:20px;
	font-size:15px;
}
section table td{
	font:Verdana, Geneva, sans-serif; 
	height:15px;
	width:53px;
	margin:0px;
	padding:0px;
	background:#FFF;
	border:1px solid #333;
	text-align:center;
	color:#F00;
	font-size:15px;
}
.numero{
	font:Verdana, Geneva, sans-serif; 
	height:26px;
	width:55px;
	margin:0px;
	padding:0px;
	background:#FFC;
	border:0px solid #333;
	text-align:center;
	color:#000;
	font-size:20px;
}
.respuesta{
	font:Verdana, Geneva, sans-serif; 
	height:26px;
	width:55px;
	margin:0px;
	padding:0px;
	background:#FFF;
	border:0px solid #333;
	text-align:center;
	color:#F00;
	font-size:20px;
}
.solucion{
	font:Verdana, Geneva, sans-serif; 
	height:26px;
	width:55px;
	margin:0px;
	padding:0px;
	background:#EEE;
	border:1px solid #333;
	text-align:center;
	color:#F00;
	font-size:20px;
}
.error{
	font:Verdana, Geneva, sans-serif; 
	height:26px;
	width:55px;
	margin:0px;
	padding:0px;
	background:#EEE;
	border:1px solid #333;
	text-align:center;
	color:#F00;
	font-size:20px;
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
<?php 
//IMPRIMIENDO TABLA CON PLANTILLA PROBLEMA PARA EL USUARIO
//ENCABEZADO
echo "<div style='text-align:center; margin:auto;'><h2>SUDOKU</h2><h5>(Nivel: $nivel / N°: $id_elegido)</h5></div><br>";
echo "<table style='text-align:center; margin:auto;'>";
echo "<tr>";
echo "<form name='sudoku_select' id='sudoku_select' action='sudoku.php' method='post'>
<th colspan='9'><h6>Nivel: <select name='nivel'><option>Aleatorio</option><option>FACIL</option><option>MEDIO</option><option>DIFICIL</option><option>IMPOSIBLE</option></select> N°: <select name='id_elegido'><option>Aleatorio</option>";
$i=1;
while($i<=$nun_sudokus){
	echo "<option>$i</option>";
	$i=$i+1;
}	
echo "</select> <input type='submit' name='imprimir' value='Nuevo Juego'></th>";
echo "</h6></form></tr>";
//MOSTRAR PROBLEMA
//IMPRIMIENDO SUDOKU	
$e=0;
while($e<=8){
	echo "<tr>";
	$i=0;
	while($i<=8){
		if($mostrar[$e][$i]==1){
			echo "<td name='celda[" . $e . "][" . $i . "]'";
			if(($i==3 and $e==3) or ($i==6 and $e==6) or ($i==3 and $e==6) or ($i==6 and $e==3)){
				echo "style='border-left:3px solid #000; border-top:3px solid #000;'";
			}else{
				if($i==3 or $i==6){echo "style='border-left:3px solid #000;'";}		
				if($e==3 or $e==6){echo "style='border-top:3px solid #000;'";}
			}		
			echo "><input class='respuesta' type='text' id='celda[" . $e . "][" . $i . "]' value='" . $ver[$e][$i] . "' disabled></td>";
		}else{
			echo "<td name='celda[" . $e . "][" . $i . "]'";
			if(($i==3 and $e==3) or ($i==6 and $e==6) or ($i==3 and $e==6) or ($i==6 and $e==3)){
				echo "style='border-left:3px solid #000; border-top:3px solid #000;'";
			}else{
				if($i==3 or $i==6){echo "style='border-left:3px solid #000;'";}		
				if($e==3 or $e==6){echo "style='border-top:3px solid #000;'";}
			}		
			echo "><input class='numero' type='text' id='celda[" . $e . "][" . $i . "]' value='' onkeyup='iniciar()'></td>";
		}
		$i=$i+1;
	}
	echo "</tr>";
	$e=$e+1;
}
//MOSTRAR SOLUCION
echo "<form name='crypto_solucion' id='crypto_solucion' action='sudoku.php' method='post'>";
echo "<tr><th colspan='9'>Mostrar Solución&nbsp;&nbsp;&nbsp;<select name='solucion'><option>NO</option><option>SI</option></select>
<input type='hidden' name='nivel' value='$nivel'>
<input type='hidden' name='id_elegido' value='$id_elegido'>";
echo "<input type='hidden' name='ver_1' value='" . $ver[0][0] . "'>";
echo "<input type='hidden' name='ver_2' value='" . $ver[0][1] . "'>";
echo "<input type='hidden' name='ver_3' value='" . $ver[0][2] . "'>";
echo "<input type='hidden' name='ver_4' value='" . $ver[0][3] . "'>";
echo "<input type='hidden' name='ver_5' value='" . $ver[0][4] . "'>";
echo "<input type='hidden' name='ver_6' value='" . $ver[0][5] . "'>";
echo "<input type='hidden' name='ver_7' value='" . $ver[0][6] . "'>";
echo "<input type='hidden' name='ver_8' value='" . $ver[0][7] . "'>";
echo "<input type='hidden' name='ver_9' value='" . $ver[0][8] . "'>";
echo "<input type='hidden' name='ver_10' value='" . $ver[1][0] . "'>";
echo "<input type='hidden' name='ver_11' value='" . $ver[1][1] . "'>";
echo "<input type='hidden' name='ver_12' value='" . $ver[1][2] . "'>";
echo "<input type='hidden' name='ver_13' value='" . $ver[1][3] . "'>";
echo "<input type='hidden' name='ver_14' value='" . $ver[1][4] . "'>";
echo "<input type='hidden' name='ver_15' value='" . $ver[1][5] . "'>";
echo "<input type='hidden' name='ver_16' value='" . $ver[1][6] . "'>";
echo "<input type='hidden' name='ver_17' value='" . $ver[1][7] . "'>";
echo "<input type='hidden' name='ver_18' value='" . $ver[1][8] . "'>";
echo "<input type='hidden' name='ver_19' value='" . $ver[2][0] . "'>";
echo "<input type='hidden' name='ver_20' value='" . $ver[2][1] . "'>";
echo "<input type='hidden' name='ver_21' value='" . $ver[2][2] . "'>";
echo "<input type='hidden' name='ver_22' value='" . $ver[2][3] . "'>";
echo "<input type='hidden' name='ver_23' value='" . $ver[2][4] . "'>";
echo "<input type='hidden' name='ver_24' value='" . $ver[2][5] . "'>";
echo "<input type='hidden' name='ver_25' value='" . $ver[2][6] . "'>";
echo "<input type='hidden' name='ver_26' value='" . $ver[2][7] . "'>";
echo "<input type='hidden' name='ver_27' value='" . $ver[2][8] . "'>";
echo "<input type='hidden' name='ver_28' value='" . $ver[3][0] . "'>";
echo "<input type='hidden' name='ver_29' value='" . $ver[3][1] . "'>";
echo "<input type='hidden' name='ver_30' value='" . $ver[3][2] . "'>";
echo "<input type='hidden' name='ver_31' value='" . $ver[3][3] . "'>";
echo "<input type='hidden' name='ver_32' value='" . $ver[3][4] . "'>";
echo "<input type='hidden' name='ver_33' value='" . $ver[3][5] . "'>";
echo "<input type='hidden' name='ver_34' value='" . $ver[3][6] . "'>";
echo "<input type='hidden' name='ver_35' value='" . $ver[3][7] . "'>";
echo "<input type='hidden' name='ver_36' value='" . $ver[3][8] . "'>";
echo "<input type='hidden' name='ver_37' value='" . $ver[4][0] . "'>";
echo "<input type='hidden' name='ver_38' value='" . $ver[4][1] . "'>";
echo "<input type='hidden' name='ver_39' value='" . $ver[4][2] . "'>";
echo "<input type='hidden' name='ver_40' value='" . $ver[4][3] . "'>";
echo "<input type='hidden' name='ver_41' value='" . $ver[4][4] . "'>";
echo "<input type='hidden' name='ver_42' value='" . $ver[4][5] . "'>";
echo "<input type='hidden' name='ver_43' value='" . $ver[4][6] . "'>";
echo "<input type='hidden' name='ver_44' value='" . $ver[4][7] . "'>";
echo "<input type='hidden' name='ver_45' value='" . $ver[4][8] . "'>";
echo "<input type='hidden' name='ver_46' value='" . $ver[5][0] . "'>";
echo "<input type='hidden' name='ver_47' value='" . $ver[5][1] . "'>";
echo "<input type='hidden' name='ver_48' value='" . $ver[5][2] . "'>";
echo "<input type='hidden' name='ver_49' value='" . $ver[5][3] . "'>";
echo "<input type='hidden' name='ver_50' value='" . $ver[5][4] . "'>";
echo "<input type='hidden' name='ver_51' value='" . $ver[5][5] . "'>";
echo "<input type='hidden' name='ver_52' value='" . $ver[5][6] . "'>";
echo "<input type='hidden' name='ver_53' value='" . $ver[5][7] . "'>";
echo "<input type='hidden' name='ver_54' value='" . $ver[5][8] . "'>";
echo "<input type='hidden' name='ver_55' value='" . $ver[6][0] . "'>";
echo "<input type='hidden' name='ver_56' value='" . $ver[6][1] . "'>";
echo "<input type='hidden' name='ver_57' value='" . $ver[6][2] . "'>";
echo "<input type='hidden' name='ver_58' value='" . $ver[6][3] . "'>";
echo "<input type='hidden' name='ver_59' value='" . $ver[6][4] . "'>";
echo "<input type='hidden' name='ver_60' value='" . $ver[6][5] . "'>";
echo "<input type='hidden' name='ver_61' value='" . $ver[6][6] . "'>";
echo "<input type='hidden' name='ver_62' value='" . $ver[6][7] . "'>";
echo "<input type='hidden' name='ver_63' value='" . $ver[6][8] . "'>";
echo "<input type='hidden' name='ver_64' value='" . $ver[7][0] . "'>";
echo "<input type='hidden' name='ver_65' value='" . $ver[7][1] . "'>";
echo "<input type='hidden' name='ver_66' value='" . $ver[7][2] . "'>";
echo "<input type='hidden' name='ver_67' value='" . $ver[7][3] . "'>";
echo "<input type='hidden' name='ver_68' value='" . $ver[7][4] . "'>";
echo "<input type='hidden' name='ver_69' value='" . $ver[7][5] . "'>";
echo "<input type='hidden' name='ver_70' value='" . $ver[7][6] . "'>";
echo "<input type='hidden' name='ver_71' value='" . $ver[7][7] . "'>";
echo "<input type='hidden' name='ver_72' value='" . $ver[7][8] . "'>";
echo "<input type='hidden' name='ver_73' value='" . $ver[8][0] . "'>";
echo "<input type='hidden' name='ver_74' value='" . $ver[8][1] . "'>";
echo "<input type='hidden' name='ver_75' value='" . $ver[8][2] . "'>";
echo "<input type='hidden' name='ver_76' value='" . $ver[8][3] . "'>";
echo "<input type='hidden' name='ver_77' value='" . $ver[8][4] . "'>";
echo "<input type='hidden' name='ver_78' value='" . $ver[8][5] . "'>";
echo "<input type='hidden' name='ver_79' value='" . $ver[8][6] . "'>";
echo "<input type='hidden' name='ver_80' value='" . $ver[8][7] . "'>";
echo "<input type='hidden' name='ver_81' value='" . $ver[8][8] . "'>";
echo "<input type='hidden' name='mostrar_1' value='" . $mostrar[0][0] . "'>";
echo "<input type='hidden' name='mostrar_2' value='" . $mostrar[0][1] . "'>";
echo "<input type='hidden' name='mostrar_3' value='" . $mostrar[0][2] . "'>";
echo "<input type='hidden' name='mostrar_4' value='" . $mostrar[0][3] . "'>";
echo "<input type='hidden' name='mostrar_5' value='" . $mostrar[0][4] . "'>";
echo "<input type='hidden' name='mostrar_6' value='" . $mostrar[0][5] . "'>";
echo "<input type='hidden' name='mostrar_7' value='" . $mostrar[0][6] . "'>";
echo "<input type='hidden' name='mostrar_8' value='" . $mostrar[0][7] . "'>";
echo "<input type='hidden' name='mostrar_9' value='" . $mostrar[0][8] . "'>";
echo "<input type='hidden' name='mostrar_10' value='" . $mostrar[1][0] . "'>";
echo "<input type='hidden' name='mostrar_11' value='" . $mostrar[1][1] . "'>";
echo "<input type='hidden' name='mostrar_12' value='" . $mostrar[1][2] . "'>";
echo "<input type='hidden' name='mostrar_13' value='" . $mostrar[1][3] . "'>";
echo "<input type='hidden' name='mostrar_14' value='" . $mostrar[1][4] . "'>";
echo "<input type='hidden' name='mostrar_15' value='" . $mostrar[1][5] . "'>";
echo "<input type='hidden' name='mostrar_16' value='" . $mostrar[1][6] . "'>";
echo "<input type='hidden' name='mostrar_17' value='" . $mostrar[1][7] . "'>";
echo "<input type='hidden' name='mostrar_18' value='" . $mostrar[1][8] . "'>";
echo "<input type='hidden' name='mostrar_19' value='" . $mostrar[2][0] . "'>";
echo "<input type='hidden' name='mostrar_20' value='" . $mostrar[2][1] . "'>";
echo "<input type='hidden' name='mostrar_21' value='" . $mostrar[2][2] . "'>";
echo "<input type='hidden' name='mostrar_22' value='" . $mostrar[2][3] . "'>";
echo "<input type='hidden' name='mostrar_23' value='" . $mostrar[2][4] . "'>";
echo "<input type='hidden' name='mostrar_24' value='" . $mostrar[2][5] . "'>";
echo "<input type='hidden' name='mostrar_25' value='" . $mostrar[2][6] . "'>";
echo "<input type='hidden' name='mostrar_26' value='" . $mostrar[2][7] . "'>";
echo "<input type='hidden' name='mostrar_27' value='" . $mostrar[2][8] . "'>";
echo "<input type='hidden' name='mostrar_28' value='" . $mostrar[3][0] . "'>";
echo "<input type='hidden' name='mostrar_29' value='" . $mostrar[3][1] . "'>";
echo "<input type='hidden' name='mostrar_30' value='" . $mostrar[3][2] . "'>";
echo "<input type='hidden' name='mostrar_31' value='" . $mostrar[3][3] . "'>";
echo "<input type='hidden' name='mostrar_32' value='" . $mostrar[3][4] . "'>";
echo "<input type='hidden' name='mostrar_33' value='" . $mostrar[3][5] . "'>";
echo "<input type='hidden' name='mostrar_34' value='" . $mostrar[3][6] . "'>";
echo "<input type='hidden' name='mostrar_35' value='" . $mostrar[3][7] . "'>";
echo "<input type='hidden' name='mostrar_36' value='" . $mostrar[3][8] . "'>";
echo "<input type='hidden' name='mostrar_37' value='" . $mostrar[4][0] . "'>";
echo "<input type='hidden' name='mostrar_38' value='" . $mostrar[4][1] . "'>";
echo "<input type='hidden' name='mostrar_39' value='" . $mostrar[4][2] . "'>";
echo "<input type='hidden' name='mostrar_40' value='" . $mostrar[4][3] . "'>";
echo "<input type='hidden' name='mostrar_41' value='" . $mostrar[4][4] . "'>";
echo "<input type='hidden' name='mostrar_42' value='" . $mostrar[4][5] . "'>";
echo "<input type='hidden' name='mostrar_43' value='" . $mostrar[4][6] . "'>";
echo "<input type='hidden' name='mostrar_44' value='" . $mostrar[4][7] . "'>";
echo "<input type='hidden' name='mostrar_45' value='" . $mostrar[4][8] . "'>";
echo "<input type='hidden' name='mostrar_46' value='" . $mostrar[5][0] . "'>";
echo "<input type='hidden' name='mostrar_47' value='" . $mostrar[5][1] . "'>";
echo "<input type='hidden' name='mostrar_48' value='" . $mostrar[5][2] . "'>";
echo "<input type='hidden' name='mostrar_49' value='" . $mostrar[5][3] . "'>";
echo "<input type='hidden' name='mostrar_50' value='" . $mostrar[5][4] . "'>";
echo "<input type='hidden' name='mostrar_51' value='" . $mostrar[5][5] . "'>";
echo "<input type='hidden' name='mostrar_52' value='" . $mostrar[5][6] . "'>";
echo "<input type='hidden' name='mostrar_53' value='" . $mostrar[5][7] . "'>";
echo "<input type='hidden' name='mostrar_54' value='" . $mostrar[5][8] . "'>";
echo "<input type='hidden' name='mostrar_55' value='" . $mostrar[6][0] . "'>";
echo "<input type='hidden' name='mostrar_56' value='" . $mostrar[6][1] . "'>";
echo "<input type='hidden' name='mostrar_57' value='" . $mostrar[6][2] . "'>";
echo "<input type='hidden' name='mostrar_58' value='" . $mostrar[6][3] . "'>";
echo "<input type='hidden' name='mostrar_59' value='" . $mostrar[6][4] . "'>";
echo "<input type='hidden' name='mostrar_60' value='" . $mostrar[6][5] . "'>";
echo "<input type='hidden' name='mostrar_61' value='" . $mostrar[6][6] . "'>";
echo "<input type='hidden' name='mostrar_62' value='" . $mostrar[6][7] . "'>";
echo "<input type='hidden' name='mostrar_63' value='" . $mostrar[6][8] . "'>";
echo "<input type='hidden' name='mostrar_64' value='" . $mostrar[7][0] . "'>";
echo "<input type='hidden' name='mostrar_65' value='" . $mostrar[7][1] . "'>";
echo "<input type='hidden' name='mostrar_66' value='" . $mostrar[7][2] . "'>";
echo "<input type='hidden' name='mostrar_67' value='" . $mostrar[7][3] . "'>";
echo "<input type='hidden' name='mostrar_68' value='" . $mostrar[7][4] . "'>";
echo "<input type='hidden' name='mostrar_69' value='" . $mostrar[7][5] . "'>";
echo "<input type='hidden' name='mostrar_70' value='" . $mostrar[7][6] . "'>";
echo "<input type='hidden' name='mostrar_71' value='" . $mostrar[7][7] . "'>";
echo "<input type='hidden' name='mostrar_72' value='" . $mostrar[7][8] . "'>";
echo "<input type='hidden' name='mostrar_73' value='" . $mostrar[8][0] . "'>";
echo "<input type='hidden' name='mostrar_74' value='" . $mostrar[8][1] . "'>";
echo "<input type='hidden' name='mostrar_75' value='" . $mostrar[8][2] . "'>";
echo "<input type='hidden' name='mostrar_76' value='" . $mostrar[8][3] . "'>";
echo "<input type='hidden' name='mostrar_77' value='" . $mostrar[8][4] . "'>";
echo "<input type='hidden' name='mostrar_78' value='" . $mostrar[8][5] . "'>";
echo "<input type='hidden' name='mostrar_79' value='" . $mostrar[8][6] . "'>";
echo "<input type='hidden' name='mostrar_80' value='" . $mostrar[8][7] . "'>";
echo "<input type='hidden' name='mostrar_81' value='" . $mostrar[8][8] . "'>";
echo "<input type='submit' name='enviar' value='>'>
</th></form>";
if(isset($_POST['solucion']) and $_POST['solucion']=="SI"){
	$e=0;
	while($e<=8){
		echo "<tr>";	
		$i=0;
		while($i<=8){
			echo "<td class='solucion'";
			if(($i==3 and $e==3) or ($i==6 and $e==6) or ($i==3 and $e==6) or ($i==6 and $e==3)){
				echo "style='border-left:3px solid #000; border-top:3px solid #000;'";
			}else{
				if($i==3 or $i==6){echo "style='border-left:3px solid #000;'";}		
				if($e==3 or $e==6){echo "style='border-top:3px solid #000;'";}
			}		
			echo ">" . $ver[$e][$i] . "</td>";
			$i=$i+1;
		}
		echo "</tr>";
		$e=$e+1;
	}
}else{}
echo "</table>";
mysqli_close($conexion);
?>
</section>
<?php
require ("footer.php");
?>
<br><br>
</body>
</html>
<script>
function iniciar(){
	//declaracion de variables
	var celdas_1 = new Array(9)
		celdas_1[0]=document.getElementById("celda[0][0]").value
		celdas_1[1]=document.getElementById("celda[0][1]").value
		celdas_1[2]=document.getElementById("celda[0][2]").value
		celdas_1[3]=document.getElementById("celda[0][3]").value
		celdas_1[4]=document.getElementById("celda[0][4]").value
		celdas_1[5]=document.getElementById("celda[0][5]").value
		celdas_1[6]=document.getElementById("celda[0][6]").value
		celdas_1[7]=document.getElementById("celda[0][7]").value
		celdas_1[8]=document.getElementById("celda[0][8]").value
	var celdas_2 = new Array(9)
		celdas_2[0]=document.getElementById("celda[1][0]").value
		celdas_2[1]=document.getElementById("celda[1][1]").value
		celdas_2[2]=document.getElementById("celda[1][2]").value
		celdas_2[3]=document.getElementById("celda[1][3]").value
		celdas_2[4]=document.getElementById("celda[1][4]").value
		celdas_2[5]=document.getElementById("celda[1][5]").value
		celdas_2[6]=document.getElementById("celda[1][6]").value
		celdas_2[7]=document.getElementById("celda[1][7]").value
		celdas_2[8]=document.getElementById("celda[1][8]").value
	var celdas_3 = new Array(9)
		celdas_3[0]=document.getElementById("celda[2][0]").value
		celdas_3[1]=document.getElementById("celda[2][1]").value
		celdas_3[2]=document.getElementById("celda[2][2]").value
		celdas_3[3]=document.getElementById("celda[2][3]").value
		celdas_3[4]=document.getElementById("celda[2][4]").value
		celdas_3[5]=document.getElementById("celda[2][5]").value
		celdas_3[6]=document.getElementById("celda[2][6]").value
		celdas_3[7]=document.getElementById("celda[2][7]").value
		celdas_3[8]=document.getElementById("celda[2][8]").value
	var celdas_4 = new Array(9)
		celdas_4[0]=document.getElementById("celda[3][0]").value
		celdas_4[1]=document.getElementById("celda[3][1]").value
		celdas_4[2]=document.getElementById("celda[3][2]").value
		celdas_4[3]=document.getElementById("celda[3][3]").value
		celdas_4[4]=document.getElementById("celda[3][4]").value
		celdas_4[5]=document.getElementById("celda[3][5]").value
		celdas_4[6]=document.getElementById("celda[3][6]").value
		celdas_4[7]=document.getElementById("celda[3][7]").value
		celdas_4[8]=document.getElementById("celda[3][8]").value
	var celdas_5 = new Array(9)
		celdas_5[0]=document.getElementById("celda[4][0]").value
		celdas_5[1]=document.getElementById("celda[4][1]").value
		celdas_5[2]=document.getElementById("celda[4][2]").value
		celdas_5[3]=document.getElementById("celda[4][3]").value
		celdas_5[4]=document.getElementById("celda[4][4]").value
		celdas_5[5]=document.getElementById("celda[4][5]").value
		celdas_5[6]=document.getElementById("celda[4][6]").value
		celdas_5[7]=document.getElementById("celda[4][7]").value
		celdas_5[8]=document.getElementById("celda[4][8]").value
	var celdas_6 = new Array(9)
		celdas_6[0]=document.getElementById("celda[5][0]").value
		celdas_6[1]=document.getElementById("celda[5][1]").value
		celdas_6[2]=document.getElementById("celda[5][2]").value
		celdas_6[3]=document.getElementById("celda[5][3]").value
		celdas_6[4]=document.getElementById("celda[5][4]").value
		celdas_6[5]=document.getElementById("celda[5][5]").value
		celdas_6[6]=document.getElementById("celda[5][6]").value
		celdas_6[7]=document.getElementById("celda[5][7]").value
		celdas_6[8]=document.getElementById("celda[5][8]").value
	var celdas_7 = new Array(9)
		celdas_7[0]=document.getElementById("celda[6][0]").value
		celdas_7[1]=document.getElementById("celda[6][1]").value
		celdas_7[2]=document.getElementById("celda[6][2]").value
		celdas_7[3]=document.getElementById("celda[6][3]").value
		celdas_7[4]=document.getElementById("celda[6][4]").value
		celdas_7[5]=document.getElementById("celda[6][5]").value
		celdas_7[6]=document.getElementById("celda[6][6]").value
		celdas_7[7]=document.getElementById("celda[6][7]").value
		celdas_7[8]=document.getElementById("celda[6][8]").value
	var celdas_8 = new Array(9)
		celdas_8[0]=document.getElementById("celda[7][0]").value
		celdas_8[1]=document.getElementById("celda[7][1]").value
		celdas_8[2]=document.getElementById("celda[7][2]").value
		celdas_8[3]=document.getElementById("celda[7][3]").value
		celdas_8[4]=document.getElementById("celda[7][4]").value
		celdas_8[5]=document.getElementById("celda[7][5]").value
		celdas_8[6]=document.getElementById("celda[7][6]").value
		celdas_8[7]=document.getElementById("celda[7][7]").value
		celdas_8[8]=document.getElementById("celda[7][8]").value
	var celdas_9 = new Array(9)
		celdas_9[0]=document.getElementById("celda[8][0]").value
		celdas_9[1]=document.getElementById("celda[8][1]").value
		celdas_9[2]=document.getElementById("celda[8][2]").value
		celdas_9[3]=document.getElementById("celda[8][3]").value
		celdas_9[4]=document.getElementById("celda[8][4]").value
		celdas_9[5]=document.getElementById("celda[8][5]").value
		celdas_9[6]=document.getElementById("celda[8][6]").value
		celdas_9[7]=document.getElementById("celda[8][7]").value
		celdas_9[8]=document.getElementById("celda[8][8]").value

	var celdas = new Array(9)
		celdas[0]=celdas_1
		celdas[1]=celdas_2
		celdas[2]=celdas_3
		celdas[3]=celdas_4
		celdas[4]=celdas_5
		celdas[5]=celdas_6
		celdas[6]=celdas_7
		celdas[7]=celdas_8
		celdas[8]=celdas_9
	//regla horizontal
	var contador_horizontal=0;
	var verificar_horizontal="OK";
	var f_1=0;
	var f_2=0;
	while(f_1<=8){
		//comparando la celda [0][?] con todas las de su linea horizontal [0][?]
		var c_1=0;
		while(c_1<=8){
			//comparando la celda [0][0] con todas las de su linea horizontal [0][?]
			var c_2=0;
			while(c_2<=8){
				if(celdas[f_1][c_1]==0 || celdas[f_2][c_2]==0){
				}else{
					if(f_1==f_2 && c_1==c_2){
					}else{
						if(celdas[f_1][c_1]==celdas[f_2][c_2]){
							contador_horizontal=contador_horizontal+1;
							/////
						}
					}
				}
				c_2=c_2+1;
			}
			c_1=c_1+1;
		}
		if(contador_horizontal>1){verificar_horizontal="ERROR";}else{}
		f_1=f_1+1;
		f_2=f_2+1;
	}
	//regla vertical
	var contador_vertical=0;
	var verificar_vertical="OK";
	var c_1=0;
	var c_2=0;
	while(c_1<=8){
		//comparando la celda [?][0] con todas las de su linea vertical [?][0]
		var f_1=0;
		while(f_1<=8){
			//comparando la celda [0][0] con todas las de su linea vertical [?][0]
			var f_2=0;
			while(f_2<=8){
				if(celdas[f_1][c_1]==0 || celdas[f_2][c_2]==0){
				}else{
					if(f_1==f_2 && c_1==c_2){
					}else{
						if(celdas[f_1][c_1]==celdas[f_2][c_2]){
							contador_vertical=contador_vertical+1;
							//////
						}
					}
				}
				f_2=f_2+1;
			}
			f_1=f_1+1;
		}
		if(contador_vertical>1){verificar_vertical="ERROR";}else{}
		c_1=c_1+1;
		c_2=c_2+1;
	}
	//regla matriz
	var verificar_matriz_1="OK";
	var verificar_matriz_2="OK";
	var verificar_matriz_3="OK";
	var verificar_matriz_4="OK";
	var verificar_matriz_5="OK";
	var verificar_matriz_6="OK";
	var verificar_matriz_7="OK";
	var verificar_matriz_8="OK";
	var verificar_matriz_9="OK";
	//verificando matriz_1 [0][0] - [2][2]
	var cont_mat=0;
	if(celdas[0][0]==0 || celdas[0][1]==0){}else{if(celdas[0][0]==celdas[0][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[0][2]==0){}else{if(celdas[0][0]==celdas[0][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[1][0]==0){}else{if(celdas[0][0]==celdas[1][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[1][1]==0){}else{if(celdas[0][0]==celdas[1][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[1][2]==0){}else{if(celdas[0][0]==celdas[1][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[2][0]==0){}else{if(celdas[0][0]==celdas[2][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[2][1]==0){}else{if(celdas[0][0]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][0]==0 || celdas[2][2]==0){}else{if(celdas[0][0]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[0][2]==0){}else{if(celdas[0][1]==celdas[0][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[1][0]==0){}else{if(celdas[0][1]==celdas[1][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[1][1]==0){}else{if(celdas[0][1]==celdas[1][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[1][2]==0){}else{if(celdas[0][1]==celdas[1][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[2][0]==0){}else{if(celdas[0][1]==celdas[2][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[2][1]==0){}else{if(celdas[0][1]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][1]==0 || celdas[2][2]==0){}else{if(celdas[0][1]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][2]==0 || celdas[1][0]==0){}else{if(celdas[0][2]==celdas[1][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][2]==0 || celdas[1][1]==0){}else{if(celdas[0][2]==celdas[1][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][2]==0 || celdas[1][2]==0){}else{if(celdas[0][2]==celdas[1][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][2]==0 || celdas[2][0]==0){}else{if(celdas[0][2]==celdas[2][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][2]==0 || celdas[2][1]==0){}else{if(celdas[0][2]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][2]==0 || celdas[2][2]==0){}else{if(celdas[0][2]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][0]==0 || celdas[1][1]==0){}else{if(celdas[1][0]==celdas[1][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][0]==0 || celdas[1][2]==0){}else{if(celdas[1][0]==celdas[1][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][0]==0 || celdas[2][0]==0){}else{if(celdas[1][0]==celdas[2][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][0]==0 || celdas[2][1]==0){}else{if(celdas[1][0]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][0]==0 || celdas[2][2]==0){}else{if(celdas[1][0]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][1]==0 || celdas[1][2]==0){}else{if(celdas[1][1]==celdas[1][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][1]==0 || celdas[2][0]==0){}else{if(celdas[1][1]==celdas[2][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][1]==0 || celdas[2][1]==0){}else{if(celdas[1][1]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][1]==0 || celdas[2][2]==0){}else{if(celdas[1][1]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][2]==0 || celdas[2][0]==0){}else{if(celdas[1][2]==celdas[2][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][2]==0 || celdas[2][1]==0){}else{if(celdas[1][2]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][2]==0 || celdas[2][2]==0){}else{if(celdas[1][2]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][0]==0 || celdas[2][1]==0){}else{if(celdas[2][0]==celdas[2][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][0]==0 || celdas[2][2]==0){}else{if(celdas[2][0]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][1]==0 || celdas[2][2]==0){}else{if(celdas[2][1]==celdas[2][2]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>0){verificar_matriz_1="ERROR";}else{}
	//verificando matriz_2 [0][3] - [2][5]
	var cont_mat=0;
	if(celdas[0][3]==0 || celdas[0][4]==0){}else{if(celdas[0][3]==celdas[0][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[0][5]==0){}else{if(celdas[0][3]==celdas[0][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[1][3]==0){}else{if(celdas[0][3]==celdas[1][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[1][4]==0){}else{if(celdas[0][3]==celdas[1][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[1][5]==0){}else{if(celdas[0][3]==celdas[1][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[2][3]==0){}else{if(celdas[0][3]==celdas[2][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[2][4]==0){}else{if(celdas[0][3]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][3]==0 || celdas[2][5]==0){}else{if(celdas[0][3]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[0][5]==0){}else{if(celdas[0][4]==celdas[0][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[1][3]==0){}else{if(celdas[0][4]==celdas[1][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[1][4]==0){}else{if(celdas[0][4]==celdas[1][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[1][5]==0){}else{if(celdas[0][4]==celdas[1][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[2][3]==0){}else{if(celdas[0][4]==celdas[2][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[2][4]==0){}else{if(celdas[0][4]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][4]==0 || celdas[2][5]==0){}else{if(celdas[0][4]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][5]==0 || celdas[1][3]==0){}else{if(celdas[0][5]==celdas[1][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][5]==0 || celdas[1][4]==0){}else{if(celdas[0][5]==celdas[1][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][5]==0 || celdas[1][5]==0){}else{if(celdas[0][5]==celdas[1][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][5]==0 || celdas[2][3]==0){}else{if(celdas[0][5]==celdas[2][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][5]==0 || celdas[2][4]==0){}else{if(celdas[0][5]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][5]==0 || celdas[2][5]==0){}else{if(celdas[0][5]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][3]==0 || celdas[1][4]==0){}else{if(celdas[1][3]==celdas[1][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][3]==0 || celdas[1][5]==0){}else{if(celdas[1][3]==celdas[1][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][3]==0 || celdas[2][3]==0){}else{if(celdas[1][3]==celdas[2][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][3]==0 || celdas[2][4]==0){}else{if(celdas[1][3]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][3]==0 || celdas[2][5]==0){}else{if(celdas[1][3]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][4]==0 || celdas[1][5]==0){}else{if(celdas[1][4]==celdas[1][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][4]==0 || celdas[2][3]==0){}else{if(celdas[1][4]==celdas[2][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][4]==0 || celdas[2][4]==0){}else{if(celdas[1][4]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][4]==0 || celdas[2][5]==0){}else{if(celdas[1][4]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][5]==0 || celdas[2][3]==0){}else{if(celdas[1][5]==celdas[2][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][5]==0 || celdas[2][4]==0){}else{if(celdas[1][5]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][5]==0 || celdas[2][5]==0){}else{if(celdas[1][5]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][3]==0 || celdas[2][4]==0){}else{if(celdas[2][3]==celdas[2][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][3]==0 || celdas[2][5]==0){}else{if(celdas[2][3]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][4]==0 || celdas[2][5]==0){}else{if(celdas[2][4]==celdas[2][5]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>1){verificar_matriz_2="ERROR";}else{}
	//verificando matriz_3 [0][6] - [2][8]
	var cont_mat=0;
	if(celdas[0][6]==0 || celdas[0][7]==0){}else{if(celdas[0][6]==celdas[0][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[0][8]==0){}else{if(celdas[0][6]==celdas[0][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[1][6]==0){}else{if(celdas[0][6]==celdas[1][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[1][7]==0){}else{if(celdas[0][6]==celdas[1][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[1][8]==0){}else{if(celdas[0][6]==celdas[1][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[2][6]==0){}else{if(celdas[0][6]==celdas[2][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[2][7]==0){}else{if(celdas[0][6]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][6]==0 || celdas[2][8]==0){}else{if(celdas[0][6]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[0][8]==0){}else{if(celdas[0][7]==celdas[0][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[1][6]==0){}else{if(celdas[0][7]==celdas[1][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[1][7]==0){}else{if(celdas[0][7]==celdas[1][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[1][8]==0){}else{if(celdas[0][7]==celdas[1][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[2][6]==0){}else{if(celdas[0][7]==celdas[2][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[2][7]==0){}else{if(celdas[0][7]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][7]==0 || celdas[2][8]==0){}else{if(celdas[0][7]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][8]==0 || celdas[1][6]==0){}else{if(celdas[0][8]==celdas[1][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][8]==0 || celdas[1][7]==0){}else{if(celdas[0][8]==celdas[1][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][8]==0 || celdas[1][8]==0){}else{if(celdas[0][8]==celdas[1][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][8]==0 || celdas[2][6]==0){}else{if(celdas[0][8]==celdas[2][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][8]==0 || celdas[2][7]==0){}else{if(celdas[0][8]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[0][8]==0 || celdas[2][8]==0){}else{if(celdas[0][8]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][6]==0 || celdas[1][7]==0){}else{if(celdas[1][6]==celdas[1][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][6]==0 || celdas[1][8]==0){}else{if(celdas[1][6]==celdas[1][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][6]==0 || celdas[2][6]==0){}else{if(celdas[1][6]==celdas[2][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][6]==0 || celdas[2][7]==0){}else{if(celdas[1][6]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][6]==0 || celdas[2][8]==0){}else{if(celdas[1][6]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][7]==0 || celdas[1][8]==0){}else{if(celdas[1][7]==celdas[1][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][7]==0 || celdas[2][6]==0){}else{if(celdas[1][7]==celdas[2][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][7]==0 || celdas[2][7]==0){}else{if(celdas[1][7]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][7]==0 || celdas[2][8]==0){}else{if(celdas[1][7]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][8]==0 || celdas[2][6]==0){}else{if(celdas[1][8]==celdas[2][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][8]==0 || celdas[2][7]==0){}else{if(celdas[1][8]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[1][8]==0 || celdas[2][8]==0){}else{if(celdas[1][8]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][6]==0 || celdas[2][7]==0){}else{if(celdas[2][6]==celdas[2][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][6]==0 || celdas[2][8]==0){}else{if(celdas[2][6]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[2][7]==0 || celdas[2][8]==0){}else{if(celdas[2][7]==celdas[2][8]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>1){verificar_matriz_3="ERROR";}else{}
	//verificando matriz_4 [3][0] - [5][2]
	var cont_mat=0;
	if(celdas[3][0]==0 || celdas[3][1]==0){}else{if(celdas[3][0]==celdas[3][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[3][2]==0){}else{if(celdas[3][0]==celdas[3][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[4][0]==0){}else{if(celdas[3][0]==celdas[4][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[4][1]==0){}else{if(celdas[3][0]==celdas[4][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[4][2]==0){}else{if(celdas[3][0]==celdas[4][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[5][0]==0){}else{if(celdas[3][0]==celdas[5][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[5][1]==0){}else{if(celdas[3][0]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][0]==0 || celdas[5][2]==0){}else{if(celdas[3][0]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[3][2]==0){}else{if(celdas[3][1]==celdas[3][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[4][0]==0){}else{if(celdas[3][1]==celdas[4][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[4][1]==0){}else{if(celdas[3][1]==celdas[4][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[4][2]==0){}else{if(celdas[3][1]==celdas[4][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[5][0]==0){}else{if(celdas[3][1]==celdas[5][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[5][1]==0){}else{if(celdas[3][1]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][1]==0 || celdas[5][2]==0){}else{if(celdas[3][1]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][2]==0 || celdas[4][0]==0){}else{if(celdas[3][2]==celdas[4][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][2]==0 || celdas[4][1]==0){}else{if(celdas[3][2]==celdas[4][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][2]==0 || celdas[4][2]==0){}else{if(celdas[3][2]==celdas[4][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][2]==0 || celdas[5][0]==0){}else{if(celdas[3][2]==celdas[5][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][2]==0 || celdas[5][1]==0){}else{if(celdas[3][2]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][2]==0 || celdas[5][2]==0){}else{if(celdas[3][2]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][0]==0 || celdas[4][1]==0){}else{if(celdas[4][0]==celdas[4][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][0]==0 || celdas[4][2]==0){}else{if(celdas[4][0]==celdas[4][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][0]==0 || celdas[5][0]==0){}else{if(celdas[4][0]==celdas[5][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][0]==0 || celdas[5][1]==0){}else{if(celdas[4][0]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][0]==0 || celdas[5][2]==0){}else{if(celdas[4][0]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][1]==0 || celdas[4][2]==0){}else{if(celdas[4][1]==celdas[4][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][1]==0 || celdas[5][0]==0){}else{if(celdas[4][1]==celdas[5][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][1]==0 || celdas[5][1]==0){}else{if(celdas[4][1]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][1]==0 || celdas[5][2]==0){}else{if(celdas[4][1]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][2]==0 || celdas[5][0]==0){}else{if(celdas[4][2]==celdas[5][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][2]==0 || celdas[5][1]==0){}else{if(celdas[4][2]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][2]==0 || celdas[5][2]==0){}else{if(celdas[4][2]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][0]==0 || celdas[5][1]==0){}else{if(celdas[5][0]==celdas[5][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][0]==0 || celdas[5][2]==0){}else{if(celdas[5][0]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][1]==0 || celdas[5][2]==0){}else{if(celdas[5][1]==celdas[5][2]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>0){verificar_matriz_4="ERROR";}else{}
	//verificando matriz_5 [3][3] - [5][5]
	var cont_mat=0;
	if(celdas[3][3]==0 || celdas[3][4]==0){}else{if(celdas[3][3]==celdas[3][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[3][5]==0){}else{if(celdas[3][3]==celdas[3][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[4][3]==0){}else{if(celdas[3][3]==celdas[4][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[4][4]==0){}else{if(celdas[3][3]==celdas[4][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[4][5]==0){}else{if(celdas[3][3]==celdas[4][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[5][3]==0){}else{if(celdas[3][3]==celdas[5][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[5][4]==0){}else{if(celdas[3][3]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][3]==0 || celdas[5][5]==0){}else{if(celdas[3][3]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[3][5]==0){}else{if(celdas[3][4]==celdas[3][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[4][3]==0){}else{if(celdas[3][4]==celdas[4][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[4][4]==0){}else{if(celdas[3][4]==celdas[4][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[4][5]==0){}else{if(celdas[3][4]==celdas[4][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[5][3]==0){}else{if(celdas[3][4]==celdas[5][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[5][4]==0){}else{if(celdas[3][4]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][4]==0 || celdas[5][5]==0){}else{if(celdas[3][4]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][5]==0 || celdas[4][3]==0){}else{if(celdas[3][5]==celdas[4][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][5]==0 || celdas[4][4]==0){}else{if(celdas[3][5]==celdas[4][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][5]==0 || celdas[4][5]==0){}else{if(celdas[3][5]==celdas[4][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][5]==0 || celdas[5][3]==0){}else{if(celdas[3][5]==celdas[5][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][5]==0 || celdas[5][4]==0){}else{if(celdas[3][5]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][5]==0 || celdas[5][5]==0){}else{if(celdas[3][5]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][3]==0 || celdas[4][4]==0){}else{if(celdas[4][3]==celdas[4][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][3]==0 || celdas[4][5]==0){}else{if(celdas[4][3]==celdas[4][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][3]==0 || celdas[5][3]==0){}else{if(celdas[4][3]==celdas[5][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][3]==0 || celdas[5][4]==0){}else{if(celdas[4][3]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][3]==0 || celdas[5][5]==0){}else{if(celdas[4][3]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][4]==0 || celdas[4][5]==0){}else{if(celdas[4][4]==celdas[4][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][4]==0 || celdas[5][3]==0){}else{if(celdas[4][4]==celdas[5][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][4]==0 || celdas[5][4]==0){}else{if(celdas[4][4]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][4]==0 || celdas[5][5]==0){}else{if(celdas[4][4]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][5]==0 || celdas[5][3]==0){}else{if(celdas[4][5]==celdas[5][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][5]==0 || celdas[5][4]==0){}else{if(celdas[4][5]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][5]==0 || celdas[5][5]==0){}else{if(celdas[4][5]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][3]==0 || celdas[5][4]==0){}else{if(celdas[5][3]==celdas[5][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][3]==0 || celdas[5][5]==0){}else{if(celdas[5][3]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][4]==0 || celdas[5][5]==0){}else{if(celdas[5][4]==celdas[5][5]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>1){verificar_matriz_5="ERROR";}else{}
	//verificando matriz_6 [3][6] - [5][8]
	var cont_mat=0;
	if(celdas[3][6]==0 || celdas[3][7]==0){}else{if(celdas[3][6]==celdas[3][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[3][8]==0){}else{if(celdas[3][6]==celdas[3][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[4][6]==0){}else{if(celdas[3][6]==celdas[4][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[4][7]==0){}else{if(celdas[3][6]==celdas[4][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[4][8]==0){}else{if(celdas[3][6]==celdas[4][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[5][6]==0){}else{if(celdas[3][6]==celdas[5][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[5][7]==0){}else{if(celdas[3][6]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][6]==0 || celdas[5][8]==0){}else{if(celdas[3][6]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[3][8]==0){}else{if(celdas[3][7]==celdas[3][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[4][6]==0){}else{if(celdas[3][7]==celdas[4][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[4][7]==0){}else{if(celdas[3][7]==celdas[4][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[4][8]==0){}else{if(celdas[3][7]==celdas[4][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[5][6]==0){}else{if(celdas[3][7]==celdas[5][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[5][7]==0){}else{if(celdas[3][7]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][7]==0 || celdas[5][8]==0){}else{if(celdas[3][7]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][8]==0 || celdas[4][6]==0){}else{if(celdas[3][8]==celdas[4][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][8]==0 || celdas[4][7]==0){}else{if(celdas[3][8]==celdas[4][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][8]==0 || celdas[4][8]==0){}else{if(celdas[3][8]==celdas[4][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][8]==0 || celdas[5][6]==0){}else{if(celdas[3][8]==celdas[5][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][8]==0 || celdas[5][7]==0){}else{if(celdas[3][8]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[3][8]==0 || celdas[5][8]==0){}else{if(celdas[3][8]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][6]==0 || celdas[4][7]==0){}else{if(celdas[4][6]==celdas[4][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][6]==0 || celdas[4][8]==0){}else{if(celdas[4][6]==celdas[4][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][6]==0 || celdas[5][6]==0){}else{if(celdas[4][6]==celdas[5][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][6]==0 || celdas[5][7]==0){}else{if(celdas[4][6]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][6]==0 || celdas[5][8]==0){}else{if(celdas[4][6]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][7]==0 || celdas[4][8]==0){}else{if(celdas[4][7]==celdas[4][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][7]==0 || celdas[5][6]==0){}else{if(celdas[4][7]==celdas[5][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][7]==0 || celdas[5][7]==0){}else{if(celdas[4][7]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][7]==0 || celdas[5][8]==0){}else{if(celdas[4][7]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][8]==0 || celdas[5][6]==0){}else{if(celdas[4][8]==celdas[5][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][8]==0 || celdas[5][7]==0){}else{if(celdas[4][8]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[4][8]==0 || celdas[5][8]==0){}else{if(celdas[4][8]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][6]==0 || celdas[5][7]==0){}else{if(celdas[5][6]==celdas[5][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][6]==0 || celdas[5][8]==0){}else{if(celdas[5][6]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[5][7]==0 || celdas[5][8]==0){}else{if(celdas[5][7]==celdas[5][8]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>1){verificar_matriz_6="ERROR";}else{}
	//verificando matriz_7 [6][0] - [8][2]
	var cont_mat=0;
	if(celdas[6][0]==0 || celdas[6][1]==0){}else{if(celdas[6][0]==celdas[6][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[6][2]==0){}else{if(celdas[6][0]==celdas[6][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[7][0]==0){}else{if(celdas[6][0]==celdas[7][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[7][1]==0){}else{if(celdas[6][0]==celdas[7][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[7][2]==0){}else{if(celdas[6][0]==celdas[7][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[8][0]==0){}else{if(celdas[6][0]==celdas[8][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[8][1]==0){}else{if(celdas[6][0]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][0]==0 || celdas[8][2]==0){}else{if(celdas[6][0]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[6][2]==0){}else{if(celdas[6][1]==celdas[6][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[7][0]==0){}else{if(celdas[6][1]==celdas[7][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[7][1]==0){}else{if(celdas[6][1]==celdas[7][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[7][2]==0){}else{if(celdas[6][1]==celdas[7][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[8][0]==0){}else{if(celdas[6][1]==celdas[8][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[8][1]==0){}else{if(celdas[6][1]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][1]==0 || celdas[8][2]==0){}else{if(celdas[6][1]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][2]==0 || celdas[7][0]==0){}else{if(celdas[6][2]==celdas[7][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][2]==0 || celdas[7][1]==0){}else{if(celdas[6][2]==celdas[7][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][2]==0 || celdas[7][2]==0){}else{if(celdas[6][2]==celdas[7][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][2]==0 || celdas[8][0]==0){}else{if(celdas[6][2]==celdas[8][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][2]==0 || celdas[8][1]==0){}else{if(celdas[6][2]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][2]==0 || celdas[8][2]==0){}else{if(celdas[6][2]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][0]==0 || celdas[7][1]==0){}else{if(celdas[7][0]==celdas[7][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][0]==0 || celdas[7][2]==0){}else{if(celdas[7][0]==celdas[7][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][0]==0 || celdas[8][0]==0){}else{if(celdas[7][0]==celdas[8][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][0]==0 || celdas[8][1]==0){}else{if(celdas[7][0]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][0]==0 || celdas[8][2]==0){}else{if(celdas[7][0]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][1]==0 || celdas[7][2]==0){}else{if(celdas[7][1]==celdas[7][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][1]==0 || celdas[8][0]==0){}else{if(celdas[7][1]==celdas[8][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][1]==0 || celdas[8][1]==0){}else{if(celdas[7][1]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][1]==0 || celdas[8][2]==0){}else{if(celdas[7][1]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][2]==0 || celdas[8][0]==0){}else{if(celdas[7][2]==celdas[8][0]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][2]==0 || celdas[8][1]==0){}else{if(celdas[7][2]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][2]==0 || celdas[8][2]==0){}else{if(celdas[7][2]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][0]==0 || celdas[8][1]==0){}else{if(celdas[8][0]==celdas[8][1]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][0]==0 || celdas[8][2]==0){}else{if(celdas[8][0]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][1]==0 || celdas[8][2]==0){}else{if(celdas[8][1]==celdas[8][2]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>0){verificar_matriz_7="ERROR";}else{}
	//verificando matriz_8 [6][3] - [8][5]
	var cont_mat=0;
	if(celdas[6][3]==0 || celdas[6][4]==0){}else{if(celdas[6][3]==celdas[6][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[6][5]==0){}else{if(celdas[6][3]==celdas[6][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[7][3]==0){}else{if(celdas[6][3]==celdas[7][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[7][4]==0){}else{if(celdas[6][3]==celdas[7][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[7][5]==0){}else{if(celdas[6][3]==celdas[7][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[8][3]==0){}else{if(celdas[6][3]==celdas[8][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[8][4]==0){}else{if(celdas[6][3]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][3]==0 || celdas[8][5]==0){}else{if(celdas[6][3]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[6][5]==0){}else{if(celdas[6][4]==celdas[6][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[7][3]==0){}else{if(celdas[6][4]==celdas[7][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[7][4]==0){}else{if(celdas[6][4]==celdas[7][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[7][5]==0){}else{if(celdas[6][4]==celdas[7][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[8][3]==0){}else{if(celdas[6][4]==celdas[8][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[8][4]==0){}else{if(celdas[6][4]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][4]==0 || celdas[8][5]==0){}else{if(celdas[6][4]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][5]==0 || celdas[7][3]==0){}else{if(celdas[6][5]==celdas[7][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][5]==0 || celdas[7][4]==0){}else{if(celdas[6][5]==celdas[7][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][5]==0 || celdas[7][5]==0){}else{if(celdas[6][5]==celdas[7][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][5]==0 || celdas[8][3]==0){}else{if(celdas[6][5]==celdas[8][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][5]==0 || celdas[8][4]==0){}else{if(celdas[6][5]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][5]==0 || celdas[8][5]==0){}else{if(celdas[6][5]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][3]==0 || celdas[7][4]==0){}else{if(celdas[7][3]==celdas[7][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][3]==0 || celdas[7][5]==0){}else{if(celdas[7][3]==celdas[7][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][3]==0 || celdas[8][3]==0){}else{if(celdas[7][3]==celdas[8][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][3]==0 || celdas[8][4]==0){}else{if(celdas[7][3]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][3]==0 || celdas[8][5]==0){}else{if(celdas[7][3]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][4]==0 || celdas[7][5]==0){}else{if(celdas[7][4]==celdas[7][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][4]==0 || celdas[8][3]==0){}else{if(celdas[7][4]==celdas[8][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][4]==0 || celdas[8][4]==0){}else{if(celdas[7][4]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][4]==0 || celdas[8][5]==0){}else{if(celdas[7][4]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][5]==0 || celdas[8][3]==0){}else{if(celdas[7][5]==celdas[8][3]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][5]==0 || celdas[8][4]==0){}else{if(celdas[7][5]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][5]==0 || celdas[8][5]==0){}else{if(celdas[7][5]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][3]==0 || celdas[8][4]==0){}else{if(celdas[8][3]==celdas[8][4]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][3]==0 || celdas[8][5]==0){}else{if(celdas[8][3]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][4]==0 || celdas[8][5]==0){}else{if(celdas[8][4]==celdas[8][5]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>1){verificar_matriz_8="ERROR";}else{}
	//verificando matriz_9 [6][6] - [8][8]
	var cont_mat=0;
	if(celdas[6][6]==0 || celdas[6][7]==0){}else{if(celdas[6][6]==celdas[6][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[6][8]==0){}else{if(celdas[6][6]==celdas[6][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[7][6]==0){}else{if(celdas[6][6]==celdas[7][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[7][7]==0){}else{if(celdas[6][6]==celdas[7][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[7][8]==0){}else{if(celdas[6][6]==celdas[7][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[8][6]==0){}else{if(celdas[6][6]==celdas[8][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[8][7]==0){}else{if(celdas[6][6]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][6]==0 || celdas[8][8]==0){}else{if(celdas[6][6]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[6][8]==0){}else{if(celdas[6][7]==celdas[6][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[7][6]==0){}else{if(celdas[6][7]==celdas[7][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[7][7]==0){}else{if(celdas[6][7]==celdas[7][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[7][8]==0){}else{if(celdas[6][7]==celdas[7][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[8][6]==0){}else{if(celdas[6][7]==celdas[8][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[8][7]==0){}else{if(celdas[6][7]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][7]==0 || celdas[8][8]==0){}else{if(celdas[6][7]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][8]==0 || celdas[7][6]==0){}else{if(celdas[6][8]==celdas[7][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][8]==0 || celdas[7][7]==0){}else{if(celdas[6][8]==celdas[7][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][8]==0 || celdas[7][8]==0){}else{if(celdas[6][8]==celdas[7][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][8]==0 || celdas[8][6]==0){}else{if(celdas[6][8]==celdas[8][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][8]==0 || celdas[8][7]==0){}else{if(celdas[6][8]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[6][8]==0 || celdas[8][8]==0){}else{if(celdas[6][8]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][6]==0 || celdas[7][7]==0){}else{if(celdas[7][6]==celdas[7][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][6]==0 || celdas[7][8]==0){}else{if(celdas[7][6]==celdas[7][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][6]==0 || celdas[8][6]==0){}else{if(celdas[7][6]==celdas[8][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][6]==0 || celdas[8][7]==0){}else{if(celdas[7][6]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][6]==0 || celdas[8][8]==0){}else{if(celdas[7][6]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][7]==0 || celdas[7][8]==0){}else{if(celdas[7][7]==celdas[7][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][7]==0 || celdas[8][6]==0){}else{if(celdas[7][7]==celdas[8][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][7]==0 || celdas[8][7]==0){}else{if(celdas[7][7]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][7]==0 || celdas[8][8]==0){}else{if(celdas[7][7]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][8]==0 || celdas[8][6]==0){}else{if(celdas[7][8]==celdas[8][6]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][8]==0 || celdas[8][7]==0){}else{if(celdas[7][8]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[7][8]==0 || celdas[8][8]==0){}else{if(celdas[7][8]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][6]==0 || celdas[8][7]==0){}else{if(celdas[8][6]==celdas[8][7]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][6]==0 || celdas[8][8]==0){}else{if(celdas[8][6]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(celdas[8][7]==0 || celdas[8][8]==0){}else{if(celdas[8][7]==celdas[8][8]){cont_mat=cont_mat+1;}else{}}
	if(cont_mat>1){verificar_matriz_9="ERROR";}else{}

	if(verificar_horizontal=="ERROR" && verificar_vertical=="ERROR" && ( verificar_matriz_1=="ERROR" || verificar_matriz_2=="ERROR" || verificar_matriz_3=="ERROR" || verificar_matriz_4=="ERROR" || verificar_matriz_5=="ERROR" || verificar_matriz_6=="ERROR" || verificar_matriz_7=="ERROR" || verificar_matriz_8=="ERROR" || verificar_matriz_9=="ERROR")){
		if(verificar_matriz_1=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR SUPERIOR IZQUIERDO)");
		}
		if(verificar_matriz_2=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR SUPERIOR CENTRAL)");
		}
		if(verificar_matriz_3=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR SUPERIOR DERECHO)");
		}
		if(verificar_matriz_4=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR CENTRAL IZQUIERDO)");
		}
		if(verificar_matriz_5=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR CENTRAL)");
		}
		if(verificar_matriz_6=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR CENTRAL DERECHO)");
		}
		if(verificar_matriz_7=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR INFERIOR IZQUIERDO)");
		}
		if(verificar_matriz_8=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR INFERIOR CENTRAL)");
		}
		if(verificar_matriz_9=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! (ERROR HORIZONTAL, VERTICAL Y EN EL SECTOR INFERIOR DERECHO)");
		}
	}else{
		if(verificar_horizontal=="ERROR" && verificar_vertical=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y VERTICAL");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_1=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR SUPERIOR IZQUIERDO");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_2=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR SUPERIOR CENTRAL");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_3=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR SUPERIOR DERECHO");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_4=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR CENTRAL IZQUIERDO");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_5=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR CENTRAL");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_6=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR CENTRAL DERECHO");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_7=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR INFERIOR IZQUIERDO");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_8=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR INFERIOR CENTRAL");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_matriz_9=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL Y EN EL SECTOR INFERIOR DERECHO");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_1=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR SUPERIOR IZQUIERDO");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_2=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR SUPERIOR CENTRAL");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_3=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR SUPERIOR DERECHO");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_4=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR CENTRAL IZQUIERDO");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_5=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR CENTRAL");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_6=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR CENTRAL DERECHO");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_7=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR INFERIOR IZQUIERDO");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_8=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR INFERIOR CENTRAL");
		}else{}
		if(verificar_vertical=="ERROR" && verificar_matriz_9=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL Y EN EL SECTOR INFERIOR DERECHO");
		}else{}
		if(verificar_horizontal=="ERROR" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR HORIZONTAL");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="ERROR" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR VERTICAL");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="ERROR" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ SUPERIOR IZQUIERDA");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="ERROR" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ SUPERIOR CENTRAL");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="ERROR" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ SUPERIOR DERECHA");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="ERROR" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ CENTRAL IZQUIERDA");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="ERROR" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ  CENTRAL");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="ERROR" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ CENTRAL DERECHA");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="ERROR" && verificar_matriz_8=="OK" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ INFERIOR IZQUIERDA");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="ERROR" && verificar_matriz_9=="OK"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ INFERIOR CENTRAL");
		}else{}
		if(verificar_horizontal=="OK" && verificar_vertical=="OK" &&  verificar_matriz_1=="OK" && verificar_matriz_2=="OK" && verificar_matriz_3=="OK" && verificar_matriz_4=="OK" && verificar_matriz_5=="OK" && verificar_matriz_6=="OK" && verificar_matriz_7=="OK" && verificar_matriz_8=="OK" && verificar_matriz_9=="ERROR"){
			alert("¡¡¡ESTE NÚMERO NO VA AHÍ!!! ERROR MATRIZ INFERIOR DERECHA");
		}else{}
	}
}
</script>