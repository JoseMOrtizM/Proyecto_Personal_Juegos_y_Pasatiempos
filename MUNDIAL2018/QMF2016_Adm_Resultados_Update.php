<?php

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

try{
	
	$id=htmlentities(addslashes($_POST['id']));
	$juego=htmlentities(addslashes($_POST['juego']));
	$equipo_1=htmlentities(addslashes($_POST['equipo_1']));
	$gol_1=htmlentities(addslashes($_POST['gol_1']));
	$gol_2=htmlentities(addslashes($_POST['gol_2']));
	$equipo_2=htmlentities(addslashes($_POST['equipo_2']));
	$jugado=htmlentities(addslashes($_POST['jugado']));
	require ("conexion.php");
	$consulta="UPDATE `resultados` SET GOL_1=$gol_1, GOL_2=$gol_2, JUGADO='$jugado' WHERE ID='$id'";
	$resultados=mysqli_query($conexion,$consulta);

/// la lumpia de los puntos por equipo

	$consulta="SELECT * FROM `RESULTADOS` WHERE JUGADO='SI' LIMIT 0,48";
	$resultados=mysqli_query($conexion,$consulta);
	$cta=0;
	while(($fila=mysqli_fetch_array($resultados))==true){
		$cta=$cta+1;
	}
	mysqli_close($conexion);
	
	require ("conexion.php");
	if($cta==48){
	$min_consulta=0;
	$max_consulta=6;
	$paso_de_grupo=1;
	while($paso_de_grupo<=8){
		$consulta_03="SELECT * FROM `resultados` LIMIT $min_consulta,$max_consulta";
		$resultados_03=mysqli_query($conexion,$consulta_03);
		if(($fila=mysqli_fetch_array($resultados_03))==true){
			$J_A1A2_Gol_A1=$fila["GOL_1"];
			$J_A1A2_Gol_A2=$fila["GOL_2"];
			$equipo_A1=$fila["EQUIPO_1"];
			$equipo_A2=$fila["EQUIPO_2"];}
		if(($fila=mysqli_fetch_array($resultados_03))==true){
			$J_A1A3_Gol_A1=$fila["GOL_1"];
			$J_A1A3_Gol_A3=$fila["GOL_2"];
			$equipo_A3=$fila["EQUIPO_2"];}
		if(($fila=mysqli_fetch_array($resultados_03))==true){
			$J_A1A4_Gol_A1=$fila["GOL_1"];
			$J_A1A4_Gol_A4=$fila["GOL_2"];
			$equipo_A4=$fila["EQUIPO_2"];}
		if(($fila=mysqli_fetch_array($resultados_03))==true){
			$J_A2A3_Gol_A2=$fila["GOL_1"];
			$J_A2A3_Gol_A3=$fila["GOL_2"];}
		if(($fila=mysqli_fetch_array($resultados_03))==true){
			$J_A2A4_Gol_A2=$fila["GOL_1"];
			$J_A2A4_Gol_A4=$fila["GOL_2"];}
		if(($fila=mysqli_fetch_array($resultados_03))==true){
			$J_A3A4_Gol_A3=$fila["GOL_1"];
			$J_A3A4_Gol_A4=$fila["GOL_2"];}
	  
	  /* ORDEN DE CLASIFICACIÓN:
	  a) Mayor número de puntos obtenidos en todos los partidos del grupo.
	  b) Diferencia de goles en todos los partidos de grupo.
	  c) Mayor número de goles marcados en todos los partidos de grupo.
	  Si dos o más equipos tienen el mismo resultado conforme a los tres criterios arriba mencionados, sus lugares se determinarán de la siguiente forma:
	  d) Mayor número de puntos obtenidos en los partidos de grupo (partidos directos) entre los equipos en cuestión.
	  e) Diferencia de goles en los partidos de grupo entre los equipos en cuestión.
	  f) Mayor número de goles marcados en los partidos de grupo entre los equipos en cuestión.
	  g) Sorteo por parte de la Comisión Organizadora de la Copa Mundial de la FIFA.*/

	/////////////////////////CALCULANDO LOS PUNTOS DE A1
		
		if($J_A1A2_Gol_A1>$J_A1A2_Gol_A2){$Puntos_A1_J_A1A2=3;}else{if($J_A1A2_Gol_A1<$J_A1A2_Gol_A2){$Puntos_A1_J_A1A2=0;}else{$Puntos_A1_J_A1A2=1;}}
		if($J_A1A3_Gol_A1>$J_A1A3_Gol_A3){$Puntos_A1_J_A1A3=3;}else{if($J_A1A3_Gol_A1<$J_A1A3_Gol_A3){$Puntos_A1_J_A1A3=0;}else{$Puntos_A1_J_A1A3=1;}}
		if($J_A1A4_Gol_A1>$J_A1A4_Gol_A4){$Puntos_A1_J_A1A4=3;}else{if($J_A1A4_Gol_A1<$J_A1A4_Gol_A4){$Puntos_A1_J_A1A4=0;}else{$Puntos_A1_J_A1A4=1;}}
		
		$Puntos_A1=$Puntos_A1_J_A1A2+$Puntos_A1_J_A1A3+$Puntos_A1_J_A1A4;
		
	//CALCULANDO LA DIFERENCIA DE GOLES
		
		$Dif_Goles_A1=$J_A1A2_Gol_A1+$J_A1A3_Gol_A1+$J_A1A4_Gol_A1-$J_A1A2_Gol_A2-$J_A1A3_Gol_A3-$J_A1A4_Gol_A4;
	
	//CALCULANDO LA DIFERENCIA DE GOLES
	
		$Goles_Marcados_A1=$J_A1A2_Gol_A1+$J_A1A3_Gol_A1+$J_A1A4_Gol_A1;
		
	//CALCULANDO PUNTOS HASTA LA REGLA C.
		
		$Total_Puntos_A1=$Puntos_A1+(0.001*$Dif_Goles_A1)+(0.00001*$Goles_Marcados_A1);
		
	/////////////////////////CALCULANDO LOS PUNTOS DE A2
		
		if($J_A1A2_Gol_A2>$J_A1A2_Gol_A1){$Puntos_A2_J_A1A2=3;}else{if($J_A1A2_Gol_A2<$J_A1A2_Gol_A1){$Puntos_A2_J_A1A2=0;}else{$Puntos_A2_J_A1A2=1;}}
		if($J_A2A3_Gol_A2>$J_A2A3_Gol_A3){$Puntos_A2_J_A2A3=3;}else{if($J_A2A3_Gol_A2<$J_A2A3_Gol_A3){$Puntos_A2_J_A2A3=0;}else{$Puntos_A2_J_A2A3=1;}}
		if($J_A2A4_Gol_A2>$J_A2A4_Gol_A4){$Puntos_A2_J_A2A4=3;}else{if($J_A2A4_Gol_A2<$J_A2A4_Gol_A4){$Puntos_A2_J_A2A4=0;}else{$Puntos_A2_J_A2A4=1;}}
		
		$Puntos_A2=$Puntos_A2_J_A1A2+$Puntos_A2_J_A2A3+$Puntos_A2_J_A2A4;
		
	//CALCULANDO LA DIFERENCIA DE GOLES
		
		$Dif_Goles_A2=$J_A1A2_Gol_A2+$J_A2A3_Gol_A2+$J_A2A4_Gol_A2-$J_A1A2_Gol_A1-$J_A2A3_Gol_A3-$J_A2A4_Gol_A4;
	
	//CALCULANDO LA DIFERENCIA DE GOLES
	
		$Goles_Marcados_A2=$J_A1A2_Gol_A2+$J_A2A3_Gol_A2+$J_A2A4_Gol_A2;
		
	//CALCULANDO PUNTOS HASTA LA REGLA C.
		
		$Total_Puntos_A2=$Puntos_A2+(0.001*$Dif_Goles_A2)+(0.00001*$Goles_Marcados_A2);
		
	/////////////////////////CALCULANDO LOS PUNTOS DE A3
		
		if($J_A1A3_Gol_A3>$J_A1A3_Gol_A1){$Puntos_A3_J_A1A3=3;}else{if($J_A1A3_Gol_A3<$J_A1A3_Gol_A1){$Puntos_A3_J_A1A3=0;}else{$Puntos_A3_J_A1A3=1;}}
		if($J_A2A3_Gol_A3>$J_A2A3_Gol_A2){$Puntos_A3_J_A2A3=3;}else{if($J_A2A3_Gol_A3<$J_A2A3_Gol_A2){$Puntos_A3_J_A2A3=0;}else{$Puntos_A3_J_A2A3=1;}}
		if($J_A3A4_Gol_A3>$J_A3A4_Gol_A4){$Puntos_A3_J_A3A4=3;}else{if($J_A3A4_Gol_A3<$J_A3A4_Gol_A4){$Puntos_A3_J_A3A4=0;}else{$Puntos_A3_J_A3A4=1;}}
		
		$Puntos_A3=$Puntos_A3_J_A1A3+$Puntos_A3_J_A2A3+$Puntos_A3_J_A3A4;
		
	//CALCULANDO LA DIFERENCIA DE GOLES
		
		$Dif_Goles_A3=$J_A1A3_Gol_A3+$J_A2A3_Gol_A3+$J_A3A4_Gol_A3-$J_A1A3_Gol_A1-$J_A2A3_Gol_A2-$J_A3A4_Gol_A4;
	
	//CALCULANDO LA DIFERENCIA DE GOLES
	
		$Goles_Marcados_A3=$J_A1A3_Gol_A3+$J_A2A3_Gol_A3+$J_A3A4_Gol_A3;
		
	//CALCULANDO PUNTOS HASTA LA REGLA C.
		
		$Total_Puntos_A3=$Puntos_A3+(0.001*$Dif_Goles_A3)+(0.00001*$Goles_Marcados_A3);
		
	/////////////////////////CALCULANDO LOS PUNTOS DE A4
		
		if($J_A1A4_Gol_A4>$J_A1A4_Gol_A1){$Puntos_A4_J_A1A4=3;}else{if($J_A1A4_Gol_A4<$J_A1A4_Gol_A1){$Puntos_A4_J_A1A4=0;}else{$Puntos_A4_J_A1A4=1;}}
		if($J_A2A4_Gol_A4>$J_A2A4_Gol_A2){$Puntos_A4_J_A2A4=3;}else{if($J_A2A4_Gol_A4<$J_A2A4_Gol_A2){$Puntos_A4_J_A2A4=0;}else{$Puntos_A4_J_A2A4=1;}}
		if($J_A3A4_Gol_A4>$J_A3A4_Gol_A3){$Puntos_A4_J_A3A4=3;}else{if($J_A3A4_Gol_A4<$J_A3A4_Gol_A3){$Puntos_A4_J_A3A4=0;}else{$Puntos_A4_J_A3A4=1;}}
		
		$Puntos_A4=$Puntos_A4_J_A1A4+$Puntos_A4_J_A2A4+$Puntos_A4_J_A3A4;
		
	//CALCULANDO LA DIFERENCIA DE GOLES
		
		$Dif_Goles_A4=$J_A1A4_Gol_A4+$J_A2A4_Gol_A4+$J_A3A4_Gol_A4-$J_A1A4_Gol_A1-$J_A2A4_Gol_A2-$J_A3A4_Gol_A3;
	
	//CALCULANDO LA DIFERENCIA DE GOLES
	
		$Goles_Marcados_A4=$J_A1A4_Gol_A4+$J_A2A4_Gol_A4+$J_A3A4_Gol_A4;
		
	//CALCULANDO PUNTOS HASTA LA REGLA C.
		
		$Total_Puntos_A4=$Puntos_A4+(0.001*$Dif_Goles_A4)+(0.00001*$Goles_Marcados_A4);
		
///////////////////////////////////////CALCULANDO LAS REGLAS D, E y F

	/////////////////////////CALCULANDO LOS PUNTOS FINALES DE A1
		
		$Gran_Total_de_A1=$Total_Puntos_A1;
		if($Total_Puntos_A1==$Total_Puntos_A2){$Gran_Total_de_A1=($Total_Puntos_A1+0.0000001*($Puntos_A1_J_A1A2-$Puntos_A2_J_A1A2)+0.000000001*($J_A1A2_Gol_A1-$J_A1A2_Gol_A2)+0.00000000001*$J_A1A2_Gol_A1);}
		if($Total_Puntos_A1==$Total_Puntos_A3){$Gran_Total_de_A1=($Total_Puntos_A1+0.0000001*($Puntos_A1_J_A1A3-$Puntos_A3_J_A1A3)+0.000000001*($J_A1A3_Gol_A1-$J_A1A3_Gol_A3)+0.00000000001*$J_A1A3_Gol_A1);}
		if($Total_Puntos_A1==$Total_Puntos_A4){$Gran_Total_de_A1=($Total_Puntos_A1+0.0000001*($Puntos_A1_J_A1A4-$Puntos_A4_J_A1A4)+0.000000001*($J_A1A4_Gol_A1-$J_A1A4_Gol_A4)+0.00000000001*$J_A1A4_Gol_A1);}	

	/////////////////////////CALCULANDO LOS PUNTOS FINALES DE A2
		
		$Gran_Total_de_A2=$Total_Puntos_A2;
		if($Total_Puntos_A2==$Total_Puntos_A1){$Gran_Total_de_A2=($Total_Puntos_A2+0.0000001*($Puntos_A2_J_A1A2-$Puntos_A1_J_A1A2)+0.000000001*($J_A1A2_Gol_A2-$J_A1A2_Gol_A1)+0.00000000001*$J_A1A2_Gol_A2);}
		if($Total_Puntos_A2==$Total_Puntos_A3){$Gran_Total_de_A2=($Total_Puntos_A2+0.0000001*($Puntos_A2_J_A2A3-$Puntos_A3_J_A2A3)+0.000000001*($J_A2A3_Gol_A2-$J_A2A3_Gol_A3)+0.00000000001*$J_A2A3_Gol_A2);}
		if($Total_Puntos_A2==$Total_Puntos_A4){$Gran_Total_de_A2=($Total_Puntos_A2+0.0000001*($Puntos_A2_J_A2A4-$Puntos_A4_J_A2A4)+0.000000001*($J_A2A4_Gol_A2-$J_A2A4_Gol_A4)+0.00000000001*$J_A2A4_Gol_A2);}	

	/////////////////////////CALCULANDO LOS PUNTOS FINALES DE A3
		
		$Gran_Total_de_A3=$Total_Puntos_A3;
		if($Total_Puntos_A3==$Total_Puntos_A1){$Gran_Total_de_A3=($Total_Puntos_A3+0.0000001*($Puntos_A3_J_A1A3-$Puntos_A1_J_A1A3)+0.000000001*($J_A1A3_Gol_A3-$J_A1A3_Gol_A1)+0.00000000001*$J_A1A3_Gol_A3);}
		if($Total_Puntos_A3==$Total_Puntos_A2){$Gran_Total_de_A3=($Total_Puntos_A3+0.0000001*($Puntos_A3_J_A2A3-$Puntos_A2_J_A2A3)+0.000000001*($J_A2A3_Gol_A3-$J_A2A3_Gol_A2)+0.00000000001*$J_A2A3_Gol_A3);}
		if($Total_Puntos_A3==$Total_Puntos_A4){$Gran_Total_de_A3=($Total_Puntos_A3+0.0000001*($Puntos_A3_J_A3A4-$Puntos_A4_J_A3A4)+0.000000001*($J_A3A4_Gol_A3-$J_A3A4_Gol_A4)+0.00000000001*$J_A3A4_Gol_A3);}	

	/////////////////////////CALCULANDO LOS PUNTOS FINALES DE A4
		
		$Gran_Total_de_A4=$Total_Puntos_A4;
		if($Total_Puntos_A4==$Total_Puntos_A1){$Gran_Total_de_A4=($Total_Puntos_A4+0.0000001*($Puntos_A4_J_A1A4-$Puntos_A1_J_A1A4)+0.000000001*($J_A1A4_Gol_A4-$J_A1A4_Gol_A1)+0.00000000001*$J_A1A4_Gol_A4);}
		if($Total_Puntos_A4==$Total_Puntos_A2){$Gran_Total_de_A4=($Total_Puntos_A4+0.0000001*($Puntos_A4_J_A2A4-$Puntos_A2_J_A2A4)+0.000000001*($J_A2A4_Gol_A4-$J_A2A4_Gol_A2)+0.00000000001*$J_A2A4_Gol_A4);}
		if($Total_Puntos_A4==$Total_Puntos_A3){$Gran_Total_de_A4=($Total_Puntos_A4+0.0000001*($Puntos_A4_J_A3A4-$Puntos_A3_J_A3A4)+0.000000001*($J_A3A4_Gol_A4-$J_A3A4_Gol_A3)+0.00000000001*$J_A3A4_Gol_A4);}	


	////////// definiendo los clasificados del grupo A
	
	$grupo_A_clasificado_1="Empate";
	$grupo_A_clasificado_2="Empate";
	
	if($Gran_Total_de_A1>$Gran_Total_de_A2 and $Gran_Total_de_A1>$Gran_Total_de_A3 and $Gran_Total_de_A1>$Gran_Total_de_A4){$grupo_A_clasificado_1=$equipo_A1;
	}else{if($Gran_Total_de_A2>$Gran_Total_de_A1 and $Gran_Total_de_A2>$Gran_Total_de_A3 and $Gran_Total_de_A2>$Gran_Total_de_A4){$grupo_A_clasificado_1=$equipo_A2;
	}else{if($Gran_Total_de_A3>$Gran_Total_de_A1 and $Gran_Total_de_A3>$Gran_Total_de_A2 and $Gran_Total_de_A3>$Gran_Total_de_A4){$grupo_A_clasificado_1=$equipo_A3;
	}else{if($Gran_Total_de_A4>$Gran_Total_de_A1 and $Gran_Total_de_A4>$Gran_Total_de_A2 and $Gran_Total_de_A4>$Gran_Total_de_A3){$grupo_A_clasificado_1=$equipo_A4;
	}}}}

	if(($Gran_Total_de_A1>$Gran_Total_de_A2 and $Gran_Total_de_A1>$Gran_Total_de_A3 and $Gran_Total_de_A1<$Gran_Total_de_A4) or ($Gran_Total_de_A1>$Gran_Total_de_A2 and $Gran_Total_de_A1<$Gran_Total_de_A3 and $Gran_Total_de_A1>$Gran_Total_de_A4) or ($Gran_Total_de_A1<$Gran_Total_de_A2 and $Gran_Total_de_A1>$Gran_Total_de_A3 and $Gran_Total_de_A1>$Gran_Total_de_A4)){$grupo_A_clasificado_2=$equipo_A1;
	}else{if(($Gran_Total_de_A2>$Gran_Total_de_A1 and $Gran_Total_de_A2>$Gran_Total_de_A3 and $Gran_Total_de_A2<$Gran_Total_de_A4) or ($Gran_Total_de_A2>$Gran_Total_de_A1 and $Gran_Total_de_A2<$Gran_Total_de_A3 and $Gran_Total_de_A2>$Gran_Total_de_A4) or ($Gran_Total_de_A2<$Gran_Total_de_A1 and $Gran_Total_de_A2>$Gran_Total_de_A3 and $Gran_Total_de_A2>$Gran_Total_de_A4)){$grupo_A_clasificado_2=$equipo_A2;
	}else{if(($Gran_Total_de_A3>$Gran_Total_de_A1 and $Gran_Total_de_A3>$Gran_Total_de_A2 and $Gran_Total_de_A3<$Gran_Total_de_A4) or ($Gran_Total_de_A3>$Gran_Total_de_A1 and $Gran_Total_de_A3<$Gran_Total_de_A2 and $Gran_Total_de_A3>$Gran_Total_de_A4) or ($Gran_Total_de_A3<$Gran_Total_de_A1 and $Gran_Total_de_A3>$Gran_Total_de_A2 and $Gran_Total_de_A3>$Gran_Total_de_A4)){$grupo_A_clasificado_2=$equipo_A3;
	}else{if(($Gran_Total_de_A4>$Gran_Total_de_A1 and $Gran_Total_de_A4>$Gran_Total_de_A2 and $Gran_Total_de_A4<$Gran_Total_de_A3) or ($Gran_Total_de_A4>$Gran_Total_de_A1 and $Gran_Total_de_A4<$Gran_Total_de_A2 and $Gran_Total_de_A4>$Gran_Total_de_A3) or ($Gran_Total_de_A4<$Gran_Total_de_A1 and $Gran_Total_de_A4>$Gran_Total_de_A2 and $Gran_Total_de_A4>$Gran_Total_de_A3)){$grupo_A_clasificado_2=$equipo_A4;
	}}}}
	
	echo "$equipo_A1 $equipo_A2 $equipo_A3 $equipo_A4 $grupo_A_clasificado_1 $grupo_A_clasificado_2<br>";
	
		$consulta="UPDATE `clasif_8_final` SET PTOS_1=$Gran_Total_de_A1, PTOS_2=$Gran_Total_de_A2, PTOS_3=$Gran_Total_de_A3, PTOS_4=$Gran_Total_de_A4, CLASIF_1='$grupo_A_clasificado_1', CLASIF_2='$grupo_A_clasificado_2' WHERE ID=$paso_de_grupo";
		$resultados=mysqli_query($conexion,$consulta);
				
		$min_consulta=$min_consulta+6;
		$max_consulta=$max_consulta+6;
		$paso_de_grupo=$paso_de_grupo+1;
	}
	}
	
	mysqli_close($conexion);

////// aqui termina el codigo de la lumpia de los puntos por equipos 1° ronda.	

////// aqui empiesa la lumpia de pegar los nombres de los equipos de OCTAVOS para ADELANTE...

	require ("conexion.php");

	$consulta05="SELECT * FROM `clasif_8_final`";
	$resultados05=mysqli_query($conexion,$consulta05);
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_A1=$fila05["CLASIF_1"];
		$Clasif_A2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_B1=$fila05["CLASIF_1"];
		$Clasif_B2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_C1=$fila05["CLASIF_1"];
		$Clasif_C2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_D1=$fila05["CLASIF_1"];
		$Clasif_D2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_E1=$fila05["CLASIF_1"];
		$Clasif_E2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_F1=$fila05["CLASIF_1"];
		$Clasif_F2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_G1=$fila05["CLASIF_1"];
		$Clasif_G2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_H1=$fila05["CLASIF_1"];
		$Clasif_H2=$fila05["CLASIF_2"];}

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_A1', EQUIPO_2='$Clasif_B2' WHERE ID=49";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_B1', EQUIPO_2='$Clasif_A2' WHERE ID=50";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_C1', EQUIPO_2='$Clasif_D2' WHERE ID=51";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_D1', EQUIPO_2='$Clasif_C2' WHERE ID=52";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_E1', EQUIPO_2='$Clasif_F2' WHERE ID=53";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_F1', EQUIPO_2='$Clasif_E2' WHERE ID=54";
	$resultados05=mysqli_query($conexion,$consulta);
	
	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_G1', EQUIPO_2='$Clasif_H2' WHERE ID=55";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_H1', EQUIPO_2='$Clasif_G2' WHERE ID=56";
	$resultados05=mysqli_query($conexion,$consulta);

	mysqli_close($conexion);
	header("location:QMF2016_Adm_Resultados.php");
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>