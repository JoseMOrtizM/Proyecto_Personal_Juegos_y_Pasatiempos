<?php
try{
	require ("conexion.php");
	$consulta="SELECT * FROM `equipos`";
	
	$resultados=mysqli_query($conexion,$consulta);
	
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_A1=$fila["EQ1"];
		$equipo_A2=$fila["EQ2"];
		$equipo_A3=$fila["EQ3"];
		$equipo_A4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_B1=$fila["EQ1"];
		$equipo_B2=$fila["EQ2"];
		$equipo_B3=$fila["EQ3"];
		$equipo_B4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_C1=$fila["EQ1"];
		$equipo_C2=$fila["EQ2"];
		$equipo_C3=$fila["EQ3"];
		$equipo_C4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_D1=$fila["EQ1"];
		$equipo_D2=$fila["EQ2"];
		$equipo_D3=$fila["EQ3"];
		$equipo_D4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_E1=$fila["EQ1"];
		$equipo_E2=$fila["EQ2"];
		$equipo_E3=$fila["EQ3"];
		$equipo_E4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_F1=$fila["EQ1"];
		$equipo_F2=$fila["EQ2"];
		$equipo_F3=$fila["EQ3"];
		$equipo_F4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_G1=$fila["EQ1"];
		$equipo_G2=$fila["EQ2"];
		$equipo_G3=$fila["EQ3"];
		$equipo_G4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_H1=$fila["EQ1"];
		$equipo_H2=$fila["EQ2"];
		$equipo_H3=$fila["EQ3"];
		$equipo_H4=$fila["EQ4"];}

	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<title>Quiniela_Mundial_2018/Nuevo_Usuario</TITLE>
	<link rel="stylesheet" href="estilo_general.css"/>

<script>

/*
- ORDEN DE CLASIFICACIÓN:
a) Mayor número de puntos obtenidos en todos los partidos del grupo.
b) Diferencia de goles en todos los partidos de grupo.
c) Mayor número de goles marcados en todos los partidos de grupo.
Si dos o más equipos tienen el mismo resultado conforme a los tres criterios arriba mencionados, sus lugares se determinarán de la siguiente forma:
d) Mayor número de puntos obtenidos en los partidos de grupo (partidos directos) entre los equipos en cuestión.
e) Diferencia de goles en los partidos de grupo entre los equipos en cuestión.
f) Mayor número de goles marcados en los partidos de grupo entre los equipos en cuestión.
g) Sorteo por parte de la Comisión Organizadora de la Copa Mundial de la FIFA.
*/

//declaracion de variables para que aparescan los nombres de los equipos

	var grupo_A1="<?php echo "$equipo_A1"; ?>";
	var grupo_A2="<?php echo "$equipo_A2"; ?>";
	var grupo_A3="<?php echo "$equipo_A3"; ?>";
	var grupo_A4="<?php echo "$equipo_A4"; ?>";
	var grupo_B1="<?php echo "$equipo_B1"; ?>";
	var grupo_B2="<?php echo "$equipo_B2"; ?>";
	var grupo_B3="<?php echo "$equipo_B3"; ?>";
	var grupo_B4="<?php echo "$equipo_B4"; ?>";
	var grupo_C1="<?php echo "$equipo_C1"; ?>";
	var grupo_C2="<?php echo "$equipo_C2"; ?>";
	var grupo_C3="<?php echo "$equipo_C3"; ?>";
	var grupo_C4="<?php echo "$equipo_C4"; ?>";
	var grupo_D1="<?php echo "$equipo_D1"; ?>";
	var grupo_D2="<?php echo "$equipo_D2"; ?>";
	var grupo_D3="<?php echo "$equipo_D3"; ?>";
	var grupo_D4="<?php echo "$equipo_D4"; ?>";
	var grupo_E1="<?php echo "$equipo_E1"; ?>";
	var grupo_E2="<?php echo "$equipo_E2"; ?>";
	var grupo_E3="<?php echo "$equipo_E3"; ?>";
	var grupo_E4="<?php echo "$equipo_E4"; ?>";
	var grupo_F1="<?php echo "$equipo_F1"; ?>";
	var grupo_F2="<?php echo "$equipo_F2"; ?>";
	var grupo_F3="<?php echo "$equipo_F3"; ?>";
	var grupo_F4="<?php echo "$equipo_F4"; ?>";
	var grupo_G1="<?php echo "$equipo_G1"; ?>";
	var grupo_G2="<?php echo "$equipo_G2"; ?>";
	var grupo_G3="<?php echo "$equipo_G3"; ?>";
	var grupo_G4="<?php echo "$equipo_G4"; ?>";
	var grupo_H1="<?php echo "$equipo_H1"; ?>";
	var grupo_H2="<?php echo "$equipo_H2"; ?>";
	var grupo_H3="<?php echo "$equipo_H3"; ?>";
	var grupo_H4="<?php echo "$equipo_H4"; ?>";

	var Clasificado_A1;
	var Clasificado_A2;
	var Clasificado_B1;
	var Clasificado_B2;
	var Clasificado_C1;
	var Clasificado_C2;
	var Clasificado_D1;
	var Clasificado_D2;
	var Clasificado_E1;
	var Clasificado_E2;
	var Clasificado_F1;
	var Clasificado_F2;
	var Clasificado_G1;
	var Clasificado_G2;
	var Clasificado_H1;
	var Clasificado_H2;
	
	var Empate_Tecnico_A1;
	var Empate_Tecnico_A2;
	var Empate_Tecnico_B1;
	var Empate_Tecnico_B2;
	var Empate_Tecnico_C1;
	var Empate_Tecnico_C2;
	var Empate_Tecnico_D1;
	var Empate_Tecnico_D2;
	var Empate_Tecnico_E1;
	var Empate_Tecnico_E2;
	var Empate_Tecnico_F1;
	var Empate_Tecnico_F2;
	var Empate_Tecnico_G1;
	var Empate_Tecnico_G2;
	var Empate_Tecnico_H1;
	var Empate_Tecnico_H2;

	var Calcular_Octavos_Equipo_A1;
	var Calcular_Octavos_Equipo_A2;
	var Calcular_Octavos_Equipo_B1;
	var Calcular_Octavos_Equipo_B2;
	var Calcular_Octavos_Equipo_C1;
	var Calcular_Octavos_Equipo_C2;
	var Calcular_Octavos_Equipo_D1;
	var Calcular_Octavos_Equipo_D2;
	var Calcular_Octavos_Equipo_E1;
	var Calcular_Octavos_Equipo_E2;
	var Calcular_Octavos_Equipo_F1;
	var Calcular_Octavos_Equipo_F2;
	var Calcular_Octavos_Equipo_G1;
	var Calcular_Octavos_Equipo_G2;
	var Calcular_Octavos_Equipo_H1;
	var Calcular_Octavos_Equipo_H2;

	var Calcular_Cuartos_Equipo_81;
	var Calcular_Cuartos_Equipo_82;
	var Calcular_Cuartos_Equipo_83;
	var Calcular_Cuartos_Equipo_84;
	var Calcular_Cuartos_Equipo_85;
	var Calcular_Cuartos_Equipo_86;
	var Calcular_Cuartos_Equipo_87;
	var Calcular_Cuartos_Equipo_88;

	var Calcular_SemiFinales_41;
	var Calcular_SemiFinales_42;
	var Calcular_SemiFinales_43;
	var Calcular_SemiFinales_44;

	var Calcular_3_Puesto_SF_1;
	var Calcular_3_Puesto_SF_2;

	var Calcular_Gran_Final_SF_1;
	var Calcular_Gran_Final_SF_2;

	var Calcular_Resumen_Eq_1;
	var Calcular_Resumen_Eq_2;
	var Calcular_Resumen_Eq_3;
	var Calcular_Resumen_Eq_4;

	var Gol_Oct_A1;
	var Gol_Oct_A2;
	var Gol_Oct_B1;
	var Gol_Oct_B2;
	var Gol_Oct_C1;
	var Gol_Oct_C2;
	var Gol_Oct_D1;
	var Gol_Oct_D2;
	var Gol_Oct_E1;
	var Gol_Oct_E2;
	var Gol_Oct_F1;
	var Gol_Oct_F2;
	var Gol_Oct_G1;
	var Gol_Oct_G2;
	var Gol_Oct_H1;
	var Gol_Oct_H2;

	var Gol_Cuart_81;
	var Gol_Cuart_82;
	var Gol_Cuart_83;
	var Gol_Cuart_84;
	var Gol_Cuart_85;
	var Gol_Cuart_86;
	var Gol_Cuart_87;
	var Gol_Cuart_88;

	var Gol_SF_41;
	var Gol_SF_42;
	var Gol_SF_43;
	var Gol_SF_44;

	var Gol_GF_1;
	var Gol_GF_2;
	var Gol_SF_1;
	var Gol_SF_2;

	var Calcular_Equipo_Goleador;

function iniciar(){


//pegado de nombre de los equipos en sus respectivas posiciones en las plantillas de cada grupo
	
	var A1=document.getElementById("Juego_A1_vs_A2_Equipo_A1");A1.innerHTML=grupo_A1;
	var A1=document.getElementById("Juego_A1_vs_A3_Equipo_A1");A1.innerHTML=grupo_A1;
	var A1=document.getElementById("Juego_A1_vs_A4_Equipo_A1");A1.innerHTML=grupo_A1;
	var A1=document.getElementById("Grupo_A_Equipo_1_Posiciones");A1.innerHTML=grupo_A1;
	var A2=document.getElementById("Juego_A1_vs_A2_Equipo_A2");A2.innerHTML=grupo_A2;
	var A2=document.getElementById("Juego_A2_vs_A3_Equipo_A2");A2.innerHTML=grupo_A2;
	var A2=document.getElementById("Juego_A2_vs_A4_Equipo_A2");A2.innerHTML=grupo_A2;
	var A2=document.getElementById("Grupo_A_Equipo_2_Posiciones");A2.innerHTML=grupo_A2;
	var A3=document.getElementById("Juego_A1_vs_A3_Equipo_A3");A3.innerHTML=grupo_A3;
	var A3=document.getElementById("Juego_A2_vs_A3_Equipo_A3");A3.innerHTML=grupo_A3;
	var A3=document.getElementById("Juego_A3_vs_A4_Equipo_A3");A3.innerHTML=grupo_A3;
	var A3=document.getElementById("Grupo_A_Equipo_3_Posiciones");A3.innerHTML=grupo_A3;
	var A4=document.getElementById("Juego_A1_vs_A4_Equipo_A4");A4.innerHTML=grupo_A4;
	var A4=document.getElementById("Juego_A2_vs_A4_Equipo_A4");A4.innerHTML=grupo_A4;
	var A4=document.getElementById("Juego_A3_vs_A4_Equipo_A4");A4.innerHTML=grupo_A4;
	var A4=document.getElementById("Grupo_A_Equipo_4_Posiciones");A4.innerHTML=grupo_A4;
	var B1=document.getElementById("Juego_B1_vs_B2_Equipo_B1");B1.innerHTML=grupo_B1;
	var B1=document.getElementById("Juego_B1_vs_B3_Equipo_B1");B1.innerHTML=grupo_B1;
	var B1=document.getElementById("Juego_B1_vs_B4_Equipo_B1");B1.innerHTML=grupo_B1;
	var B1=document.getElementById("Grupo_B_Equipo_1_Posiciones");B1.innerHTML=grupo_B1;
	var B2=document.getElementById("Juego_B1_vs_B2_Equipo_B2");B2.innerHTML=grupo_B2;
	var B2=document.getElementById("Juego_B2_vs_B3_Equipo_B2");B2.innerHTML=grupo_B2;
	var B2=document.getElementById("Juego_B2_vs_B4_Equipo_B2");B2.innerHTML=grupo_B2;
	var B2=document.getElementById("Grupo_B_Equipo_2_Posiciones");B2.innerHTML=grupo_B2;
	var B3=document.getElementById("Juego_B1_vs_B3_Equipo_B3");B3.innerHTML=grupo_B3;
	var B3=document.getElementById("Juego_B2_vs_B3_Equipo_B3");B3.innerHTML=grupo_B3;
	var B3=document.getElementById("Juego_B3_vs_B4_Equipo_B3");B3.innerHTML=grupo_B3;
	var B3=document.getElementById("Grupo_B_Equipo_3_Posiciones");B3.innerHTML=grupo_B3;
	var B4=document.getElementById("Juego_B1_vs_B4_Equipo_B4");B4.innerHTML=grupo_B4;
	var B4=document.getElementById("Juego_B2_vs_B4_Equipo_B4");B4.innerHTML=grupo_B4;
	var B4=document.getElementById("Juego_B3_vs_B4_Equipo_B4");B4.innerHTML=grupo_B4;
	var B4=document.getElementById("Grupo_B_Equipo_4_Posiciones");B4.innerHTML=grupo_B4;
	var C1=document.getElementById("Juego_C1_vs_C2_Equipo_C1");C1.innerHTML=grupo_C1;
	var C1=document.getElementById("Juego_C1_vs_C3_Equipo_C1");C1.innerHTML=grupo_C1;
	var C1=document.getElementById("Juego_C1_vs_C4_Equipo_C1");C1.innerHTML=grupo_C1;
	var C1=document.getElementById("Grupo_C_Equipo_1_Posiciones");C1.innerHTML=grupo_C1;
	var C2=document.getElementById("Juego_C1_vs_C2_Equipo_C2");C2.innerHTML=grupo_C2;
	var C2=document.getElementById("Juego_C2_vs_C3_Equipo_C2");C2.innerHTML=grupo_C2;
	var C2=document.getElementById("Juego_C2_vs_C4_Equipo_C2");C2.innerHTML=grupo_C2;
	var C2=document.getElementById("Grupo_C_Equipo_2_Posiciones");C2.innerHTML=grupo_C2;
	var C3=document.getElementById("Juego_C1_vs_C3_Equipo_C3");C3.innerHTML=grupo_C3;
	var C3=document.getElementById("Juego_C2_vs_C3_Equipo_C3");C3.innerHTML=grupo_C3;
	var C3=document.getElementById("Juego_C3_vs_C4_Equipo_C3");C3.innerHTML=grupo_C3;
	var C3=document.getElementById("Grupo_C_Equipo_3_Posiciones");C3.innerHTML=grupo_C3;
	var C4=document.getElementById("Juego_C1_vs_C4_Equipo_C4");C4.innerHTML=grupo_C4;
	var C4=document.getElementById("Juego_C2_vs_C4_Equipo_C4");C4.innerHTML=grupo_C4;
	var C4=document.getElementById("Juego_C3_vs_C4_Equipo_C4");C4.innerHTML=grupo_C4;
	var C4=document.getElementById("Grupo_C_Equipo_4_Posiciones");C4.innerHTML=grupo_C4;
	var D1=document.getElementById("Juego_D1_vs_D2_Equipo_D1");D1.innerHTML=grupo_D1;
	var D1=document.getElementById("Juego_D1_vs_D3_Equipo_D1");D1.innerHTML=grupo_D1;
	var D1=document.getElementById("Juego_D1_vs_D4_Equipo_D1");D1.innerHTML=grupo_D1;
	var D1=document.getElementById("Grupo_D_Equipo_1_Posiciones");D1.innerHTML=grupo_D1;
	var D2=document.getElementById("Juego_D1_vs_D2_Equipo_D2");D2.innerHTML=grupo_D2;
	var D2=document.getElementById("Juego_D2_vs_D3_Equipo_D2");D2.innerHTML=grupo_D2;
	var D2=document.getElementById("Juego_D2_vs_D4_Equipo_D2");D2.innerHTML=grupo_D2;
	var D2=document.getElementById("Grupo_D_Equipo_2_Posiciones");D2.innerHTML=grupo_D2;
	var D3=document.getElementById("Juego_D1_vs_D3_Equipo_D3");D3.innerHTML=grupo_D3;
	var D3=document.getElementById("Juego_D2_vs_D3_Equipo_D3");D3.innerHTML=grupo_D3;
	var D3=document.getElementById("Juego_D3_vs_D4_Equipo_D3");D3.innerHTML=grupo_D3;
	var D3=document.getElementById("Grupo_D_Equipo_3_Posiciones");D3.innerHTML=grupo_D3;
	var D4=document.getElementById("Juego_D1_vs_D4_Equipo_D4");D4.innerHTML=grupo_D4;
	var D4=document.getElementById("Juego_D2_vs_D4_Equipo_D4");D4.innerHTML=grupo_D4;
	var D4=document.getElementById("Juego_D3_vs_D4_Equipo_D4");D4.innerHTML=grupo_D4;
	var D4=document.getElementById("Grupo_D_Equipo_4_Posiciones");D4.innerHTML=grupo_D4;
	var E1=document.getElementById("Juego_E1_vs_E2_Equipo_E1");E1.innerHTML=grupo_E1;
	var E1=document.getElementById("Juego_E1_vs_E3_Equipo_E1");E1.innerHTML=grupo_E1;
	var E1=document.getElementById("Juego_E1_vs_E4_Equipo_E1");E1.innerHTML=grupo_E1;
	var E1=document.getElementById("Grupo_E_Equipo_1_Posiciones");E1.innerHTML=grupo_E1;
	var E2=document.getElementById("Juego_E1_vs_E2_Equipo_E2");E2.innerHTML=grupo_E2;
	var E2=document.getElementById("Juego_E2_vs_E3_Equipo_E2");E2.innerHTML=grupo_E2;
	var E2=document.getElementById("Juego_E2_vs_E4_Equipo_E2");E2.innerHTML=grupo_E2;
	var E2=document.getElementById("Grupo_E_Equipo_2_Posiciones");E2.innerHTML=grupo_E2;
	var E3=document.getElementById("Juego_E1_vs_E3_Equipo_E3");E3.innerHTML=grupo_E3;
	var E3=document.getElementById("Juego_E2_vs_E3_Equipo_E3");E3.innerHTML=grupo_E3;
	var E3=document.getElementById("Juego_E3_vs_E4_Equipo_E3");E3.innerHTML=grupo_E3;
	var E3=document.getElementById("Grupo_E_Equipo_3_Posiciones");E3.innerHTML=grupo_E3;
	var E4=document.getElementById("Juego_E1_vs_E4_Equipo_E4");E4.innerHTML=grupo_E4;
	var E4=document.getElementById("Juego_E2_vs_E4_Equipo_E4");E4.innerHTML=grupo_E4;
	var E4=document.getElementById("Juego_E3_vs_E4_Equipo_E4");E4.innerHTML=grupo_E4;
	var E4=document.getElementById("Grupo_E_Equipo_4_Posiciones");E4.innerHTML=grupo_E4;
	var F1=document.getElementById("Juego_F1_vs_F2_Equipo_F1");F1.innerHTML=grupo_F1;
	var F1=document.getElementById("Juego_F1_vs_F3_Equipo_F1");F1.innerHTML=grupo_F1;
	var F1=document.getElementById("Juego_F1_vs_F4_Equipo_F1");F1.innerHTML=grupo_F1;
	var F1=document.getElementById("Grupo_F_Equipo_1_Posiciones");F1.innerHTML=grupo_F1;
	var F2=document.getElementById("Juego_F1_vs_F2_Equipo_F2");F2.innerHTML=grupo_F2;
	var F2=document.getElementById("Juego_F2_vs_F3_Equipo_F2");F2.innerHTML=grupo_F2;
	var F2=document.getElementById("Juego_F2_vs_F4_Equipo_F2");F2.innerHTML=grupo_F2;
	var F2=document.getElementById("Grupo_F_Equipo_2_Posiciones");F2.innerHTML=grupo_F2;
	var F3=document.getElementById("Juego_F1_vs_F3_Equipo_F3");F3.innerHTML=grupo_F3;
	var F3=document.getElementById("Juego_F2_vs_F3_Equipo_F3");F3.innerHTML=grupo_F3;
	var F3=document.getElementById("Juego_F3_vs_F4_Equipo_F3");F3.innerHTML=grupo_F3;
	var F3=document.getElementById("Grupo_F_Equipo_3_Posiciones");F3.innerHTML=grupo_F3;
	var F4=document.getElementById("Juego_F1_vs_F4_Equipo_F4");F4.innerHTML=grupo_F4;
	var F4=document.getElementById("Juego_F2_vs_F4_Equipo_F4");F4.innerHTML=grupo_F4;
	var F4=document.getElementById("Juego_F3_vs_F4_Equipo_F4");F4.innerHTML=grupo_F4;
	var F4=document.getElementById("Grupo_F_Equipo_4_Posiciones");F4.innerHTML=grupo_F4;
	var G1=document.getElementById("Juego_G1_vs_G2_Equipo_G1");G1.innerHTML=grupo_G1;
	var G1=document.getElementById("Juego_G1_vs_G3_Equipo_G1");G1.innerHTML=grupo_G1;
	var G1=document.getElementById("Juego_G1_vs_G4_Equipo_G1");G1.innerHTML=grupo_G1;
	var G1=document.getElementById("Grupo_G_Equipo_1_Posiciones");G1.innerHTML=grupo_G1;
	var G2=document.getElementById("Juego_G1_vs_G2_Equipo_G2");G2.innerHTML=grupo_G2;
	var G2=document.getElementById("Juego_G2_vs_G3_Equipo_G2");G2.innerHTML=grupo_G2;
	var G2=document.getElementById("Juego_G2_vs_G4_Equipo_G2");G2.innerHTML=grupo_G2;
	var G2=document.getElementById("Grupo_G_Equipo_2_Posiciones");G2.innerHTML=grupo_G2;
	var G3=document.getElementById("Juego_G1_vs_G3_Equipo_G3");G3.innerHTML=grupo_G3;
	var G3=document.getElementById("Juego_G2_vs_G3_Equipo_G3");G3.innerHTML=grupo_G3;
	var G3=document.getElementById("Juego_G3_vs_G4_Equipo_G3");G3.innerHTML=grupo_G3;
	var G3=document.getElementById("Grupo_G_Equipo_3_Posiciones");G3.innerHTML=grupo_G3;
	var G4=document.getElementById("Juego_G1_vs_G4_Equipo_G4");G4.innerHTML=grupo_G4;
	var G4=document.getElementById("Juego_G2_vs_G4_Equipo_G4");G4.innerHTML=grupo_G4;
	var G4=document.getElementById("Juego_G3_vs_G4_Equipo_G4");G4.innerHTML=grupo_G4;
	var G4=document.getElementById("Grupo_G_Equipo_4_Posiciones");G4.innerHTML=grupo_G4;
	var H1=document.getElementById("Juego_H1_vs_H2_Equipo_H1");H1.innerHTML=grupo_H1;
	var H1=document.getElementById("Juego_H1_vs_H3_Equipo_H1");H1.innerHTML=grupo_H1;
	var H1=document.getElementById("Juego_H1_vs_H4_Equipo_H1");H1.innerHTML=grupo_H1;
	var H1=document.getElementById("Grupo_H_Equipo_1_Posiciones");H1.innerHTML=grupo_H1;
	var H2=document.getElementById("Juego_H1_vs_H2_Equipo_H2");H2.innerHTML=grupo_H2;
	var H2=document.getElementById("Juego_H2_vs_H3_Equipo_H2");H2.innerHTML=grupo_H2;
	var H2=document.getElementById("Juego_H2_vs_H4_Equipo_H2");H2.innerHTML=grupo_H2;
	var H2=document.getElementById("Grupo_H_Equipo_2_Posiciones");H2.innerHTML=grupo_H2;
	var H3=document.getElementById("Juego_H1_vs_H3_Equipo_H3");H3.innerHTML=grupo_H3;
	var H3=document.getElementById("Juego_H2_vs_H3_Equipo_H3");H3.innerHTML=grupo_H3;
	var H3=document.getElementById("Juego_H3_vs_H4_Equipo_H3");H3.innerHTML=grupo_H3;
	var H3=document.getElementById("Grupo_H_Equipo_3_Posiciones");H3.innerHTML=grupo_H3;
	var H4=document.getElementById("Juego_H1_vs_H4_Equipo_H4");H4.innerHTML=grupo_H4;
	var H4=document.getElementById("Juego_H2_vs_H4_Equipo_H4");H4.innerHTML=grupo_H4;
	var H4=document.getElementById("Juego_H3_vs_H4_Equipo_H4");H4.innerHTML=grupo_H4;
	var H4=document.getElementById("Grupo_H_Equipo_4_Posiciones");H4.innerHTML=grupo_H4;

//dejando a la escucha a los botones del formato

	Calculando_Puntos_Grupo_A=document.getElementById("Calculando_Puntos_Grupo_A");
	Calculando_Puntos_Grupo_A.addEventListener("click",clasificados_Grupo_A,false);
	Calculando_Puntos_Grupo_B=document.getElementById("Calculando_Puntos_Grupo_B");
	Calculando_Puntos_Grupo_B.addEventListener("click",clasificados_Grupo_B,false);
	Calculando_Puntos_Grupo_C=document.getElementById("Calculando_Puntos_Grupo_C");
	Calculando_Puntos_Grupo_C.addEventListener("click",clasificados_Grupo_C,false);
	Calculando_Puntos_Grupo_D=document.getElementById("Calculando_Puntos_Grupo_D");
	Calculando_Puntos_Grupo_D.addEventListener("click",clasificados_Grupo_D,false);
	Calculando_Puntos_Grupo_E=document.getElementById("Calculando_Puntos_Grupo_E");
	Calculando_Puntos_Grupo_E.addEventListener("click",clasificados_Grupo_E,false);
	Calculando_Puntos_Grupo_F=document.getElementById("Calculando_Puntos_Grupo_F");
	Calculando_Puntos_Grupo_F.addEventListener("click",clasificados_Grupo_F,false);
	Calculando_Puntos_Grupo_G=document.getElementById("Calculando_Puntos_Grupo_G");
	Calculando_Puntos_Grupo_G.addEventListener("click",clasificados_Grupo_G,false);
	Calculando_Puntos_Grupo_H=document.getElementById("Calculando_Puntos_Grupo_H");
	Calculando_Puntos_Grupo_H.addEventListener("click",clasificados_Grupo_H,false);

	Puestos_de_Cuartos_Final=document.getElementById("Calcular_Equipos_Cuartos_Final");
	Puestos_de_Cuartos_Final.addEventListener("click",clasificados_Cuartos_Final,false);
	Puestos_de_SemiFinales=document.getElementById("Calcular_Equipos_SemiFinales");
	Puestos_de_SemiFinales.addEventListener("click",clasificados_SemiFinales,false);
	Puestos_de_3_y_Final=document.getElementById("Calcular_Equipos_3_Puesto_Y_FINAL");
	Puestos_de_3_y_Final.addEventListener("click",clasificados_3_y_Final,false);
	Puestos_Resumen_Final=document.getElementById("Calcular_Resumen_Final");
	Puestos_Resumen_Final.addEventListener("click",resumen_Final_y_Equipo_Goleador,false);

}

function clasificados_Grupo_A(){

//se declaran las variables de gol de cada partido del Grupo-A

	var gol_A1A2_A1=document.getElementById("Juego_A1_vs_A2_Gol_A1").value;
	var gol_A1A2_A2=document.getElementById("Juego_A1_vs_A2_Gol_A2").value;
	var gol_A1A3_A1=document.getElementById("Juego_A1_vs_A3_Gol_A1").value;
	var gol_A1A3_A3=document.getElementById("Juego_A1_vs_A3_Gol_A3").value;
	var gol_A1A4_A1=document.getElementById("Juego_A1_vs_A4_Gol_A1").value;
	var gol_A1A4_A4=document.getElementById("Juego_A1_vs_A4_Gol_A4").value;
	var gol_A2A3_A2=document.getElementById("Juego_A2_vs_A3_Gol_A2").value;
	var gol_A2A3_A3=document.getElementById("Juego_A2_vs_A3_Gol_A3").value;
	var gol_A2A4_A2=document.getElementById("Juego_A2_vs_A4_Gol_A2").value;
	var gol_A2A4_A4=document.getElementById("Juego_A2_vs_A4_Gol_A4").value;
	var gol_A3A4_A3=document.getElementById("Juego_A3_vs_A4_Gol_A3").value;
	var gol_A3A4_A4=document.getElementById("Juego_A3_vs_A4_Gol_A4").value;

//Cálculo de puntos del equipo 1 del Grupo-A

	var Puntos_de_A1_en_A1A2;
	if(gol_A1A2_A1>gol_A1A2_A2){Puntos_de_A1_en_A1A2=3;}
	if(gol_A1A2_A1==gol_A1A2_A2){Puntos_de_A1_en_A1A2=1;}
	if(gol_A1A2_A1<gol_A1A2_A2){Puntos_de_A1_en_A1A2=0;}
	var Puntos_de_A1_en_A1A3;
	if(gol_A1A3_A1>gol_A1A3_A3){Puntos_de_A1_en_A1A3=3;}
	if(gol_A1A3_A1==gol_A1A3_A3){Puntos_de_A1_en_A1A3=1;}
	if(gol_A1A3_A1<gol_A1A3_A3){Puntos_de_A1_en_A1A3=0;}
	var Puntos_de_A1_en_A1A4;
	if(gol_A1A4_A1>gol_A1A4_A4){Puntos_de_A1_en_A1A4=3;}
	if(gol_A1A4_A1==gol_A1A4_A4){Puntos_de_A1_en_A1A4=1;}
	if(gol_A1A4_A1<gol_A1A4_A4){Puntos_de_A1_en_A1A4=0;}

	var Gol_Average_de_A1;
	Gol_Average_de_A1=0.001*(parseInt(gol_A1A2_A1)+parseInt(gol_A1A3_A1)+parseInt(gol_A1A4_A1)-parseInt(gol_A1A2_A2)-parseInt(gol_A1A3_A3)-parseInt(gol_A1A4_A4));

	var Gol_Afavor_de_A1;
	Gol_Afavor_de_A1=0.00001*(parseInt(gol_A1A2_A1)+parseInt(gol_A1A3_A1)+parseInt(gol_A1A4_A1));

	var Total_Puntos_de_A1;
	Total_Puntos_de_A1=Puntos_de_A1_en_A1A2+Puntos_de_A1_en_A1A3+Puntos_de_A1_en_A1A4+Gol_Average_de_A1+Gol_Afavor_de_A1;

	var Gran_Total_de_A1;
	if(Total_Puntos_de_A1==Total_Puntos_de_A2){Gran_Total_de_A1=Total_Puntos_de_A1+0.0000001*(Puntos_de_A1_en_A1A2-Puntos_de_A2_en_A1A2)+0.000000001*(parseInt(gol_A1A2_A1)-parseInt(gol_A1A2_A2))+0.00000000001*(parseInt(gol_A1A2_A1))}
	if(Total_Puntos_de_A1==Total_Puntos_de_A3){Gran_Total_de_A1=Total_Puntos_de_A1+0.0000001*(Puntos_de_A1_en_A1A3-Puntos_de_A3_en_A1A3)+0.000000001*(parseInt(gol_A1A3_A1)-parseInt(gol_A1A3_A3))+0.00000000001*(parseInt(gol_A1A3_A1))}
	if(Total_Puntos_de_A1==Total_Puntos_de_A4){Gran_Total_de_A1=Total_Puntos_de_A1+0.0000001*(Puntos_de_A1_en_A1A4-Puntos_de_A4_en_A1A4)+0.000000001*(parseInt(gol_A1A4_A1)-parseInt(gol_A1A4_A4))+0.00000000001*(parseInt(gol_A1A4_A1))}
	else{Gran_Total_de_A1=Total_Puntos_de_A1}

//pegando los puntos del equipo 1 del Grupo-A en donde corresponde
	
	var Grupo_A_Equipo_1_Puntos;
	Grupo_A_Equipo_1_Puntos=document.getElementById("Grupo_A_Equipo_1_Puntos");
	Grupo_A_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_A1);

//Cálculo de puntos del equipo 2 del Grupo-A

	var Puntos_de_A2_en_A1A2;
	if(gol_A1A2_A2>gol_A1A2_A1){Puntos_de_A2_en_A1A2=3;}
	if(gol_A1A2_A2==gol_A1A2_A1){Puntos_de_A2_en_A1A2=1;}
	if(gol_A1A2_A2<gol_A1A2_A1){Puntos_de_A2_en_A1A2=0;}
	var Puntos_de_A2_en_A2A3;
	if(gol_A2A3_A2>gol_A2A3_A3){Puntos_de_A2_en_A2A3=3;}
	if(gol_A2A3_A2==gol_A2A3_A3){Puntos_de_A2_en_A2A3=1;}
	if(gol_A2A3_A2<gol_A2A3_A3){Puntos_de_A2_en_A2A3=0;}
	var Puntos_de_A2_en_A2A4;
	if(gol_A2A4_A2>gol_A2A4_A4){Puntos_de_A2_en_A2A4=3;}
	if(gol_A2A4_A2==gol_A2A4_A4){Puntos_de_A2_en_A2A4=1;}
	if(gol_A2A4_A2<gol_A2A4_A4){Puntos_de_A2_en_A2A4=0;}

	var Gol_Average_de_A2;
	Gol_Average_de_A2=0.001*(parseInt(gol_A1A2_A2)+parseInt(gol_A2A3_A2)+parseInt(gol_A2A4_A2)-parseInt(gol_A1A2_A1)-parseInt(gol_A2A3_A3)-parseInt(gol_A2A4_A4));

	var Gol_Afavor_de_A2;
	Gol_Afavor_de_A2=0.00001*(parseInt(gol_A1A2_A2)+parseInt(gol_A2A3_A2)+parseInt(gol_A2A4_A2));

	var Total_Puntos_de_A2;
	Total_Puntos_de_A2=Puntos_de_A2_en_A1A2+Puntos_de_A2_en_A2A3+Puntos_de_A2_en_A2A4+Gol_Average_de_A2+Gol_Afavor_de_A2;

	var Gran_Total_de_A2;
	if(Total_Puntos_de_A2==Total_Puntos_de_A1){Gran_Total_de_A2=Total_Puntos_de_A2+0.0000001*(Puntos_de_A2_en_A1A2-Puntos_de_A1_en_A1A2)+0.000000001*(parseInt(gol_A1A2_A2)-parseInt(gol_A1A2_A1))+0.00000000001*(parseInt(gol_A1A2_A2))}
	if(Total_Puntos_de_A2==Total_Puntos_de_A3){Gran_Total_de_A2=Total_Puntos_de_A2+0.0000001*(Puntos_de_A2_en_A2A3-Puntos_de_A3_en_A2A3)+0.000000001*(parseInt(gol_A2A3_A2)-parseInt(gol_A2A3_A3))+0.00000000001*(parseInt(gol_A2A3_A2))}
	if(Total_Puntos_de_A2==Total_Puntos_de_A4){Gran_Total_de_A2=Total_Puntos_de_A2+0.0000001*(Puntos_de_A2_en_A2A4-Puntos_de_A4_en_A2A4)+0.000000001*(parseInt(gol_A2A4_A2)-parseInt(gol_A2A4_A4))+0.00000000001*(parseInt(gol_A2A4_A2))}
	else{Gran_Total_de_A2=Total_Puntos_de_A2}

//pegando los puntos del equipo 2 del Grupo-A en donde corresponde
	
	var Grupo_A_Equipo_2_Puntos;
	Grupo_A_Equipo_2_Puntos=document.getElementById("Grupo_A_Equipo_2_Puntos");
	Grupo_A_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_A2);

//Cálculo de puntos del equipo 3 del Grupo-A

	var Puntos_de_A3_en_A1A3;
	if(gol_A1A3_A3>gol_A1A3_A1){Puntos_de_A3_en_A1A3=3;}
	if(gol_A1A3_A3==gol_A1A3_A1){Puntos_de_A3_en_A1A3=1;}
	if(gol_A1A3_A3<gol_A1A3_A1){Puntos_de_A3_en_A1A3=0;}
	var Puntos_de_A3_en_A2A3;
	if(gol_A2A3_A3>gol_A2A3_A2){Puntos_de_A3_en_A2A3=3;}
	if(gol_A2A3_A3==gol_A2A3_A2){Puntos_de_A3_en_A2A3=1;}
	if(gol_A2A3_A3<gol_A2A3_A2){Puntos_de_A3_en_A2A3=0;}
	var Puntos_de_A3_en_A3A4;
	if(gol_A3A4_A3>gol_A3A4_A4){Puntos_de_A3_en_A3A4=3;}
	if(gol_A3A4_A3==gol_A3A4_A4){Puntos_de_A3_en_A3A4=1;}
	if(gol_A3A4_A3<gol_A3A4_A4){Puntos_de_A3_en_A3A4=0;}

	var Gol_Average_de_A3;
	Gol_Average_de_A3=0.001*(parseInt(gol_A1A3_A3)+parseInt(gol_A2A3_A3)+parseInt(gol_A3A4_A3)-parseInt(gol_A1A3_A1)-parseInt(gol_A2A3_A2)-parseInt(gol_A3A4_A4));

	var Gol_Afavor_de_A3;
	Gol_Afavor_de_A3=0.00001*(parseInt(gol_A1A3_A3)+parseInt(gol_A2A3_A3)+parseInt(gol_A3A4_A3));

	var Total_Puntos_de_A3;
	Total_Puntos_de_A3=Puntos_de_A3_en_A1A3+Puntos_de_A3_en_A2A3+Puntos_de_A3_en_A3A4+Gol_Average_de_A3+Gol_Afavor_de_A3;

	var Gran_Total_de_A3;
	if(Total_Puntos_de_A3==Total_Puntos_de_A1){Gran_Total_de_A3=Total_Puntos_de_A3+0.0000001*(Puntos_de_A3_en_A1A3-Puntos_de_A1_en_A1A3)+0.000000001*(parseInt(gol_A1A3_A3)-parseInt(gol_A1A3_A1))+0.00000000001*(parseInt(gol_A1A3_A3))}
	if(Total_Puntos_de_A3==Total_Puntos_de_A2){Gran_Total_de_A3=Total_Puntos_de_A3+0.0000001*(Puntos_de_A3_en_A2A3-Puntos_de_A2_en_A2A3)+0.000000001*(parseInt(gol_A2A3_A3)-parseInt(gol_A2A3_A2))+0.00000000001*(parseInt(gol_A2A3_A3))}
	if(Total_Puntos_de_A3==Total_Puntos_de_A4){Gran_Total_de_A3=Total_Puntos_de_A3+0.0000001*(Puntos_de_A3_en_A3A4-Puntos_de_A4_en_A3A4)+0.000000001*(parseInt(gol_A3A4_A3)-parseInt(gol_A3A4_A4))+0.00000000001*(parseInt(gol_A3A4_A3))}
	else{Gran_Total_de_A3=Total_Puntos_de_A3}

//pegando los puntos del equipo 3 del Grupo-A en donde corresponde
	
	var Grupo_A_Equipo_3_Puntos;
	Grupo_A_Equipo_3_Puntos=document.getElementById("Grupo_A_Equipo_3_Puntos");
	Grupo_A_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_A3);

//Cálculo de puntos del equipo 4 del Grupo-A

	var Puntos_de_A4_en_A1A4;
	if(gol_A1A4_A4>gol_A1A4_A1){Puntos_de_A4_en_A1A4=3;}
	if(gol_A1A4_A4==gol_A1A4_A1){Puntos_de_A4_en_A1A4=1;}

	if(gol_A1A4_A4<gol_A1A4_A1){Puntos_de_A4_en_A1A4=0;}
	var Puntos_de_A4_en_A2A4;
	if(gol_A2A4_A4>gol_A2A4_A2){Puntos_de_A4_en_A2A4=3;}
	if(gol_A2A4_A4==gol_A2A4_A2){Puntos_de_A4_en_A2A4=1;}
	if(gol_A2A4_A4<gol_A2A4_A2){Puntos_de_A4_en_A2A4=0;}
	var Puntos_de_A4_en_A3A4;
	if(gol_A3A4_A4>gol_A3A4_A3){Puntos_de_A4_en_A3A4=3;}
	if(gol_A3A4_A4==gol_A3A4_A3){Puntos_de_A4_en_A3A4=1;}
	if(gol_A3A4_A4<gol_A3A4_A3){Puntos_de_A4_en_A3A4=0;}

	var Gol_Average_de_A4;
	Gol_Average_de_A4=0.001*(parseInt(gol_A1A4_A4)+parseInt(gol_A2A4_A4)+parseInt(gol_A3A4_A4)-parseInt(gol_A1A4_A1)-parseInt(gol_A2A4_A2)-parseInt(gol_A3A4_A3));

	var Gol_Afavor_de_A4;
	Gol_Afavor_de_A4=0.00001*(parseInt(gol_A1A4_A4)+parseInt(gol_A2A4_A4)+parseInt(gol_A3A4_A4));

	var Total_Puntos_de_A4;
	Total_Puntos_de_A4=Puntos_de_A4_en_A1A4+Puntos_de_A4_en_A2A4+Puntos_de_A4_en_A3A4+Gol_Average_de_A4+Gol_Afavor_de_A4;

	var Gran_Total_de_A4;
	if(Total_Puntos_de_A4==Total_Puntos_de_A1){Gran_Total_de_A4=Total_Puntos_de_A4+0.0000001*(Puntos_de_A4_en_A1A4-Puntos_de_A1_en_A1A4)+0.000000001*(parseInt(gol_A1A4_A4)-parseInt(gol_A1A4_A1))+0.00000000001*(parseInt(gol_A1A4_A4))}
	if(Total_Puntos_de_A4==Total_Puntos_de_A2){Gran_Total_de_A4=Total_Puntos_de_A4+0.0000001*(Puntos_de_A4_en_A2A4-Puntos_de_A2_en_A2A4)+0.000000001*(parseInt(gol_A2A4_A4)-parseInt(gol_A2A4_A2))+0.00000000001*(parseInt(gol_A2A4_A4))}
	if(Total_Puntos_de_A4==Total_Puntos_de_A3){Gran_Total_de_A4=Total_Puntos_de_A4+0.0000001*(Puntos_de_A4_en_A3A4-Puntos_de_A3_en_A3A4)+0.000000001*(parseInt(gol_A3A4_A4)-parseInt(gol_A3A4_A3))+0.00000000001*(parseInt(gol_A3A4_A4))}
	else{Gran_Total_de_A4=Total_Puntos_de_A4}

//pegando los puntos del equipo 4 del Grupo-A en donde corresponde
	
	var Grupo_A_Equipo_4_Puntos;
	Grupo_A_Equipo_4_Puntos=document.getElementById("Grupo_A_Equipo_4_Puntos");
	Grupo_A_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_A4);

//Calculando los ganadores del grupo A (Nuevos A1)

	var Calculo_Clasificado_A1;
	if(Gran_Total_de_A1>Gran_Total_de_A2 && Gran_Total_de_A1>Gran_Total_de_A3 && Gran_Total_de_A1>Gran_Total_de_A4){Calculo_Clasificado_A1=grupo_A1;}
	if(Gran_Total_de_A2>Gran_Total_de_A1 && Gran_Total_de_A2>Gran_Total_de_A3 && Gran_Total_de_A2>Gran_Total_de_A4){Calculo_Clasificado_A1=grupo_A2;}
	if(Gran_Total_de_A3>Gran_Total_de_A1 && Gran_Total_de_A3>Gran_Total_de_A2 && Gran_Total_de_A3>Gran_Total_de_A4){Calculo_Clasificado_A1=grupo_A3;}
	if(Gran_Total_de_A4>Gran_Total_de_A1 && Gran_Total_de_A4>Gran_Total_de_A2 && Gran_Total_de_A4>Gran_Total_de_A3){Calculo_Clasificado_A1=grupo_A4;}

//pegando al Clasificado 1 del Grupo-A
	
	var Empate_Tecnico_A1;
	Empate_Tecnico_A1=document.getElementById("desempate_A1");

	var Clasificado_A1;
	Clasificado_A1=document.getElementById("clasificado_A1");
	if(Calculo_Clasificado_A1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o cambie los resultados de los partidos");Calculo_Clasificado_A1=Empate_Tecnico_A1.value;Clasificado_A1.innerHTML=0;}
	else{Clasificado_A1.innerHTML=Calculo_Clasificado_A1;}

//Calculando los ganadores del grupo A (Nuevos A2)

	var Calculo_Clasificado_A2;
	if(Gran_Total_de_A1<Gran_Total_de_A2 && Gran_Total_de_A1>Gran_Total_de_A3 && Gran_Total_de_A1>Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A1;}
	if(Gran_Total_de_A1>Gran_Total_de_A2 && Gran_Total_de_A1<Gran_Total_de_A3 && Gran_Total_de_A1>Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A1;}
	if(Gran_Total_de_A1>Gran_Total_de_A2 && Gran_Total_de_A1>Gran_Total_de_A3 && Gran_Total_de_A1<Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A1;}
	if(Gran_Total_de_A2<Gran_Total_de_A1 && Gran_Total_de_A2>Gran_Total_de_A3 && Gran_Total_de_A2>Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A2;}
	if(Gran_Total_de_A2>Gran_Total_de_A1 && Gran_Total_de_A2<Gran_Total_de_A3 && Gran_Total_de_A2>Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A2;}
	if(Gran_Total_de_A2>Gran_Total_de_A1 && Gran_Total_de_A2>Gran_Total_de_A3 && Gran_Total_de_A2<Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A2;}
	if(Gran_Total_de_A3<Gran_Total_de_A1 && Gran_Total_de_A3>Gran_Total_de_A2 && Gran_Total_de_A3>Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A3;}
	if(Gran_Total_de_A3>Gran_Total_de_A1 && Gran_Total_de_A3<Gran_Total_de_A2 && Gran_Total_de_A3>Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A3;}
	if(Gran_Total_de_A3>Gran_Total_de_A1 && Gran_Total_de_A3>Gran_Total_de_A2 && Gran_Total_de_A3<Gran_Total_de_A4){Calculo_Clasificado_A2=grupo_A3;}
	if(Gran_Total_de_A4<Gran_Total_de_A1 && Gran_Total_de_A4>Gran_Total_de_A2 && Gran_Total_de_A4>Gran_Total_de_A3){Calculo_Clasificado_A2=grupo_A4;}
	if(Gran_Total_de_A4>Gran_Total_de_A1 && Gran_Total_de_A4<Gran_Total_de_A2 && Gran_Total_de_A4>Gran_Total_de_A3){Calculo_Clasificado_A2=grupo_A4;}
	if(Gran_Total_de_A4>Gran_Total_de_A1 && Gran_Total_de_A4>Gran_Total_de_A2 && Gran_Total_de_A4<Gran_Total_de_A3){Calculo_Clasificado_A2=grupo_A4;}

//pegando al Clasificado 2 del Grupo-A

	var Empate_Tecnico_A2;
	Empate_Tecnico_A2=document.getElementById("desempate_A2");
	
	var Clasificado_A2;
	Clasificado_A2=document.getElementById("clasificado_A2");
	if(Calculo_Clasificado_A2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o cambie los resultados de los partidos");Calculo_Clasificado_A2=Empate_Tecnico_A2.value;Clasificado_A2.innerHTML=0;}
	else{Clasificado_A2.innerHTML=Calculo_Clasificado_A2;}

//pegando al Clasificado 1 del Grupo-A en Octavos de Final

	var Calculando_Octavos_Equipo_A1;
	Calculando_Octavos_Equipo_A1=document.getElementById("Octavos_Juego_A1_vs_B2_Equipo_A1");
	
	Calcular_Octavos_Equipo_A1
	if(Calculo_Clasificado_A1=="" || Calculo_Clasificado_A1==0 || Calculo_Clasificado_A1==undefined){Calcular_Octavos_Equipo_A1=Empate_Tecnico_A1;}else{Calcular_Octavos_Equipo_A1=Calculo_Clasificado_A1;}
	Calculando_Octavos_Equipo_A1.innerHTML=Calcular_Octavos_Equipo_A1;

//pegando al Clasificado 2 del Grupo-A en Octavos de Final

	var Calculando_Octavos_Equipo_A2;
	Calculando_Octavos_Equipo_A2=document.getElementById("Octavos_Juego_B1_vs_A2_Equipo_A2");
	
	Calcular_Octavos_Equipo_A2
	if(Calculo_Clasificado_A2=="" || Calculo_Clasificado_A2==0 || Calculo_Clasificado_A2==undefined){Calcular_Octavos_Equipo_A2=Empate_Tecnico_A2;}else{Calcular_Octavos_Equipo_A2=Calculo_Clasificado_A2;}
	Calculando_Octavos_Equipo_A2.innerHTML=Calcular_Octavos_Equipo_A2;

}

function clasificados_Grupo_B(){

//se declaran las variables de gol de cada partido del Grupo-B

	var gol_B1B2_B1=document.getElementById("Juego_B1_vs_B2_Gol_B1").value;
	var gol_B1B2_B2=document.getElementById("Juego_B1_vs_B2_Gol_B2").value;
	var gol_B1B3_B1=document.getElementById("Juego_B1_vs_B3_Gol_B1").value;
	var gol_B1B3_B3=document.getElementById("Juego_B1_vs_B3_Gol_B3").value;
	var gol_B1B4_B1=document.getElementById("Juego_B1_vs_B4_Gol_B1").value;
	var gol_B1B4_B4=document.getElementById("Juego_B1_vs_B4_Gol_B4").value;
	var gol_B2B3_B2=document.getElementById("Juego_B2_vs_B3_Gol_B2").value;
	var gol_B2B3_B3=document.getElementById("Juego_B2_vs_B3_Gol_B3").value;
	var gol_B2B4_B2=document.getElementById("Juego_B2_vs_B4_Gol_B2").value;
	var gol_B2B4_B4=document.getElementById("Juego_B2_vs_B4_Gol_B4").value;
	var gol_B3B4_B3=document.getElementById("Juego_B3_vs_B4_Gol_B3").value;
	var gol_B3B4_B4=document.getElementById("Juego_B3_vs_B4_Gol_B4").value;

//Cálculo de puntos del equipo 1 del Grupo-B

	var Puntos_de_B1_en_B1B2;
	if(gol_B1B2_B1>gol_B1B2_B2){Puntos_de_B1_en_B1B2=3;}
	if(gol_B1B2_B1==gol_B1B2_B2){Puntos_de_B1_en_B1B2=1;}
	if(gol_B1B2_B1<gol_B1B2_B2){Puntos_de_B1_en_B1B2=0;}
	var Puntos_de_B1_en_B1B3;
	if(gol_B1B3_B1>gol_B1B3_B3){Puntos_de_B1_en_B1B3=3;}
	if(gol_B1B3_B1==gol_B1B3_B3){Puntos_de_B1_en_B1B3=1;}
	if(gol_B1B3_B1<gol_B1B3_B3){Puntos_de_B1_en_B1B3=0;}
	var Puntos_de_B1_en_B1B4;
	if(gol_B1B4_B1>gol_B1B4_B4){Puntos_de_B1_en_B1B4=3;}
	if(gol_B1B4_B1==gol_B1B4_B4){Puntos_de_B1_en_B1B4=1;}
	if(gol_B1B4_B1<gol_B1B4_B4){Puntos_de_B1_en_B1B4=0;}

	var Gol_Average_de_B1;
	Gol_Average_de_B1=0.001*(parseInt(gol_B1B2_B1)+parseInt(gol_B1B3_B1)+parseInt(gol_B1B4_B1)-parseInt(gol_B1B2_B2)-parseInt(gol_B1B3_B3)-parseInt(gol_B1B4_B4));

	var Gol_Afavor_de_B1;
	Gol_Afavor_de_B1=0.00001*(parseInt(gol_B1B2_B1)+parseInt(gol_B1B3_B1)+parseInt(gol_B1B4_B1));

	var Total_Puntos_de_B1;
	Total_Puntos_de_B1=Puntos_de_B1_en_B1B2+Puntos_de_B1_en_B1B3+Puntos_de_B1_en_B1B4+Gol_Average_de_B1+Gol_Afavor_de_B1;

	var Gran_Total_de_B1;
	if(Total_Puntos_de_B1==Total_Puntos_de_B2){Gran_Total_de_B1=Total_Puntos_de_B1+0.0000001*(Puntos_de_B1_en_B1B2-Puntos_de_B2_en_B1B2)+0.000000001*(parseInt(gol_B1B2_B1)-parseInt(gol_B1B2_B2))+0.00000000001*(parseInt(gol_B1B2_B1))}
	if(Total_Puntos_de_B1==Total_Puntos_de_B3){Gran_Total_de_B1=Total_Puntos_de_B1+0.0000001*(Puntos_de_B1_en_B1B3-Puntos_de_B3_en_B1B3)+0.000000001*(parseInt(gol_B1B3_B1)-parseInt(gol_B1B3_B3))+0.00000000001*(parseInt(gol_B1B3_B1))}
	if(Total_Puntos_de_B1==Total_Puntos_de_B4){Gran_Total_de_B1=Total_Puntos_de_B1+0.0000001*(Puntos_de_B1_en_B1B4-Puntos_de_B4_en_B1B4)+0.000000001*(parseInt(gol_B1B4_B1)-parseInt(gol_B1B4_B4))+0.00000000001*(parseInt(gol_B1B4_B1))}
	else{Gran_Total_de_B1=Total_Puntos_de_B1}

//pegando los puntos del equipo 1 del Grupo-B en donde corresponde
	
	var Grupo_B_Equipo_1_Puntos;
	Grupo_B_Equipo_1_Puntos=document.getElementById("Grupo_B_Equipo_1_Puntos");
	Grupo_B_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_B1);

//Cálculo de puntos del equipo 2 del Grupo-B

	var Puntos_de_B2_en_B1B2;
	if(gol_B1B2_B2>gol_B1B2_B1){Puntos_de_B2_en_B1B2=3;}
	if(gol_B1B2_B2==gol_B1B2_B1){Puntos_de_B2_en_B1B2=1;}
	if(gol_B1B2_B2<gol_B1B2_B1){Puntos_de_B2_en_B1B2=0;}
	var Puntos_de_B2_en_B2B3;
	if(gol_B2B3_B2>gol_B2B3_B3){Puntos_de_B2_en_B2B3=3;}
	if(gol_B2B3_B2==gol_B2B3_B3){Puntos_de_B2_en_B2B3=1;}
	if(gol_B2B3_B2<gol_B2B3_B3){Puntos_de_B2_en_B2B3=0;}
	var Puntos_de_B2_en_B2B4;
	if(gol_B2B4_B2>gol_B2B4_B4){Puntos_de_B2_en_B2B4=3;}
	if(gol_B2B4_B2==gol_B2B4_B4){Puntos_de_B2_en_B2B4=1;}
	if(gol_B2B4_B2<gol_B2B4_B4){Puntos_de_B2_en_B2B4=0;}

	var Gol_Average_de_B2;
	Gol_Average_de_B2=0.001*(parseInt(gol_B1B2_B2)+parseInt(gol_B2B3_B2)+parseInt(gol_B2B4_B2)-parseInt(gol_B1B2_B1)-parseInt(gol_B2B3_B3)-parseInt(gol_B2B4_B4));

	var Gol_Afavor_de_B2;
	Gol_Afavor_de_B2=0.00001*(parseInt(gol_B1B2_B2)+parseInt(gol_B2B3_B2)+parseInt(gol_B2B4_B2));

	var Total_Puntos_de_B2;
	Total_Puntos_de_B2=Puntos_de_B2_en_B1B2+Puntos_de_B2_en_B2B3+Puntos_de_B2_en_B2B4+Gol_Average_de_B2+Gol_Afavor_de_B2;

	var Gran_Total_de_B2;
	if(Total_Puntos_de_B2==Total_Puntos_de_B1){Gran_Total_de_B2=Total_Puntos_de_B2+0.0000001*(Puntos_de_B2_en_B1B2-Puntos_de_B1_en_B1B2)+0.000000001*(parseInt(gol_B1B2_B2)-parseInt(gol_B1B2_B1))+0.00000000001*(parseInt(gol_B1B2_B2))}
	if(Total_Puntos_de_B2==Total_Puntos_de_B3){Gran_Total_de_B2=Total_Puntos_de_B2+0.0000001*(Puntos_de_B2_en_B2B3-Puntos_de_B3_en_B2B3)+0.000000001*(parseInt(gol_B2B3_B2)-parseInt(gol_B2B3_B3))+0.00000000001*(parseInt(gol_B2B3_B2))}
	if(Total_Puntos_de_B2==Total_Puntos_de_B4){Gran_Total_de_B2=Total_Puntos_de_B2+0.0000001*(Puntos_de_B2_en_B2B4-Puntos_de_B4_en_B2B4)+0.000000001*(parseInt(gol_B2B4_B2)-parseInt(gol_B2B4_B4))+0.00000000001*(parseInt(gol_B2B4_B2))}
	else{Gran_Total_de_B2=Total_Puntos_de_B2}

//pegando los puntos del equipo 2 del Grupo-B en donde corresponde
	
	var Grupo_B_Equipo_2_Puntos;
	Grupo_B_Equipo_2_Puntos=document.getElementById("Grupo_B_Equipo_2_Puntos");
	Grupo_B_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_B2);

//Cálculo de puntos del equipo 3 del Grupo-B

	var Puntos_de_B3_en_B1B3;
	if(gol_B1B3_B3>gol_B1B3_B1){Puntos_de_B3_en_B1B3=3;}
	if(gol_B1B3_B3==gol_B1B3_B1){Puntos_de_B3_en_B1B3=1;}
	if(gol_B1B3_B3<gol_B1B3_B1){Puntos_de_B3_en_B1B3=0;}
	var Puntos_de_B3_en_B2B3;
	if(gol_B2B3_B3>gol_B2B3_B2){Puntos_de_B3_en_B2B3=3;}
	if(gol_B2B3_B3==gol_B2B3_B2){Puntos_de_B3_en_B2B3=1;}
	if(gol_B2B3_B3<gol_B2B3_B2){Puntos_de_B3_en_B2B3=0;}
	var Puntos_de_B3_en_B3B4;
	if(gol_B3B4_B3>gol_B3B4_B4){Puntos_de_B3_en_B3B4=3;}
	if(gol_B3B4_B3==gol_B3B4_B4){Puntos_de_B3_en_B3B4=1;}
	if(gol_B3B4_B3<gol_B3B4_B4){Puntos_de_B3_en_B3B4=0;}

	var Gol_BverBge_de_B3;
	Gol_Average_de_B3=0.001*(parseInt(gol_B1B3_B3)+parseInt(gol_B2B3_B3)+parseInt(gol_B3B4_B3)-parseInt(gol_B1B3_B1)-parseInt(gol_B2B3_B2)-parseInt(gol_B3B4_B4));

	var Gol_Afavor_de_B3;
	Gol_Afavor_de_B3=0.00001*(parseInt(gol_B1B3_B3)+parseInt(gol_B2B3_B3)+parseInt(gol_B3B4_B3));

	var Total_Puntos_de_B3;
	Total_Puntos_de_B3=Puntos_de_B3_en_B1B3+Puntos_de_B3_en_B2B3+Puntos_de_B3_en_B3B4+Gol_Average_de_B3+Gol_Afavor_de_B3;

	var Gran_Total_de_B3;
	if(Total_Puntos_de_B3==Total_Puntos_de_B1){Gran_Total_de_B3=Total_Puntos_de_B3+0.0000001*(Puntos_de_B3_en_B1B3-Puntos_de_B1_en_B1B3)+0.000000001*(parseInt(gol_B1B3_B3)-parseInt(gol_B1B3_B1))+0.00000000001*(parseInt(gol_B1B3_B3))}
	if(Total_Puntos_de_B3==Total_Puntos_de_B2){Gran_Total_de_B3=Total_Puntos_de_B3+0.0000001*(Puntos_de_B3_en_B2B3-Puntos_de_B2_en_B2B3)+0.000000001*(parseInt(gol_B2B3_B3)-parseInt(gol_B2B3_B2))+0.00000000001*(parseInt(gol_B2B3_B3))}
	if(Total_Puntos_de_B3==Total_Puntos_de_B4){Gran_Total_de_B3=Total_Puntos_de_B3+0.0000001*(Puntos_de_B3_en_B3B4-Puntos_de_B4_en_B3B4)+0.000000001*(parseInt(gol_B3B4_B3)-parseInt(gol_B3B4_B4))+0.00000000001*(parseInt(gol_B3B4_B3))}
	else{Gran_Total_de_B3=Total_Puntos_de_B3}

//pegando los puntos del equipo 3 del Grupo-B en donde corresponde
	
	var Grupo_B_Equipo_3_Puntos;
	Grupo_B_Equipo_3_Puntos=document.getElementById("Grupo_B_Equipo_3_Puntos");
	Grupo_B_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_B3);

//Cálculo de puntos del equipo 4 del Grupo-B

	var Puntos_de_B4_en_B1B4;
	if(gol_B1B4_B4>gol_B1B4_B1){Puntos_de_B4_en_B1B4=3;}
	if(gol_B1B4_B4==gol_B1B4_B1){Puntos_de_B4_en_B1B4=1;}
	if(gol_B1B4_B4<gol_B1B4_B1){Puntos_de_B4_en_B1B4=0;}
	var Puntos_de_B4_en_B2B4;
	if(gol_B2B4_B4>gol_B2B4_B2){Puntos_de_B4_en_B2B4=3;}
	if(gol_B2B4_B4==gol_B2B4_B2){Puntos_de_B4_en_B2B4=1;}
	if(gol_B2B4_B4<gol_B2B4_B2){Puntos_de_B4_en_B2B4=0;}
	var Puntos_de_B4_en_B3B4;
	if(gol_B3B4_B4>gol_B3B4_B3){Puntos_de_B4_en_B3B4=3;}
	if(gol_B3B4_B4==gol_B3B4_B3){Puntos_de_B4_en_B3B4=1;}
	if(gol_B3B4_B4<gol_B3B4_B3){Puntos_de_B4_en_B3B4=0;}

	var Gol_Average_de_B4;
	Gol_Average_de_B4=0.001*(parseInt(gol_B1B4_B4)+parseInt(gol_B2B4_B4)+parseInt(gol_B3B4_B4)-parseInt(gol_B1B4_B1)-parseInt(gol_B2B4_B2)-parseInt(gol_B3B4_B3));

	var Gol_Afavor_de_B4;
	Gol_Afavor_de_B4=0.00001*(parseInt(gol_B1B4_B4)+parseInt(gol_B2B4_B4)+parseInt(gol_B3B4_B4));

	var Total_Puntos_de_B4;
	Total_Puntos_de_B4=Puntos_de_B4_en_B1B4+Puntos_de_B4_en_B2B4+Puntos_de_B4_en_B3B4+Gol_Average_de_B4+Gol_Afavor_de_B4;

	var Gran_Total_de_B4;
	if(Total_Puntos_de_B4==Total_Puntos_de_B1){Gran_Total_de_B4=Total_Puntos_de_B4+0.0000001*(Puntos_de_B4_en_B1B4-Puntos_de_B1_en_B1B4)+0.000000001*(parseInt(gol_B1B4_B4)-parseInt(gol_B1B4_B1))+0.00000000001*(parseInt(gol_B1B4_B4))}
	if(Total_Puntos_de_B4==Total_Puntos_de_B2){Gran_Total_de_B4=Total_Puntos_de_B4+0.0000001*(Puntos_de_B4_en_B2B4-Puntos_de_B2_en_B2B4)+0.000000001*(parseInt(gol_B2B4_B4)-parseInt(gol_B2B4_B2))+0.00000000001*(parseInt(gol_B2B4_B4))}
	if(Total_Puntos_de_B4==Total_Puntos_de_B3){Gran_Total_de_B4=Total_Puntos_de_B4+0.0000001*(Puntos_de_B4_en_B3B4-Puntos_de_B3_en_B3B4)+0.000000001*(parseInt(gol_B3B4_B4)-parseInt(gol_B3B4_B3))+0.00000000001*(parseInt(gol_B3B4_B4))}
	else{Gran_Total_de_B4=Total_Puntos_de_B4}

//pegando los puntos del equipo 4 del Grupo-B en donde corresponde
	
	var Grupo_B_Equipo_4_Puntos;
	Grupo_B_Equipo_4_Puntos=document.getElementById("Grupo_B_Equipo_4_Puntos");
	Grupo_B_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_B4);

//Calculando los ganadores del grupo B (Nuevos B1)

	var Calculo_Clasificado_B1;
	if(Gran_Total_de_B1>Gran_Total_de_B2 && Gran_Total_de_B1>Gran_Total_de_B3 && Gran_Total_de_B1>Gran_Total_de_B4){Calculo_Clasificado_B1=grupo_B1;}
	if(Gran_Total_de_B2>Gran_Total_de_B1 && Gran_Total_de_B2>Gran_Total_de_B3 && Gran_Total_de_B2>Gran_Total_de_B4){Calculo_Clasificado_B1=grupo_B2;}
	if(Gran_Total_de_B3>Gran_Total_de_B1 && Gran_Total_de_B3>Gran_Total_de_B2 && Gran_Total_de_B3>Gran_Total_de_B4){Calculo_Clasificado_B1=grupo_B3;}
	if(Gran_Total_de_B4>Gran_Total_de_B1 && Gran_Total_de_B4>Gran_Total_de_B2 && Gran_Total_de_B4>Gran_Total_de_B3){Calculo_Clasificado_B1=grupo_B4;}

//pegando al Clasificado 1 del Grupo-B
	
	var Empate_Tecnico_B1;
	Empate_Tecnico_B1=document.getElementById("desempate_B1");

	var Clasificado_B1;
	Clasificado_B1=document.getElementById("clasificado_B1");
	if(Calculo_Clasificado_B1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o cambie los resultados de los partidos");Calculo_Clasificado_B1=Empate_Tecnico_B1.value;Clasificado_B1.innerHTML=0;}
	Clasificado_B1.innerHTML=Calculo_Clasificado_B1;

//Calculando los ganadores del grupo B (Nuevos B2)

	var Calculo_Clasificado_B2;
	if(Gran_Total_de_B1<Gran_Total_de_B2 && Gran_Total_de_B1>Gran_Total_de_B3 && Gran_Total_de_B1>Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B1;}
	if(Gran_Total_de_B1>Gran_Total_de_B2 && Gran_Total_de_B1<Gran_Total_de_B3 && Gran_Total_de_B1>Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B1;}
	if(Gran_Total_de_B1>Gran_Total_de_B2 && Gran_Total_de_B1>Gran_Total_de_B3 && Gran_Total_de_B1<Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B1;}
	if(Gran_Total_de_B2<Gran_Total_de_B1 && Gran_Total_de_B2>Gran_Total_de_B3 && Gran_Total_de_B2>Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B2;}
	if(Gran_Total_de_B2>Gran_Total_de_B1 && Gran_Total_de_B2<Gran_Total_de_B3 && Gran_Total_de_B2>Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B2;}
	if(Gran_Total_de_B2>Gran_Total_de_B1 && Gran_Total_de_B2>Gran_Total_de_B3 && Gran_Total_de_B2<Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B2;}
	if(Gran_Total_de_B3<Gran_Total_de_B1 && Gran_Total_de_B3>Gran_Total_de_B2 && Gran_Total_de_B3>Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B3;}
	if(Gran_Total_de_B3>Gran_Total_de_B1 && Gran_Total_de_B3<Gran_Total_de_B2 && Gran_Total_de_B3>Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B3;}
	if(Gran_Total_de_B3>Gran_Total_de_B1 && Gran_Total_de_B3>Gran_Total_de_B2 && Gran_Total_de_B3<Gran_Total_de_B4){Calculo_Clasificado_B2=grupo_B3;}
	if(Gran_Total_de_B4<Gran_Total_de_B1 && Gran_Total_de_B4>Gran_Total_de_B2 && Gran_Total_de_B4>Gran_Total_de_B3){Calculo_Clasificado_B2=grupo_B4;}
	if(Gran_Total_de_B4>Gran_Total_de_B1 && Gran_Total_de_B4<Gran_Total_de_B2 && Gran_Total_de_B4>Gran_Total_de_B3){Calculo_Clasificado_B2=grupo_B4;}
	if(Gran_Total_de_B4>Gran_Total_de_B1 && Gran_Total_de_B4>Gran_Total_de_B2 && Gran_Total_de_B4<Gran_Total_de_B3){Calculo_Clasificado_B2=grupo_B4;}

//pegando al Clasificado 2 del Grupo-B

	var Empate_Tecnico_B2;
	Empate_Tecnico_B2=document.getElementById("desempate_B2");
	
	var Clasificado_B2;
	Clasificado_B2=document.getElementById("clasificado_B2");
	if(Calculo_Clasificado_B2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o cambie los resultados de los partidos");Calculo_Clasificado_B2=Empate_Tecnico_B2.value;Clasificado_B2.innerHTML=0;}
	Clasificado_B2.innerHTML=Calculo_Clasificado_B2;

//pegando al Clasificado 1 del Grupo-B en Octavos de Final

	var Calculando_Octavos_Equipo_B1;
	Calculando_Octavos_Equipo_B1=document.getElementById("Octavos_Juego_B1_vs_A2_Equipo_B1");
	
	Calcular_Octavos_Equipo_B1
	if(Calculo_Clasificado_B1=="" || Calculo_Clasificado_B1==0 || Calculo_Clasificado_B1==undefined){Calcular_Octavos_Equipo_B1=Empate_Tecnico_B1;}else{Calcular_Octavos_Equipo_B1=Calculo_Clasificado_B1;}
	Calculando_Octavos_Equipo_B1.innerHTML=Calcular_Octavos_Equipo_B1;

//pegando al Clasificado 2 del Grupo-B en Octavos de Final

	var Calculando_Octavos_Equipo_B2;
	Calculando_Octavos_Equipo_B2=document.getElementById("Octavos_Juego_A1_vs_B2_Equipo_B2");
	
	Calcular_Octavos_Equipo_B2
	if(Calculo_Clasificado_B2=="" || Calculo_Clasificado_B2==0 || Calculo_Clasificado_B2==undefined){Calcular_Octavos_Equipo_B2=Empate_Tecnico_B2;}else{Calcular_Octavos_Equipo_B2=Calculo_Clasificado_B2;}
	Calculando_Octavos_Equipo_B2.innerHTML=Calcular_Octavos_Equipo_B2;

}

function clasificados_Grupo_C(){

//se declaran las variables de gol de cada partido del Grupo-C

	var gol_C1C2_C1=document.getElementById("Juego_C1_vs_C2_Gol_C1").value;
	var gol_C1C2_C2=document.getElementById("Juego_C1_vs_C2_Gol_C2").value;
	var gol_C1C3_C1=document.getElementById("Juego_C1_vs_C3_Gol_C1").value;
	var gol_C1C3_C3=document.getElementById("Juego_C1_vs_C3_Gol_C3").value;
	var gol_C1C4_C1=document.getElementById("Juego_C1_vs_C4_Gol_C1").value;
	var gol_C1C4_C4=document.getElementById("Juego_C1_vs_C4_Gol_C4").value;
	var gol_C2C3_C2=document.getElementById("Juego_C2_vs_C3_Gol_C2").value;
	var gol_C2C3_C3=document.getElementById("Juego_C2_vs_C3_Gol_C3").value;
	var gol_C2C4_C2=document.getElementById("Juego_C2_vs_C4_Gol_C2").value;
	var gol_C2C4_C4=document.getElementById("Juego_C2_vs_C4_Gol_C4").value;
	var gol_C3C4_C3=document.getElementById("Juego_C3_vs_C4_Gol_C3").value;
	var gol_C3C4_C4=document.getElementById("Juego_C3_vs_C4_Gol_C4").value;

//Cálculo de puntos del equipo 1 del Grupo-C

	var Puntos_de_C1_en_C1C2;
	if(gol_C1C2_C1>gol_C1C2_C2){Puntos_de_C1_en_C1C2=3;}
	if(gol_C1C2_C1==gol_C1C2_C2){Puntos_de_C1_en_C1C2=1;}
	if(gol_C1C2_C1<gol_C1C2_C2){Puntos_de_C1_en_C1C2=0;}
	var Puntos_de_C1_en_C1C3;
	if(gol_C1C3_C1>gol_C1C3_C3){Puntos_de_C1_en_C1C3=3;}
	if(gol_C1C3_C1==gol_C1C3_C3){Puntos_de_C1_en_C1C3=1;}
	if(gol_C1C3_C1<gol_C1C3_C3){Puntos_de_C1_en_C1C3=0;}
	var Puntos_de_C1_en_C1C4;
	if(gol_C1C4_C1>gol_C1C4_C4){Puntos_de_C1_en_C1C4=3;}
	if(gol_C1C4_C1==gol_C1C4_C4){Puntos_de_C1_en_C1C4=1;}
	if(gol_C1C4_C1<gol_C1C4_C4){Puntos_de_C1_en_C1C4=0;}

	var Gol_Average_de_C1;
	Gol_Average_de_C1=0.001*(parseInt(gol_C1C2_C1)+parseInt(gol_C1C3_C1)+parseInt(gol_C1C4_C1)-parseInt(gol_C1C2_C2)-parseInt(gol_C1C3_C3)-parseInt(gol_C1C4_C4));

	var Gol_Afavor_de_C1;
	Gol_Afavor_de_C1=0.00001*(parseInt(gol_C1C2_C1)+parseInt(gol_C1C3_C1)+parseInt(gol_C1C4_C1));

	var Total_Puntos_de_C1;
	Total_Puntos_de_C1=Puntos_de_C1_en_C1C2+Puntos_de_C1_en_C1C3+Puntos_de_C1_en_C1C4+Gol_Average_de_C1+Gol_Afavor_de_C1;

	var Gran_Total_de_C1;
	if(Total_Puntos_de_C1==Total_Puntos_de_C2){Gran_Total_de_C1=Total_Puntos_de_C1+0.0000001*(Puntos_de_C1_en_C1C2-Puntos_de_C2_en_C1C2)+0.000000001*(parseInt(gol_C1C2_C1)-parseInt(gol_C1C2_C2))+0.00000000001*(parseInt(gol_C1C2_C1))}
	if(Total_Puntos_de_C1==Total_Puntos_de_C3){Gran_Total_de_C1=Total_Puntos_de_C1+0.0000001*(Puntos_de_C1_en_C1C3-Puntos_de_C3_en_C1C3)+0.000000001*(parseInt(gol_C1C3_C1)-parseInt(gol_C1C3_C3))+0.00000000001*(parseInt(gol_C1C3_C1))}
	if(Total_Puntos_de_C1==Total_Puntos_de_C4){Gran_Total_de_C1=Total_Puntos_de_C1+0.0000001*(Puntos_de_C1_en_C1C4-Puntos_de_C4_en_C1C4)+0.000000001*(parseInt(gol_C1C4_C1)-parseInt(gol_C1C4_C4))+0.00000000001*(parseInt(gol_C1C4_C1))}
	else{Gran_Total_de_C1=Total_Puntos_de_C1}

//pegando los puntos del equipo 1 del Grupo-C en donde corresponde
	
	var Grupo_C_Equipo_1_Puntos;
	Grupo_C_Equipo_1_Puntos=document.getElementById("Grupo_C_Equipo_1_Puntos");
	Grupo_C_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_C1);

//Cálculo de puntos del equipo 2 del Grupo-C

	var Puntos_de_C2_en_C1C2;
	if(gol_C1C2_C2>gol_C1C2_C1){Puntos_de_C2_en_C1C2=3;}
	if(gol_C1C2_C2==gol_C1C2_C1){Puntos_de_C2_en_C1C2=1;}
	if(gol_C1C2_C2<gol_C1C2_C1){Puntos_de_C2_en_C1C2=0;}
	var Puntos_de_C2_en_C2C3;
	if(gol_C2C3_C2>gol_C2C3_C3){Puntos_de_C2_en_C2C3=3;}
	if(gol_C2C3_C2==gol_C2C3_C3){Puntos_de_C2_en_C2C3=1;}
	if(gol_C2C3_C2<gol_C2C3_C3){Puntos_de_C2_en_C2C3=0;}
	var Puntos_de_C2_en_C2C4;
	if(gol_C2C4_C2>gol_C2C4_C4){Puntos_de_C2_en_C2C4=3;}
	if(gol_C2C4_C2==gol_C2C4_C4){Puntos_de_C2_en_C2C4=1;}
	if(gol_C2C4_C2<gol_C2C4_C4){Puntos_de_C2_en_C2C4=0;}

	var Gol_Average_de_C2;
	Gol_Average_de_C2=0.001*(parseInt(gol_C1C2_C2)+parseInt(gol_C2C3_C2)+parseInt(gol_C2C4_C2)-parseInt(gol_C1C2_C1)-parseInt(gol_C2C3_C3)-parseInt(gol_C2C4_C4));

	var Gol_Afavor_de_C2;
	Gol_Afavor_de_C2=0.00001*(parseInt(gol_C1C2_C2)+parseInt(gol_C2C3_C2)+parseInt(gol_C2C4_C2));

	var Total_Puntos_de_C2;
	Total_Puntos_de_C2=Puntos_de_C2_en_C1C2+Puntos_de_C2_en_C2C3+Puntos_de_C2_en_C2C4+Gol_Average_de_C2+Gol_Afavor_de_C2;

	var Gran_Total_de_C2;
	if(Total_Puntos_de_C2==Total_Puntos_de_C1){Gran_Total_de_C2=Total_Puntos_de_C2+0.0000001*(Puntos_de_C2_en_C1C2-Puntos_de_C1_en_C1C2)+0.000000001*(parseInt(gol_C1C2_C2)-parseInt(gol_C1C2_C1))+0.00000000001*(parseInt(gol_C1C2_C2))}
	if(Total_Puntos_de_C2==Total_Puntos_de_C3){Gran_Total_de_C2=Total_Puntos_de_C2+0.0000001*(Puntos_de_C2_en_C2C3-Puntos_de_C3_en_C2C3)+0.000000001*(parseInt(gol_C2C3_C2)-parseInt(gol_C2C3_C3))+0.00000000001*(parseInt(gol_C2C3_C2))}
	if(Total_Puntos_de_C2==Total_Puntos_de_C4){Gran_Total_de_C2=Total_Puntos_de_C2+0.0000001*(Puntos_de_C2_en_C2C4-Puntos_de_C4_en_C2C4)+0.000000001*(parseInt(gol_C2C4_C2)-parseInt(gol_C2C4_C4))+0.00000000001*(parseInt(gol_C2C4_C2))}
	else{Gran_Total_de_C2=Total_Puntos_de_C2}

//pegando los puntos del equipo 2 del Grupo-C en donde corresponde
	
	var Grupo_C_Equipo_2_Puntos;
	Grupo_C_Equipo_2_Puntos=document.getElementById("Grupo_C_Equipo_2_Puntos");
	Grupo_C_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_C2);

//Cálculo de puntos del equipo 3 del Grupo-C

	var Puntos_de_C3_en_C1C3;
	if(gol_C1C3_C3>gol_C1C3_C1){Puntos_de_C3_en_C1C3=3;}
	if(gol_C1C3_C3==gol_C1C3_C1){Puntos_de_C3_en_C1C3=1;}
	if(gol_C1C3_C3<gol_C1C3_C1){Puntos_de_C3_en_C1C3=0;}
	var Puntos_de_C3_en_C2C3;
	if(gol_C2C3_C3>gol_C2C3_C2){Puntos_de_C3_en_C2C3=3;}
	if(gol_C2C3_C3==gol_C2C3_C2){Puntos_de_C3_en_C2C3=1;}
	if(gol_C2C3_C3<gol_C2C3_C2){Puntos_de_C3_en_C2C3=0;}
	var Puntos_de_C3_en_C3C4;
	if(gol_C3C4_C3>gol_C3C4_C4){Puntos_de_C3_en_C3C4=3;}
	if(gol_C3C4_C3==gol_C3C4_C4){Puntos_de_C3_en_C3C4=1;}
	if(gol_C3C4_C3<gol_C3C4_C4){Puntos_de_C3_en_C3C4=0;}

	var Gol_Average_de_C3;
	Gol_Average_de_C3=0.001*(parseInt(gol_C1C3_C3)+parseInt(gol_C2C3_C3)+parseInt(gol_C3C4_C3)-parseInt(gol_C1C3_C1)-parseInt(gol_C2C3_C2)-parseInt(gol_C3C4_C4));

	var Gol_Afavor_de_C3;
	Gol_Afavor_de_C3=0.00001*(parseInt(gol_C1C3_C3)+parseInt(gol_C2C3_C3)+parseInt(gol_C3C4_C3));

	var Total_Puntos_de_C3;
	Total_Puntos_de_C3=Puntos_de_C3_en_C1C3+Puntos_de_C3_en_C2C3+Puntos_de_C3_en_C3C4+Gol_Average_de_C3+Gol_Afavor_de_C3;

	var Gran_Total_de_C3;
	if(Total_Puntos_de_C3==Total_Puntos_de_C1){Gran_Total_de_C3=Total_Puntos_de_C3+0.0000001*(Puntos_de_C3_en_C1C3-Puntos_de_C1_en_C1C3)+0.000000001*(parseInt(gol_C1C3_C3)-parseInt(gol_C1C3_C1))+0.00000000001*(parseInt(gol_C1C3_C3))}
	if(Total_Puntos_de_C3==Total_Puntos_de_C2){Gran_Total_de_C3=Total_Puntos_de_C3+0.0000001*(Puntos_de_C3_en_C2C3-Puntos_de_C2_en_C2C3)+0.000000001*(parseInt(gol_C2C3_C3)-parseInt(gol_C2C3_C2))+0.00000000001*(parseInt(gol_C2C3_C3))}
	if(Total_Puntos_de_C3==Total_Puntos_de_C4){Gran_Total_de_C3=Total_Puntos_de_C3+0.0000001*(Puntos_de_C3_en_C3C4-Puntos_de_C4_en_C3C4)+0.000000001*(parseInt(gol_C3C4_C3)-parseInt(gol_C3C4_C4))+0.00000000001*(parseInt(gol_C3C4_C3))}
	else{Gran_Total_de_C3=Total_Puntos_de_C3}

//pegando los puntos del equipo 3 del Grupo-C en donde corresponde
	
	var Grupo_C_Equipo_3_Puntos;
	Grupo_C_Equipo_3_Puntos=document.getElementById("Grupo_C_Equipo_3_Puntos");
	Grupo_C_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_C3);

//Cálculo de puntos del equipo 4 del Grupo-C

	var Puntos_de_C4_en_C1C4;
	if(gol_C1C4_C4>gol_C1C4_C1){Puntos_de_C4_en_C1C4=3;}
	if(gol_C1C4_C4==gol_C1C4_C1){Puntos_de_C4_en_C1C4=1;}
	if(gol_C1C4_C4<gol_C1C4_C1){Puntos_de_C4_en_C1C4=0;}
	var Puntos_de_C4_en_C2C4;
	if(gol_C2C4_C4>gol_C2C4_C2){Puntos_de_C4_en_C2C4=3;}
	if(gol_C2C4_C4==gol_C2C4_C2){Puntos_de_C4_en_C2C4=1;}
	if(gol_C2C4_C4<gol_C2C4_C2){Puntos_de_C4_en_C2C4=0;}
	var Puntos_de_C4_en_C3C4;
	if(gol_C3C4_C4>gol_C3C4_C3){Puntos_de_C4_en_C3C4=3;}
	if(gol_C3C4_C4==gol_C3C4_C3){Puntos_de_C4_en_C3C4=1;}
	if(gol_C3C4_C4<gol_C3C4_C3){Puntos_de_C4_en_C3C4=0;}

	var Gol_Average_de_C4;
	Gol_Average_de_C4=0.001*(parseInt(gol_C1C4_C4)+parseInt(gol_C2C4_C4)+parseInt(gol_C3C4_C4)-parseInt(gol_C1C4_C1)-parseInt(gol_C2C4_C2)-parseInt(gol_C3C4_C3));

	var Gol_Afavor_de_C4;
	Gol_Afavor_de_C4=0.00001*(parseInt(gol_C1C4_C4)+parseInt(gol_C2C4_C4)+parseInt(gol_C3C4_C4));

	var Total_Puntos_de_C4;
	Total_Puntos_de_C4=Puntos_de_C4_en_C1C4+Puntos_de_C4_en_C2C4+Puntos_de_C4_en_C3C4+Gol_Average_de_C4+Gol_Afavor_de_C4;

	var Gran_Total_de_C4;
	if(Total_Puntos_de_C4==Total_Puntos_de_C1){Gran_Total_de_C4=Total_Puntos_de_C4+0.0000001*(Puntos_de_C4_en_C1C4-Puntos_de_C1_en_C1C4)+0.000000001*(parseInt(gol_C1C4_C4)-parseInt(gol_C1C4_C1))+0.00000000001*(parseInt(gol_C1C4_C4))}
	if(Total_Puntos_de_C4==Total_Puntos_de_C2){Gran_Total_de_C4=Total_Puntos_de_C4+0.0000001*(Puntos_de_C4_en_C2C4-Puntos_de_C2_en_C2C4)+0.000000001*(parseInt(gol_C2C4_C4)-parseInt(gol_C2C4_C2))+0.00000000001*(parseInt(gol_C2C4_C4))}
	if(Total_Puntos_de_C4==Total_Puntos_de_C3){Gran_Total_de_C4=Total_Puntos_de_C4+0.0000001*(Puntos_de_C4_en_C3C4-Puntos_de_C3_en_C3C4)+0.000000001*(parseInt(gol_C3C4_C4)-parseInt(gol_C3C4_C3))+0.00000000001*(parseInt(gol_C3C4_C4))}
	else{Gran_Total_de_C4=Total_Puntos_de_C4}

//pegando los puntos del equipo 4 del Grupo-C en donde corresponde
	
	var Grupo_C_Equipo_4_Puntos;
	Grupo_C_Equipo_4_Puntos=document.getElementById("Grupo_C_Equipo_4_Puntos");
	Grupo_C_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_C4);

//Calculando los ganadores del grupo C (Nuevos C1)

	var Calculo_Clasificado_C1;
	if(Gran_Total_de_C1>Gran_Total_de_C2 && Gran_Total_de_C1>Gran_Total_de_C3 && Gran_Total_de_C1>Gran_Total_de_C4){Calculo_Clasificado_C1=grupo_C1;}
	if(Gran_Total_de_C2>Gran_Total_de_C1 && Gran_Total_de_C2>Gran_Total_de_C3 && Gran_Total_de_C2>Gran_Total_de_C4){Calculo_Clasificado_C1=grupo_C2;}
	if(Gran_Total_de_C3>Gran_Total_de_C1 && Gran_Total_de_C3>Gran_Total_de_C2 && Gran_Total_de_C3>Gran_Total_de_C4){Calculo_Clasificado_C1=grupo_C3;}
	if(Gran_Total_de_C4>Gran_Total_de_C1 && Gran_Total_de_C4>Gran_Total_de_C2 && Gran_Total_de_C4>Gran_Total_de_C3){Calculo_Clasificado_C1=grupo_C4;}

//pegando al Clasificado 1 del Grupo-C
	
	var Empate_Tecnico_C1;
	Empate_Tecnico_C1=document.getElementById("desempate_C1");

	var Clasificado_C1;
	Clasificado_C1=document.getElementById("clasificado_C1");
	if(Calculo_Clasificado_C1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_C1=Empate_Tecnico_C1.value;Clasificado_C1.innerHTML=0;}
	Clasificado_C1.innerHTML=Calculo_Clasificado_C1;

//Calculando los ganadores del grupo C (Nuevos C2)

	var Calculo_Clasificado_C2;
	if(Gran_Total_de_C1<Gran_Total_de_C2 && Gran_Total_de_C1>Gran_Total_de_C3 && Gran_Total_de_C1>Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C1;}
	if(Gran_Total_de_C1>Gran_Total_de_C2 && Gran_Total_de_C1<Gran_Total_de_C3 && Gran_Total_de_C1>Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C1;}
	if(Gran_Total_de_C1>Gran_Total_de_C2 && Gran_Total_de_C1>Gran_Total_de_C3 && Gran_Total_de_C1<Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C1;}
	if(Gran_Total_de_C2<Gran_Total_de_C1 && Gran_Total_de_C2>Gran_Total_de_C3 && Gran_Total_de_C2>Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C2;}
	if(Gran_Total_de_C2>Gran_Total_de_C1 && Gran_Total_de_C2<Gran_Total_de_C3 && Gran_Total_de_C2>Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C2;}
	if(Gran_Total_de_C2>Gran_Total_de_C1 && Gran_Total_de_C2>Gran_Total_de_C3 && Gran_Total_de_C2<Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C2;}
	if(Gran_Total_de_C3<Gran_Total_de_C1 && Gran_Total_de_C3>Gran_Total_de_C2 && Gran_Total_de_C3>Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C3;}
	if(Gran_Total_de_C3>Gran_Total_de_C1 && Gran_Total_de_C3<Gran_Total_de_C2 && Gran_Total_de_C3>Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C3;}
	if(Gran_Total_de_C3>Gran_Total_de_C1 && Gran_Total_de_C3>Gran_Total_de_C2 && Gran_Total_de_C3<Gran_Total_de_C4){Calculo_Clasificado_C2=grupo_C3;}
	if(Gran_Total_de_C4<Gran_Total_de_C1 && Gran_Total_de_C4>Gran_Total_de_C2 && Gran_Total_de_C4>Gran_Total_de_C3){Calculo_Clasificado_C2=grupo_C4;}
	if(Gran_Total_de_C4>Gran_Total_de_C1 && Gran_Total_de_C4<Gran_Total_de_C2 && Gran_Total_de_C4>Gran_Total_de_C3){Calculo_Clasificado_C2=grupo_C4;}
	if(Gran_Total_de_C4>Gran_Total_de_C1 && Gran_Total_de_C4>Gran_Total_de_C2 && Gran_Total_de_C4<Gran_Total_de_C3){Calculo_Clasificado_C2=grupo_C4;}

//pegando al Clasificado 2 del Grupo-C

	var Empate_Tecnico_C2;
	Empate_Tecnico_C2=document.getElementById("desempate_C2");
	
	var Clasificado_C2;
	Clasificado_C2=document.getElementById("clasificado_C2");
	if(Calculo_Clasificado_C2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_C2=Empate_Tecnico_C2.value;Clasificado_C2.innerHTML=0;}
	Clasificado_C2.innerHTML=Calculo_Clasificado_C2;

//pegando al Clasificado 1 del Grupo-C en Octavos de Final

	var Calculando_Octavos_Equipo_C1;
	Calculando_Octavos_Equipo_C1=document.getElementById("Octavos_Juego_C1_vs_D2_Equipo_C1");
	
	Calcular_Octavos_Equipo_C1
	if(Calculo_Clasificado_C1=="" || Calculo_Clasificado_C1==0 || Calculo_Clasificado_C1==undefined){Calcular_Octavos_Equipo_C1=Empate_Tecnico_C1;}else{Calcular_Octavos_Equipo_C1=Calculo_Clasificado_C1;}
	Calculando_Octavos_Equipo_C1.innerHTML=Calcular_Octavos_Equipo_C1;

//pegando al Clasificado 2 del Grupo-C en Octavos de Final

	var Calculando_Octavos_Equipo_C2;
	Calculando_Octavos_Equipo_C2=document.getElementById("Octavos_Juego_D1_vs_C2_Equipo_C2");
	
	Calcular_Octavos_Equipo_C2
	if(Calculo_Clasificado_C2=="" || Calculo_Clasificado_C2==0 || Calculo_Clasificado_C2==undefined){Calcular_Octavos_Equipo_C2=Empate_Tecnico_C2;}else{Calcular_Octavos_Equipo_C2=Calculo_Clasificado_C2;}
	Calculando_Octavos_Equipo_C2.innerHTML=Calcular_Octavos_Equipo_C2;

}

function clasificados_Grupo_D(){

//se declaran las variables de gol de cada partido del Grupo-D

	var gol_D1D2_D1=document.getElementById("Juego_D1_vs_D2_Gol_D1").value;
	var gol_D1D2_D2=document.getElementById("Juego_D1_vs_D2_Gol_D2").value;
	var gol_D1D3_D1=document.getElementById("Juego_D1_vs_D3_Gol_D1").value;
	var gol_D1D3_D3=document.getElementById("Juego_D1_vs_D3_Gol_D3").value;
	var gol_D1D4_D1=document.getElementById("Juego_D1_vs_D4_Gol_D1").value;
	var gol_D1D4_D4=document.getElementById("Juego_D1_vs_D4_Gol_D4").value;
	var gol_D2D3_D2=document.getElementById("Juego_D2_vs_D3_Gol_D2").value;
	var gol_D2D3_D3=document.getElementById("Juego_D2_vs_D3_Gol_D3").value;
	var gol_D2D4_D2=document.getElementById("Juego_D2_vs_D4_Gol_D2").value;
	var gol_D2D4_D4=document.getElementById("Juego_D2_vs_D4_Gol_D4").value;
	var gol_D3D4_D3=document.getElementById("Juego_D3_vs_D4_Gol_D3").value;
	var gol_D3D4_D4=document.getElementById("Juego_D3_vs_D4_Gol_D4").value;

//Cálculo de puntos del equipo 1 del Grupo-D

	var Puntos_de_D1_en_D1D2;
	if(gol_D1D2_D1>gol_D1D2_D2){Puntos_de_D1_en_D1D2=3;}
	if(gol_D1D2_D1==gol_D1D2_D2){Puntos_de_D1_en_D1D2=1;}
	if(gol_D1D2_D1<gol_D1D2_D2){Puntos_de_D1_en_D1D2=0;}
	var Puntos_de_D1_en_D1D3;
	if(gol_D1D3_D1>gol_D1D3_D3){Puntos_de_D1_en_D1D3=3;}
	if(gol_D1D3_D1==gol_D1D3_D3){Puntos_de_D1_en_D1D3=1;}
	if(gol_D1D3_D1<gol_D1D3_D3){Puntos_de_D1_en_D1D3=0;}
	var Puntos_de_D1_en_D1D4;
	if(gol_D1D4_D1>gol_D1D4_D4){Puntos_de_D1_en_D1D4=3;}
	if(gol_D1D4_D1==gol_D1D4_D4){Puntos_de_D1_en_D1D4=1;}
	if(gol_D1D4_D1<gol_D1D4_D4){Puntos_de_D1_en_D1D4=0;}

	var Gol_Average_de_D1;
	Gol_Average_de_D1=0.001*(parseInt(gol_D1D2_D1)+parseInt(gol_D1D3_D1)+parseInt(gol_D1D4_D1)-parseInt(gol_D1D2_D2)-parseInt(gol_D1D3_D3)-parseInt(gol_D1D4_D4));

	var Gol_Afavor_de_D1;
	Gol_Afavor_de_D1=0.00001*(parseInt(gol_D1D2_D1)+parseInt(gol_D1D3_D1)+parseInt(gol_D1D4_D1));

	var Total_Puntos_de_D1;
	Total_Puntos_de_D1=Puntos_de_D1_en_D1D2+Puntos_de_D1_en_D1D3+Puntos_de_D1_en_D1D4+Gol_Average_de_D1+Gol_Afavor_de_D1;

	var Gran_Total_de_D1;
	if(Total_Puntos_de_D1==Total_Puntos_de_D2){Gran_Total_de_D1=Total_Puntos_de_D1+0.0000001*(Puntos_de_D1_en_D1D2-Puntos_de_D2_en_D1D2)+0.000000001*(parseInt(gol_D1D2_D1)-parseInt(gol_D1D2_D2))+0.00000000001*(parseInt(gol_D1D2_D1))}
	if(Total_Puntos_de_D1==Total_Puntos_de_D3){Gran_Total_de_D1=Total_Puntos_de_D1+0.0000001*(Puntos_de_D1_en_D1D3-Puntos_de_D3_en_D1D3)+0.000000001*(parseInt(gol_D1D3_D1)-parseInt(gol_D1D3_D3))+0.00000000001*(parseInt(gol_D1D3_D1))}
	if(Total_Puntos_de_D1==Total_Puntos_de_D4){Gran_Total_de_D1=Total_Puntos_de_D1+0.0000001*(Puntos_de_D1_en_D1D4-Puntos_de_D4_en_D1D4)+0.000000001*(parseInt(gol_D1D4_D1)-parseInt(gol_D1D4_D4))+0.00000000001*(parseInt(gol_D1D4_D1))}
	else{Gran_Total_de_D1=Total_Puntos_de_D1}

//pegando los puntos del equipo 1 del Grupo-D en donde corresponde
	
	var Grupo_D_Equipo_1_Puntos;
	Grupo_D_Equipo_1_Puntos=document.getElementById("Grupo_D_Equipo_1_Puntos");
	Grupo_D_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_D1);

//Cálculo de puntos del equipo 2 del Grupo-D

	var Puntos_de_D2_en_D1D2;
	if(gol_D1D2_D2>gol_D1D2_D1){Puntos_de_D2_en_D1D2=3;}
	if(gol_D1D2_D2==gol_D1D2_D1){Puntos_de_D2_en_D1D2=1;}
	if(gol_D1D2_D2<gol_D1D2_D1){Puntos_de_D2_en_D1D2=0;}
	var Puntos_de_D2_en_D2D3;
	if(gol_D2D3_D2>gol_D2D3_D3){Puntos_de_D2_en_D2D3=3;}
	if(gol_D2D3_D2==gol_D2D3_D3){Puntos_de_D2_en_D2D3=1;}
	if(gol_D2D3_D2<gol_D2D3_D3){Puntos_de_D2_en_D2D3=0;}
	var Puntos_de_D2_en_D2D4;
	if(gol_D2D4_D2>gol_D2D4_D4){Puntos_de_D2_en_D2D4=3;}
	if(gol_D2D4_D2==gol_D2D4_D4){Puntos_de_D2_en_D2D4=1;}
	if(gol_D2D4_D2<gol_D2D4_D4){Puntos_de_D2_en_D2D4=0;}

	var Gol_Average_de_D2;
	Gol_Average_de_D2=0.001*(parseInt(gol_D1D2_D2)+parseInt(gol_D2D3_D2)+parseInt(gol_D2D4_D2)-parseInt(gol_D1D2_D1)-parseInt(gol_D2D3_D3)-parseInt(gol_D2D4_D4));

	var Gol_Afavor_de_D2;
	Gol_Afavor_de_D2=0.00001*(parseInt(gol_D1D2_D2)+parseInt(gol_D2D3_D2)+parseInt(gol_D2D4_D2));

	var Total_Puntos_de_D2;
	Total_Puntos_de_D2=Puntos_de_D2_en_D1D2+Puntos_de_D2_en_D2D3+Puntos_de_D2_en_D2D4+Gol_Average_de_D2+Gol_Afavor_de_D2;

	var Gran_Total_de_D2;
	if(Total_Puntos_de_D2==Total_Puntos_de_D1){Gran_Total_de_D2=Total_Puntos_de_D2+0.0000001*(Puntos_de_D2_en_D1D2-Puntos_de_D1_en_D1D2)+0.000000001*(parseInt(gol_D1D2_D2)-parseInt(gol_D1D2_D1))+0.00000000001*(parseInt(gol_D1D2_D2))}
	if(Total_Puntos_de_D2==Total_Puntos_de_D3){Gran_Total_de_D2=Total_Puntos_de_D2+0.0000001*(Puntos_de_D2_en_D2D3-Puntos_de_D3_en_D2D3)+0.000000001*(parseInt(gol_D2D3_D2)-parseInt(gol_D2D3_D3))+0.00000000001*(parseInt(gol_D2D3_D2))}
	if(Total_Puntos_de_D2==Total_Puntos_de_D4){Gran_Total_de_D2=Total_Puntos_de_D2+0.0000001*(Puntos_de_D2_en_D2D4-Puntos_de_D4_en_D2D4)+0.000000001*(parseInt(gol_D2D4_D2)-parseInt(gol_D2D4_D4))+0.00000000001*(parseInt(gol_D2D4_D2))}
	else{Gran_Total_de_D2=Total_Puntos_de_D2}

//pegando los puntos del equipo 2 del Grupo-D en donde corresponde
	
	var Grupo_D_Equipo_2_Puntos;
	Grupo_D_Equipo_2_Puntos=document.getElementById("Grupo_D_Equipo_2_Puntos");
	Grupo_D_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_D2);

//Cálculo de puntos del equipo 3 del Grupo-D

	var Puntos_de_D3_en_D1D3;
	if(gol_D1D3_D3>gol_D1D3_D1){Puntos_de_D3_en_D1D3=3;}
	if(gol_D1D3_D3==gol_D1D3_D1){Puntos_de_D3_en_D1D3=1;}
	if(gol_D1D3_D3<gol_D1D3_D1){Puntos_de_D3_en_D1D3=0;}
	var Puntos_de_D3_en_D2D3;
	if(gol_D2D3_D3>gol_D2D3_D2){Puntos_de_D3_en_D2D3=3;}
	if(gol_D2D3_D3==gol_D2D3_D2){Puntos_de_D3_en_D2D3=1;}
	if(gol_D2D3_D3<gol_D2D3_D2){Puntos_de_D3_en_D2D3=0;}
	var Puntos_de_D3_en_D3D4;
	if(gol_D3D4_D3>gol_D3D4_D4){Puntos_de_D3_en_D3D4=3;}
	if(gol_D3D4_D3==gol_D3D4_D4){Puntos_de_D3_en_D3D4=1;}
	if(gol_D3D4_D3<gol_D3D4_D4){Puntos_de_D3_en_D3D4=0;}

	var Gol_Average_de_D3;
	Gol_Average_de_D3=0.001*(parseInt(gol_D1D3_D3)+parseInt(gol_D2D3_D3)+parseInt(gol_D3D4_D3)-parseInt(gol_D1D3_D1)-parseInt(gol_D2D3_D2)-parseInt(gol_D3D4_D4));

	var Gol_Afavor_de_D3;
	Gol_Afavor_de_D3=0.00001*(parseInt(gol_D1D3_D3)+parseInt(gol_D2D3_D3)+parseInt(gol_D3D4_D3));

	var Total_Puntos_de_D3;
	Total_Puntos_de_D3=Puntos_de_D3_en_D1D3+Puntos_de_D3_en_D2D3+Puntos_de_D3_en_D3D4+Gol_Average_de_D3+Gol_Afavor_de_D3;

	var Gran_Total_de_D3;
	if(Total_Puntos_de_D3==Total_Puntos_de_D1){Gran_Total_de_D3=Total_Puntos_de_D3+0.0000001*(Puntos_de_D3_en_D1D3-Puntos_de_D1_en_D1D3)+0.000000001*(parseInt(gol_D1D3_D3)-parseInt(gol_D1D3_D1))+0.00000000001*(parseInt(gol_D1D3_D3))}
	if(Total_Puntos_de_D3==Total_Puntos_de_D2){Gran_Total_de_D3=Total_Puntos_de_D3+0.0000001*(Puntos_de_D3_en_D2D3-Puntos_de_D2_en_D2D3)+0.000000001*(parseInt(gol_D2D3_D3)-parseInt(gol_D2D3_D2))+0.00000000001*(parseInt(gol_D2D3_D3))}
	if(Total_Puntos_de_D3==Total_Puntos_de_D4){Gran_Total_de_D3=Total_Puntos_de_D3+0.0000001*(Puntos_de_D3_en_D3D4-Puntos_de_D4_en_D3D4)+0.000000001*(parseInt(gol_D3D4_D3)-parseInt(gol_D3D4_D4))+0.00000000001*(parseInt(gol_D3D4_D3))}
	else{Gran_Total_de_D3=Total_Puntos_de_D3}

//pegando los puntos del equipo 3 del Grupo-D en donde corresponde
	
	var Grupo_D_Equipo_3_Puntos;
	Grupo_D_Equipo_3_Puntos=document.getElementById("Grupo_D_Equipo_3_Puntos");
	Grupo_D_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_D3);

//Cálculo de puntos del equipo 4 del Grupo-D

	var Puntos_de_D4_en_D1D4;
	if(gol_D1D4_D4>gol_D1D4_D1){Puntos_de_D4_en_D1D4=3;}
	if(gol_D1D4_D4==gol_D1D4_D1){Puntos_de_D4_en_D1D4=1;}
	if(gol_D1D4_D4<gol_D1D4_D1){Puntos_de_D4_en_D1D4=0;}
	var Puntos_de_D4_en_D2D4;
	if(gol_D2D4_D4>gol_D2D4_D2){Puntos_de_D4_en_D2D4=3;}
	if(gol_D2D4_D4==gol_D2D4_D2){Puntos_de_D4_en_D2D4=1;}
	if(gol_D2D4_D4<gol_D2D4_D2){Puntos_de_D4_en_D2D4=0;}
	var Puntos_de_D4_en_D3D4;
	if(gol_D3D4_D4>gol_D3D4_D3){Puntos_de_D4_en_D3D4=3;}
	if(gol_D3D4_D4==gol_D3D4_D3){Puntos_de_D4_en_D3D4=1;}
	if(gol_D3D4_D4<gol_D3D4_D3){Puntos_de_D4_en_D3D4=0;}

	var Gol_Average_de_D4;
	Gol_Average_de_D4=0.001*(parseInt(gol_D1D4_D4)+parseInt(gol_D2D4_D4)+parseInt(gol_D3D4_D4)-parseInt(gol_D1D4_D1)-parseInt(gol_D2D4_D2)-parseInt(gol_D3D4_D3));

	var Gol_Afavor_de_D4;
	Gol_Afavor_de_D4=0.00001*(parseInt(gol_D1D4_D4)+parseInt(gol_D2D4_D4)+parseInt(gol_D3D4_D4));

	var Total_Puntos_de_D4;
	Total_Puntos_de_D4=Puntos_de_D4_en_D1D4+Puntos_de_D4_en_D2D4+Puntos_de_D4_en_D3D4+Gol_Average_de_D4+Gol_Afavor_de_D4;

	var Gran_Total_de_D4;
	if(Total_Puntos_de_D4==Total_Puntos_de_D1){Gran_Total_de_D4=Total_Puntos_de_D4+0.0000001*(Puntos_de_D4_en_D1D4-Puntos_de_D1_en_D1D4)+0.000000001*(parseInt(gol_D1D4_D4)-parseInt(gol_D1D4_D1))+0.00000000001*(parseInt(gol_D1D4_D4))}
	if(Total_Puntos_de_D4==Total_Puntos_de_D2){Gran_Total_de_D4=Total_Puntos_de_D4+0.0000001*(Puntos_de_D4_en_D2D4-Puntos_de_D2_en_D2D4)+0.000000001*(parseInt(gol_D2D4_D4)-parseInt(gol_D2D4_D2))+0.00000000001*(parseInt(gol_D2D4_D4))}
	if(Total_Puntos_de_D4==Total_Puntos_de_D3){Gran_Total_de_D4=Total_Puntos_de_D4+0.0000001*(Puntos_de_D4_en_D3D4-Puntos_de_D3_en_D3D4)+0.000000001*(parseInt(gol_D3D4_D4)-parseInt(gol_D3D4_D3))+0.00000000001*(parseInt(gol_D3D4_D4))}
	else{Gran_Total_de_D4=Total_Puntos_de_D4}

//pegando los puntos del equipo 4 del Grupo-D en donde corresponde
	
	var Grupo_D_Equipo_4_Puntos;
	Grupo_D_Equipo_4_Puntos=document.getElementById("Grupo_D_Equipo_4_Puntos");
	Grupo_D_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_D4);

//Calculando los ganadores del grupo D (Nuevos D1)

	var Calculo_Clasificado_D1;
	if(Gran_Total_de_D1>Gran_Total_de_D2 && Gran_Total_de_D1>Gran_Total_de_D3 && Gran_Total_de_D1>Gran_Total_de_D4){Calculo_Clasificado_D1=grupo_D1;}
	if(Gran_Total_de_D2>Gran_Total_de_D1 && Gran_Total_de_D2>Gran_Total_de_D3 && Gran_Total_de_D2>Gran_Total_de_D4){Calculo_Clasificado_D1=grupo_D2;}
	if(Gran_Total_de_D3>Gran_Total_de_D1 && Gran_Total_de_D3>Gran_Total_de_D2 && Gran_Total_de_D3>Gran_Total_de_D4){Calculo_Clasificado_D1=grupo_D3;}
	if(Gran_Total_de_D4>Gran_Total_de_D1 && Gran_Total_de_D4>Gran_Total_de_D2 && Gran_Total_de_D4>Gran_Total_de_D3){Calculo_Clasificado_D1=grupo_D4;}

//pegando al Clasificado 1 del Grupo-D
	
	var Empate_Tecnico_D1;
	Empate_Tecnico_D1=document.getElementById("desempate_D1");

	var Clasificado_D1;
	Clasificado_D1=document.getElementById("clasificado_D1");
	if(Calculo_Clasificado_D1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_D1=Empate_Tecnico_D1.value;Clasificado_D1.innerHTML=0;}
	Clasificado_D1.innerHTML=Calculo_Clasificado_D1;

//Calculando los ganadores del grupo D (Nuevos D2)

	var Calculo_Clasificado_D2;
	if(Gran_Total_de_D1<Gran_Total_de_D2 && Gran_Total_de_D1>Gran_Total_de_D3 && Gran_Total_de_D1>Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D1;}
	if(Gran_Total_de_D1>Gran_Total_de_D2 && Gran_Total_de_D1<Gran_Total_de_D3 && Gran_Total_de_D1>Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D1;}
	if(Gran_Total_de_D1>Gran_Total_de_D2 && Gran_Total_de_D1>Gran_Total_de_D3 && Gran_Total_de_D1<Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D1;}
	if(Gran_Total_de_D2<Gran_Total_de_D1 && Gran_Total_de_D2>Gran_Total_de_D3 && Gran_Total_de_D2>Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D2;}
	if(Gran_Total_de_D2>Gran_Total_de_D1 && Gran_Total_de_D2<Gran_Total_de_D3 && Gran_Total_de_D2>Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D2;}
	if(Gran_Total_de_D2>Gran_Total_de_D1 && Gran_Total_de_D2>Gran_Total_de_D3 && Gran_Total_de_D2<Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D2;}
	if(Gran_Total_de_D3<Gran_Total_de_D1 && Gran_Total_de_D3>Gran_Total_de_D2 && Gran_Total_de_D3>Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D3;}
	if(Gran_Total_de_D3>Gran_Total_de_D1 && Gran_Total_de_D3<Gran_Total_de_D2 && Gran_Total_de_D3>Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D3;}
	if(Gran_Total_de_D3>Gran_Total_de_D1 && Gran_Total_de_D3>Gran_Total_de_D2 && Gran_Total_de_D3<Gran_Total_de_D4){Calculo_Clasificado_D2=grupo_D3;}
	if(Gran_Total_de_D4<Gran_Total_de_D1 && Gran_Total_de_D4>Gran_Total_de_D2 && Gran_Total_de_D4>Gran_Total_de_D3){Calculo_Clasificado_D2=grupo_D4;}
	if(Gran_Total_de_D4>Gran_Total_de_D1 && Gran_Total_de_D4<Gran_Total_de_D2 && Gran_Total_de_D4>Gran_Total_de_D3){Calculo_Clasificado_D2=grupo_D4;}
	if(Gran_Total_de_D4>Gran_Total_de_D1 && Gran_Total_de_D4>Gran_Total_de_D2 && Gran_Total_de_D4<Gran_Total_de_D3){Calculo_Clasificado_D2=grupo_D4;}

//pegando al Clasificado 2 del Grupo-D

	var Empate_Tecnico_D2;
	Empate_Tecnico_D2=document.getElementById("desempate_D2");
	
	var Clasificado_D2;
	Clasificado_D2=document.getElementById("clasificado_D2");
	if(Calculo_Clasificado_D2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_D2=Empate_Tecnico_D2.value;Clasificado_D2.innerHTML=0;}
	Clasificado_D2.innerHTML=Calculo_Clasificado_D2;

//pegando al Clasificado 1 del Grupo-D en Octavos de Final

	var Calculando_Octavos_Equipo_D1;
	Calculando_Octavos_Equipo_D1=document.getElementById("Octavos_Juego_D1_vs_C2_Equipo_D1");
	
	Calcular_Octavos_Equipo_D1
	if(Calculo_Clasificado_D1=="" || Calculo_Clasificado_D1==0 || Calculo_Clasificado_D1==undefined){Calcular_Octavos_Equipo_D1=Empate_Tecnico_D1;}else{Calcular_Octavos_Equipo_D1=Calculo_Clasificado_D1;}
	Calculando_Octavos_Equipo_D1.innerHTML=Calcular_Octavos_Equipo_D1;

//pegando al Clasificado 2 del Grupo-D en Octavos de Final

	var Calculando_Octavos_Equipo_D2;
	Calculando_Octavos_Equipo_D2=document.getElementById("Octavos_Juego_C1_vs_D2_Equipo_D2");
	
	Calcular_Octavos_Equipo_D2
	if(Calculo_Clasificado_D2=="" || Calculo_Clasificado_D2==0 || Calculo_Clasificado_D2==undefined){Calcular_Octavos_Equipo_D2=Empate_Tecnico_D2;}else{Calcular_Octavos_Equipo_D2=Calculo_Clasificado_D2;}
	Calculando_Octavos_Equipo_D2.innerHTML=Calcular_Octavos_Equipo_D2;

}

function clasificados_Grupo_E(){

//se declaran las variables de gol de cada partido del Grupo-E

	var gol_E1E2_E1=document.getElementById("Juego_E1_vs_E2_Gol_E1").value;
	var gol_E1E2_E2=document.getElementById("Juego_E1_vs_E2_Gol_E2").value;
	var gol_E1E3_E1=document.getElementById("Juego_E1_vs_E3_Gol_E1").value;
	var gol_E1E3_E3=document.getElementById("Juego_E1_vs_E3_Gol_E3").value;
	var gol_E1E4_E1=document.getElementById("Juego_E1_vs_E4_Gol_E1").value;
	var gol_E1E4_E4=document.getElementById("Juego_E1_vs_E4_Gol_E4").value;
	var gol_E2E3_E2=document.getElementById("Juego_E2_vs_E3_Gol_E2").value;
	var gol_E2E3_E3=document.getElementById("Juego_E2_vs_E3_Gol_E3").value;
	var gol_E2E4_E2=document.getElementById("Juego_E2_vs_E4_Gol_E2").value;
	var gol_E2E4_E4=document.getElementById("Juego_E2_vs_E4_Gol_E4").value;
	var gol_E3E4_E3=document.getElementById("Juego_E3_vs_E4_Gol_E3").value;
	var gol_E3E4_E4=document.getElementById("Juego_E3_vs_E4_Gol_E4").value;

//Cálculo de puntos del equipo 1 del Grupo-E

	var Puntos_de_E1_en_E1E2;
	if(gol_E1E2_E1>gol_E1E2_E2){Puntos_de_E1_en_E1E2=3;}
	if(gol_E1E2_E1==gol_E1E2_E2){Puntos_de_E1_en_E1E2=1;}
	if(gol_E1E2_E1<gol_E1E2_E2){Puntos_de_E1_en_E1E2=0;}
	var Puntos_de_E1_en_E1E3;
	if(gol_E1E3_E1>gol_E1E3_E3){Puntos_de_E1_en_E1E3=3;}
	if(gol_E1E3_E1==gol_E1E3_E3){Puntos_de_E1_en_E1E3=1;}
	if(gol_E1E3_E1<gol_E1E3_E3){Puntos_de_E1_en_E1E3=0;}
	var Puntos_de_E1_en_E1E4;
	if(gol_E1E4_E1>gol_E1E4_E4){Puntos_de_E1_en_E1E4=3;}
	if(gol_E1E4_E1==gol_E1E4_E4){Puntos_de_E1_en_E1E4=1;}
	if(gol_E1E4_E1<gol_E1E4_E4){Puntos_de_E1_en_E1E4=0;}

	var Gol_Average_de_E1;
	Gol_Average_de_E1=0.001*(parseInt(gol_E1E2_E1)+parseInt(gol_E1E3_E1)+parseInt(gol_E1E4_E1)-parseInt(gol_E1E2_E2)-parseInt(gol_E1E3_E3)-parseInt(gol_E1E4_E4));

	var Gol_Afavor_de_E1;
	Gol_Afavor_de_E1=0.00001*(parseInt(gol_E1E2_E1)+parseInt(gol_E1E3_E1)+parseInt(gol_E1E4_E1));

	var Total_Puntos_de_E1;
	Total_Puntos_de_E1=Puntos_de_E1_en_E1E2+Puntos_de_E1_en_E1E3+Puntos_de_E1_en_E1E4+Gol_Average_de_E1+Gol_Afavor_de_E1;

	var Gran_Total_de_E1;
	if(Total_Puntos_de_E1==Total_Puntos_de_E2){Gran_Total_de_E1=Total_Puntos_de_E1+0.0000001*(Puntos_de_E1_en_E1E2-Puntos_de_E2_en_E1E2)+0.000000001*(parseInt(gol_E1E2_E1)-parseInt(gol_E1E2_E2))+0.00000000001*(parseInt(gol_E1E2_E1))}
	if(Total_Puntos_de_E1==Total_Puntos_de_E3){Gran_Total_de_E1=Total_Puntos_de_E1+0.0000001*(Puntos_de_E1_en_E1E3-Puntos_de_E3_en_E1E3)+0.000000001*(parseInt(gol_E1E3_E1)-parseInt(gol_E1E3_E3))+0.00000000001*(parseInt(gol_E1E3_E1))}
	if(Total_Puntos_de_E1==Total_Puntos_de_E4){Gran_Total_de_E1=Total_Puntos_de_E1+0.0000001*(Puntos_de_E1_en_E1E4-Puntos_de_E4_en_E1E4)+0.000000001*(parseInt(gol_E1E4_E1)-parseInt(gol_E1E4_E4))+0.00000000001*(parseInt(gol_E1E4_E1))}
	else{Gran_Total_de_E1=Total_Puntos_de_E1}

//pegando los puntos del equipo 1 del Grupo-E en donde corresponde
	
	var Grupo_E_Equipo_1_Puntos;
	Grupo_E_Equipo_1_Puntos=document.getElementById("Grupo_E_Equipo_1_Puntos");
	Grupo_E_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_E1);

//Cálculo de puntos del equipo 2 del Grupo-E

	var Puntos_de_E2_en_E1E2;
	if(gol_E1E2_E2>gol_E1E2_E1){Puntos_de_E2_en_E1E2=3;}
	if(gol_E1E2_E2==gol_E1E2_E1){Puntos_de_E2_en_E1E2=1;}
	if(gol_E1E2_E2<gol_E1E2_E1){Puntos_de_E2_en_E1E2=0;}
	var Puntos_de_E2_en_E2E3;
	if(gol_E2E3_E2>gol_E2E3_E3){Puntos_de_E2_en_E2E3=3;}
	if(gol_E2E3_E2==gol_E2E3_E3){Puntos_de_E2_en_E2E3=1;}
	if(gol_E2E3_E2<gol_E2E3_E3){Puntos_de_E2_en_E2E3=0;}
	var Puntos_de_E2_en_E2E4;
	if(gol_E2E4_E2>gol_E2E4_E4){Puntos_de_E2_en_E2E4=3;}
	if(gol_E2E4_E2==gol_E2E4_E4){Puntos_de_E2_en_E2E4=1;}
	if(gol_E2E4_E2<gol_E2E4_E4){Puntos_de_E2_en_E2E4=0;}

	var Gol_Average_de_E2;
	Gol_Average_de_E2=0.001*(parseInt(gol_E1E2_E2)+parseInt(gol_E2E3_E2)+parseInt(gol_E2E4_E2)-parseInt(gol_E1E2_E1)-parseInt(gol_E2E3_E3)-parseInt(gol_E2E4_E4));

	var Gol_Afavor_de_E2;
	Gol_Afavor_de_E2=0.00001*(parseInt(gol_E1E2_E2)+parseInt(gol_E2E3_E2)+parseInt(gol_E2E4_E2));

	var Total_Puntos_de_E2;
	Total_Puntos_de_E2=Puntos_de_E2_en_E1E2+Puntos_de_E2_en_E2E3+Puntos_de_E2_en_E2E4+Gol_Average_de_E2+Gol_Afavor_de_E2;

	var Gran_Total_de_E2;
	if(Total_Puntos_de_E2==Total_Puntos_de_E1){Gran_Total_de_E2=Total_Puntos_de_E2+0.0000001*(Puntos_de_E2_en_E1E2-Puntos_de_E1_en_E1E2)+0.000000001*(parseInt(gol_E1E2_E2)-parseInt(gol_E1E2_E1))+0.00000000001*(parseInt(gol_E1E2_E2))}
	if(Total_Puntos_de_E2==Total_Puntos_de_E3){Gran_Total_de_E2=Total_Puntos_de_E2+0.0000001*(Puntos_de_E2_en_E2E3-Puntos_de_E3_en_E2E3)+0.000000001*(parseInt(gol_E2E3_E2)-parseInt(gol_E2E3_E3))+0.00000000001*(parseInt(gol_E2E3_E2))}
	if(Total_Puntos_de_E2==Total_Puntos_de_E4){Gran_Total_de_E2=Total_Puntos_de_E2+0.0000001*(Puntos_de_E2_en_E2E4-Puntos_de_E4_en_E2E4)+0.000000001*(parseInt(gol_E2E4_E2)-parseInt(gol_E2E4_E4))+0.00000000001*(parseInt(gol_E2E4_E2))}
	else{Gran_Total_de_E2=Total_Puntos_de_E2}

//pegando los puntos del equipo 2 del Grupo-E en donde corresponde
	
	var Grupo_E_Equipo_2_Puntos;
	Grupo_E_Equipo_2_Puntos=document.getElementById("Grupo_E_Equipo_2_Puntos");
	Grupo_E_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_E2);

//Cálculo de puntos del equipo 3 del Grupo-E

	var Puntos_de_E3_en_E1E3;
	if(gol_E1E3_E3>gol_E1E3_E1){Puntos_de_E3_en_E1E3=3;}
	if(gol_E1E3_E3==gol_E1E3_E1){Puntos_de_E3_en_E1E3=1;}
	if(gol_E1E3_E3<gol_E1E3_E1){Puntos_de_E3_en_E1E3=0;}
	var Puntos_de_E3_en_E2E3;
	if(gol_E2E3_E3>gol_E2E3_E2){Puntos_de_E3_en_E2E3=3;}
	if(gol_E2E3_E3==gol_E2E3_E2){Puntos_de_E3_en_E2E3=1;}
	if(gol_E2E3_E3<gol_E2E3_E2){Puntos_de_E3_en_E2E3=0;}
	var Puntos_de_E3_en_E3E4;
	if(gol_E3E4_E3>gol_E3E4_E4){Puntos_de_E3_en_E3E4=3;}
	if(gol_E3E4_E3==gol_E3E4_E4){Puntos_de_E3_en_E3E4=1;}
	if(gol_E3E4_E3<gol_E3E4_E4){Puntos_de_E3_en_E3E4=0;}

	var Gol_Average_de_E3;
	Gol_Average_de_E3=0.001*(parseInt(gol_E1E3_E3)+parseInt(gol_E2E3_E3)+parseInt(gol_E3E4_E3)-parseInt(gol_E1E3_E1)-parseInt(gol_E2E3_E2)-parseInt(gol_E3E4_E4));

	var Gol_Afavor_de_E3;
	Gol_Afavor_de_E3=0.00001*(parseInt(gol_E1E3_E3)+parseInt(gol_E2E3_E3)+parseInt(gol_E3E4_E3));

	var Total_Puntos_de_E3;
	Total_Puntos_de_E3=Puntos_de_E3_en_E1E3+Puntos_de_E3_en_E2E3+Puntos_de_E3_en_E3E4+Gol_Average_de_E3+Gol_Afavor_de_E3;

	var Gran_Total_de_E3;
	if(Total_Puntos_de_E3==Total_Puntos_de_E1){Gran_Total_de_E3=Total_Puntos_de_E3+0.0000001*(Puntos_de_E3_en_E1E3-Puntos_de_E1_en_E1E3)+0.000000001*(parseInt(gol_E1E3_E3)-parseInt(gol_E1E3_E1))+0.00000000001*(parseInt(gol_E1E3_E3))}
	if(Total_Puntos_de_E3==Total_Puntos_de_E2){Gran_Total_de_E3=Total_Puntos_de_E3+0.0000001*(Puntos_de_E3_en_E2E3-Puntos_de_E2_en_E2E3)+0.000000001*(parseInt(gol_E2E3_E3)-parseInt(gol_E2E3_E2))+0.00000000001*(parseInt(gol_E2E3_E3))}
	if(Total_Puntos_de_E3==Total_Puntos_de_E4){Gran_Total_de_E3=Total_Puntos_de_E3+0.0000001*(Puntos_de_E3_en_E3E4-Puntos_de_E4_en_E3E4)+0.000000001*(parseInt(gol_E3E4_E3)-parseInt(gol_E3E4_E4))+0.00000000001*(parseInt(gol_E3E4_E3))}
	else{Gran_Total_de_E3=Total_Puntos_de_E3}

//pegando los puntos del equipo 3 del Grupo-E en donde corresponde
	
	var Grupo_E_Equipo_3_Puntos;
	Grupo_E_Equipo_3_Puntos=document.getElementById("Grupo_E_Equipo_3_Puntos");
	Grupo_E_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_E3);

//Cálculo de puntos del equipo 4 del Grupo-E

	var Puntos_de_E4_en_E1E4;
	if(gol_E1E4_E4>gol_E1E4_E1){Puntos_de_E4_en_E1E4=3;}
	if(gol_E1E4_E4==gol_E1E4_E1){Puntos_de_E4_en_E1E4=1;}
	if(gol_E1E4_E4<gol_E1E4_E1){Puntos_de_E4_en_E1E4=0;}
	var Puntos_de_E4_en_E2E4;
	if(gol_E2E4_E4>gol_E2E4_E2){Puntos_de_E4_en_E2E4=3;}
	if(gol_E2E4_E4==gol_E2E4_E2){Puntos_de_E4_en_E2E4=1;}
	if(gol_E2E4_E4<gol_E2E4_E2){Puntos_de_E4_en_E2E4=0;}
	var Puntos_de_E4_en_E3E4;
	if(gol_E3E4_E4>gol_E3E4_E3){Puntos_de_E4_en_E3E4=3;}
	if(gol_E3E4_E4==gol_E3E4_E3){Puntos_de_E4_en_E3E4=1;}
	if(gol_E3E4_E4<gol_E3E4_E3){Puntos_de_E4_en_E3E4=0;}

	var Gol_Average_de_E4;
	Gol_Average_de_E4=0.001*(parseInt(gol_E1E4_E4)+parseInt(gol_E2E4_E4)+parseInt(gol_E3E4_E4)-parseInt(gol_E1E4_E1)-parseInt(gol_E2E4_E2)-parseInt(gol_E3E4_E3));

	var Gol_Afavor_de_E4;
	Gol_Afavor_de_E4=0.00001*(parseInt(gol_E1E4_E4)+parseInt(gol_E2E4_E4)+parseInt(gol_E3E4_E4));

	var Total_Puntos_de_E4;
	Total_Puntos_de_E4=Puntos_de_E4_en_E1E4+Puntos_de_E4_en_E2E4+Puntos_de_E4_en_E3E4+Gol_Average_de_E4+Gol_Afavor_de_E4;

	var Gran_Total_de_E4;
	if(Total_Puntos_de_E4==Total_Puntos_de_E1){Gran_Total_de_E4=Total_Puntos_de_E4+0.0000001*(Puntos_de_E4_en_E1E4-Puntos_de_E1_en_E1E4)+0.000000001*(parseInt(gol_E1E4_E4)-parseInt(gol_E1E4_E1))+0.00000000001*(parseInt(gol_E1E4_E4))}
	if(Total_Puntos_de_E4==Total_Puntos_de_E2){Gran_Total_de_E4=Total_Puntos_de_E4+0.0000001*(Puntos_de_E4_en_E2E4-Puntos_de_E2_en_E2E4)+0.000000001*(parseInt(gol_E2E4_E4)-parseInt(gol_E2E4_E2))+0.00000000001*(parseInt(gol_E2E4_E4))}
	if(Total_Puntos_de_E4==Total_Puntos_de_E3){Gran_Total_de_E4=Total_Puntos_de_E4+0.0000001*(Puntos_de_E4_en_E3E4-Puntos_de_E3_en_E3E4)+0.000000001*(parseInt(gol_E3E4_E4)-parseInt(gol_E3E4_E3))+0.00000000001*(parseInt(gol_E3E4_E4))}
	else{Gran_Total_de_E4=Total_Puntos_de_E4}

//pegando los puntos del equipo 4 del Grupo-E en donde corresponde
	
	var Grupo_E_Equipo_4_Puntos;
	Grupo_E_Equipo_4_Puntos=document.getElementById("Grupo_E_Equipo_4_Puntos");
	Grupo_E_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_E4);

//Calculando los ganadores del grupo E (Nuevos E1)

	var Calculo_Clasificado_E1;
	if(Gran_Total_de_E1>Gran_Total_de_E2 && Gran_Total_de_E1>Gran_Total_de_E3 && Gran_Total_de_E1>Gran_Total_de_E4){Calculo_Clasificado_E1=grupo_E1;}
	if(Gran_Total_de_E2>Gran_Total_de_E1 && Gran_Total_de_E2>Gran_Total_de_E3 && Gran_Total_de_E2>Gran_Total_de_E4){Calculo_Clasificado_E1=grupo_E2;}
	if(Gran_Total_de_E3>Gran_Total_de_E1 && Gran_Total_de_E3>Gran_Total_de_E2 && Gran_Total_de_E3>Gran_Total_de_E4){Calculo_Clasificado_E1=grupo_E3;}
	if(Gran_Total_de_E4>Gran_Total_de_E1 && Gran_Total_de_E4>Gran_Total_de_E2 && Gran_Total_de_E4>Gran_Total_de_E3){Calculo_Clasificado_E1=grupo_E4;}

//pegando al Clasificado 1 del Grupo-E
	
	var Empate_Tecnico_E1;
	Empate_Tecnico_E1=document.getElementById("desempate_E1");

	var Clasificado_E1;
	Clasificado_E1=document.getElementById("clasificado_E1");
	if(Calculo_Clasificado_E1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_E1=Empate_Tecnico_E1.value;Clasificado_E1.innerHTML=0;}
	Clasificado_E1.innerHTML=Calculo_Clasificado_E1;

//Calculando los ganadores del grupo E (Nuevos E2)

	var Calculo_Clasificado_E2;
	if(Gran_Total_de_E1<Gran_Total_de_E2 && Gran_Total_de_E1>Gran_Total_de_E3 && Gran_Total_de_E1>Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E1;}
	if(Gran_Total_de_E1>Gran_Total_de_E2 && Gran_Total_de_E1<Gran_Total_de_E3 && Gran_Total_de_E1>Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E1;}
	if(Gran_Total_de_E1>Gran_Total_de_E2 && Gran_Total_de_E1>Gran_Total_de_E3 && Gran_Total_de_E1<Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E1;}
	if(Gran_Total_de_E2<Gran_Total_de_E1 && Gran_Total_de_E2>Gran_Total_de_E3 && Gran_Total_de_E2>Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E2;}
	if(Gran_Total_de_E2>Gran_Total_de_E1 && Gran_Total_de_E2<Gran_Total_de_E3 && Gran_Total_de_E2>Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E2;}
	if(Gran_Total_de_E2>Gran_Total_de_E1 && Gran_Total_de_E2>Gran_Total_de_E3 && Gran_Total_de_E2<Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E2;}
	if(Gran_Total_de_E3<Gran_Total_de_E1 && Gran_Total_de_E3>Gran_Total_de_E2 && Gran_Total_de_E3>Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E3;}
	if(Gran_Total_de_E3>Gran_Total_de_E1 && Gran_Total_de_E3<Gran_Total_de_E2 && Gran_Total_de_E3>Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E3;}
	if(Gran_Total_de_E3>Gran_Total_de_E1 && Gran_Total_de_E3>Gran_Total_de_E2 && Gran_Total_de_E3<Gran_Total_de_E4){Calculo_Clasificado_E2=grupo_E3;}
	if(Gran_Total_de_E4<Gran_Total_de_E1 && Gran_Total_de_E4>Gran_Total_de_E2 && Gran_Total_de_E4>Gran_Total_de_E3){Calculo_Clasificado_E2=grupo_E4;}
	if(Gran_Total_de_E4>Gran_Total_de_E1 && Gran_Total_de_E4<Gran_Total_de_E2 && Gran_Total_de_E4>Gran_Total_de_E3){Calculo_Clasificado_E2=grupo_E4;}
	if(Gran_Total_de_E4>Gran_Total_de_E1 && Gran_Total_de_E4>Gran_Total_de_E2 && Gran_Total_de_E4<Gran_Total_de_E3){Calculo_Clasificado_E2=grupo_E4;}

//pegando al Clasificado 2 del Grupo-E

	var Empate_Tecnico_E2;
	Empate_Tecnico_E2=document.getElementById("desempate_E2");
	
	var Clasificado_E2;
	Clasificado_E2=document.getElementById("clasificado_E2");
	if(Calculo_Clasificado_E2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_E2=Empate_Tecnico_E2.value;Clasificado_E2.innerHTML=0;}
	Clasificado_E2.innerHTML=Calculo_Clasificado_E2;

//pegando al Clasificado 1 del Grupo-E en Octavos de Final

	var Calculando_Octavos_Equipo_E1;
	Calculando_Octavos_Equipo_E1=document.getElementById("Octavos_Juego_E1_vs_F2_Equipo_E1");
	
	Calcular_Octavos_Equipo_E1
	if(Calculo_Clasificado_E1=="" || Calculo_Clasificado_E1==0 || Calculo_Clasificado_E1==undefined){Calcular_Octavos_Equipo_E1=Empate_Tecnico_E1;}else{Calcular_Octavos_Equipo_E1=Calculo_Clasificado_E1;}
	Calculando_Octavos_Equipo_E1.innerHTML=Calcular_Octavos_Equipo_E1;

//pegando al Clasificado 2 del Grupo-E en Octavos de Final

	var Calculando_Octavos_Equipo_E2;
	Calculando_Octavos_Equipo_E2=document.getElementById("Octavos_Juego_F1_vs_E2_Equipo_E2");
	
	Calcular_Octavos_Equipo_E2
	if(Calculo_Clasificado_E2=="" || Calculo_Clasificado_E2==0 || Calculo_Clasificado_E2==undefined){Calcular_Octavos_Equipo_E2=Empate_Tecnico_E2;}else{Calcular_Octavos_Equipo_E2=Calculo_Clasificado_E2;}
	Calculando_Octavos_Equipo_E2.innerHTML=Calcular_Octavos_Equipo_E2;

}

function clasificados_Grupo_F(){

//se declaran las variables de gol de cada partido del Grupo-F

	var gol_F1F2_F1=document.getElementById("Juego_F1_vs_F2_Gol_F1").value;
	var gol_F1F2_F2=document.getElementById("Juego_F1_vs_F2_Gol_F2").value;
	var gol_F1F3_F1=document.getElementById("Juego_F1_vs_F3_Gol_F1").value;
	var gol_F1F3_F3=document.getElementById("Juego_F1_vs_F3_Gol_F3").value;
	var gol_F1F4_F1=document.getElementById("Juego_F1_vs_F4_Gol_F1").value;
	var gol_F1F4_F4=document.getElementById("Juego_F1_vs_F4_Gol_F4").value;
	var gol_F2F3_F2=document.getElementById("Juego_F2_vs_F3_Gol_F2").value;
	var gol_F2F3_F3=document.getElementById("Juego_F2_vs_F3_Gol_F3").value;
	var gol_F2F4_F2=document.getElementById("Juego_F2_vs_F4_Gol_F2").value;
	var gol_F2F4_F4=document.getElementById("Juego_F2_vs_F4_Gol_F4").value;
	var gol_F3F4_F3=document.getElementById("Juego_F3_vs_F4_Gol_F3").value;
	var gol_F3F4_F4=document.getElementById("Juego_F3_vs_F4_Gol_F4").value;

//Cálculo de puntos del equipo 1 del Grupo-F

	var Puntos_de_F1_en_F1F2;
	if(gol_F1F2_F1>gol_F1F2_F2){Puntos_de_F1_en_F1F2=3;}
	if(gol_F1F2_F1==gol_F1F2_F2){Puntos_de_F1_en_F1F2=1;}
	if(gol_F1F2_F1<gol_F1F2_F2){Puntos_de_F1_en_F1F2=0;}
	var Puntos_de_F1_en_F1F3;
	if(gol_F1F3_F1>gol_F1F3_F3){Puntos_de_F1_en_F1F3=3;}
	if(gol_F1F3_F1==gol_F1F3_F3){Puntos_de_F1_en_F1F3=1;}
	if(gol_F1F3_F1<gol_F1F3_F3){Puntos_de_F1_en_F1F3=0;}
	var Puntos_de_F1_en_F1F4;
	if(gol_F1F4_F1>gol_F1F4_F4){Puntos_de_F1_en_F1F4=3;}
	if(gol_F1F4_F1==gol_F1F4_F4){Puntos_de_F1_en_F1F4=1;}
	if(gol_F1F4_F1<gol_F1F4_F4){Puntos_de_F1_en_F1F4=0;}

	var Gol_Average_de_F1;
	Gol_Average_de_F1=0.001*(parseInt(gol_F1F2_F1)+parseInt(gol_F1F3_F1)+parseInt(gol_F1F4_F1)-parseInt(gol_F1F2_F2)-parseInt(gol_F1F3_F3)-parseInt(gol_F1F4_F4));

	var Gol_Afavor_de_F1;
	Gol_Afavor_de_F1=0.00001*(parseInt(gol_F1F2_F1)+parseInt(gol_F1F3_F1)+parseInt(gol_F1F4_F1));

	var Total_Puntos_de_F1;
	Total_Puntos_de_F1=Puntos_de_F1_en_F1F2+Puntos_de_F1_en_F1F3+Puntos_de_F1_en_F1F4+Gol_Average_de_F1+Gol_Afavor_de_F1;

	var Gran_Total_de_F1;
	if(Total_Puntos_de_F1==Total_Puntos_de_F2){Gran_Total_de_F1=Total_Puntos_de_F1+0.0000001*(Puntos_de_F1_en_F1F2-Puntos_de_F2_en_F1F2)+0.000000001*(parseInt(gol_F1F2_F1)-parseInt(gol_F1F2_F2))+0.00000000001*(parseInt(gol_F1F2_F1))}
	if(Total_Puntos_de_F1==Total_Puntos_de_F3){Gran_Total_de_F1=Total_Puntos_de_F1+0.0000001*(Puntos_de_F1_en_F1F3-Puntos_de_F3_en_F1F3)+0.000000001*(parseInt(gol_F1F3_F1)-parseInt(gol_F1F3_F3))+0.00000000001*(parseInt(gol_F1F3_F1))}
	if(Total_Puntos_de_F1==Total_Puntos_de_F4){Gran_Total_de_F1=Total_Puntos_de_F1+0.0000001*(Puntos_de_F1_en_F1F4-Puntos_de_F4_en_F1F4)+0.000000001*(parseInt(gol_F1F4_F1)-parseInt(gol_F1F4_F4))+0.00000000001*(parseInt(gol_F1F4_F1))}
	else{Gran_Total_de_F1=Total_Puntos_de_F1}

//pegando los puntos del equipo 1 del Grupo-F en donde corresponde
	
	var Grupo_F_Equipo_1_Puntos;
	Grupo_F_Equipo_1_Puntos=document.getElementById("Grupo_F_Equipo_1_Puntos");
	Grupo_F_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_F1);

//Cálculo de puntos del equipo 2 del Grupo-F

	var Puntos_de_F2_en_F1F2;
	if(gol_F1F2_F2>gol_F1F2_F1){Puntos_de_F2_en_F1F2=3;}
	if(gol_F1F2_F2==gol_F1F2_F1){Puntos_de_F2_en_F1F2=1;}
	if(gol_F1F2_F2<gol_F1F2_F1){Puntos_de_F2_en_F1F2=0;}
	var Puntos_de_F2_en_F2F3;
	if(gol_F2F3_F2>gol_F2F3_F3){Puntos_de_F2_en_F2F3=3;}
	if(gol_F2F3_F2==gol_F2F3_F3){Puntos_de_F2_en_F2F3=1;}
	if(gol_F2F3_F2<gol_F2F3_F3){Puntos_de_F2_en_F2F3=0;}
	var Puntos_de_F2_en_F2F4;
	if(gol_F2F4_F2>gol_F2F4_F4){Puntos_de_F2_en_F2F4=3;}
	if(gol_F2F4_F2==gol_F2F4_F4){Puntos_de_F2_en_F2F4=1;}
	if(gol_F2F4_F2<gol_F2F4_F4){Puntos_de_F2_en_F2F4=0;}

	var Gol_Average_de_F2;
	Gol_Average_de_F2=0.001*(parseInt(gol_F1F2_F2)+parseInt(gol_F2F3_F2)+parseInt(gol_F2F4_F2)-parseInt(gol_F1F2_F1)-parseInt(gol_F2F3_F3)-parseInt(gol_F2F4_F4));

	var Gol_Afavor_de_F2;
	Gol_Afavor_de_F2=0.00001*(parseInt(gol_F1F2_F2)+parseInt(gol_F2F3_F2)+parseInt(gol_F2F4_F2));

	var Total_Puntos_de_F2;
	Total_Puntos_de_F2=Puntos_de_F2_en_F1F2+Puntos_de_F2_en_F2F3+Puntos_de_F2_en_F2F4+Gol_Average_de_F2+Gol_Afavor_de_F2;

	var Gran_Total_de_F2;
	if(Total_Puntos_de_F2==Total_Puntos_de_F1){Gran_Total_de_F2=Total_Puntos_de_F2+0.0000001*(Puntos_de_F2_en_F1F2-Puntos_de_F1_en_F1F2)+0.000000001*(parseInt(gol_F1F2_F2)-parseInt(gol_F1F2_F1))+0.00000000001*(parseInt(gol_F1F2_F2))}
	if(Total_Puntos_de_F2==Total_Puntos_de_F3){Gran_Total_de_F2=Total_Puntos_de_F2+0.0000001*(Puntos_de_F2_en_F2F3-Puntos_de_F3_en_F2F3)+0.000000001*(parseInt(gol_F2F3_F2)-parseInt(gol_F2F3_F3))+0.00000000001*(parseInt(gol_F2F3_F2))}
	if(Total_Puntos_de_F2==Total_Puntos_de_F4){Gran_Total_de_F2=Total_Puntos_de_F2+0.0000001*(Puntos_de_F2_en_F2F4-Puntos_de_F4_en_F2F4)+0.000000001*(parseInt(gol_F2F4_F2)-parseInt(gol_F2F4_F4))+0.00000000001*(parseInt(gol_F2F4_F2))}
	else{Gran_Total_de_F2=Total_Puntos_de_F2}

//pegando los puntos del equipo 2 del Grupo-F en donde corresponde
	
	var Grupo_F_Equipo_2_Puntos;
	Grupo_F_Equipo_2_Puntos=document.getElementById("Grupo_F_Equipo_2_Puntos");
	Grupo_F_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_F2);

//Cálculo de puntos del equipo 3 del Grupo-F

	var Puntos_de_F3_en_F1F3;
	if(gol_F1F3_F3>gol_F1F3_F1){Puntos_de_F3_en_F1F3=3;}
	if(gol_F1F3_F3==gol_F1F3_F1){Puntos_de_F3_en_F1F3=1;}
	if(gol_F1F3_F3<gol_F1F3_F1){Puntos_de_F3_en_F1F3=0;}
	var Puntos_de_F3_en_F2F3;
	if(gol_F2F3_F3>gol_F2F3_F2){Puntos_de_F3_en_F2F3=3;}
	if(gol_F2F3_F3==gol_F2F3_F2){Puntos_de_F3_en_F2F3=1;}
	if(gol_F2F3_F3<gol_F2F3_F2){Puntos_de_F3_en_F2F3=0;}
	var Puntos_de_F3_en_F3F4;
	if(gol_F3F4_F3>gol_F3F4_F4){Puntos_de_F3_en_F3F4=3;}
	if(gol_F3F4_F3==gol_F3F4_F4){Puntos_de_F3_en_F3F4=1;}
	if(gol_F3F4_F3<gol_F3F4_F4){Puntos_de_F3_en_F3F4=0;}

	var Gol_Average_de_F3;
	Gol_Average_de_F3=0.001*(parseInt(gol_F1F3_F3)+parseInt(gol_F2F3_F3)+parseInt(gol_F3F4_F3)-parseInt(gol_F1F3_F1)-parseInt(gol_F2F3_F2)-parseInt(gol_F3F4_F4));

	var Gol_Afavor_de_F3;
	Gol_Afavor_de_F3=0.00001*(parseInt(gol_F1F3_F3)+parseInt(gol_F2F3_F3)+parseInt(gol_F3F4_F3));

	var Total_Puntos_de_F3;
	Total_Puntos_de_F3=Puntos_de_F3_en_F1F3+Puntos_de_F3_en_F2F3+Puntos_de_F3_en_F3F4+Gol_Average_de_F3+Gol_Afavor_de_F3;

	var Gran_Total_de_F3;
	if(Total_Puntos_de_F3==Total_Puntos_de_F1){Gran_Total_de_F3=Total_Puntos_de_F3+0.0000001*(Puntos_de_F3_en_F1F3-Puntos_de_F1_en_F1F3)+0.000000001*(parseInt(gol_F1F3_F3)-parseInt(gol_F1F3_F1))+0.00000000001*(parseInt(gol_F1F3_F3))}
	if(Total_Puntos_de_F3==Total_Puntos_de_F2){Gran_Total_de_F3=Total_Puntos_de_F3+0.0000001*(Puntos_de_F3_en_F2F3-Puntos_de_F2_en_F2F3)+0.000000001*(parseInt(gol_F2F3_F3)-parseInt(gol_F2F3_F2))+0.00000000001*(parseInt(gol_F2F3_F3))}
	if(Total_Puntos_de_F3==Total_Puntos_de_F4){Gran_Total_de_F3=Total_Puntos_de_F3+0.0000001*(Puntos_de_F3_en_F3F4-Puntos_de_F4_en_F3F4)+0.000000001*(parseInt(gol_F3F4_F3)-parseInt(gol_F3F4_F4))+0.00000000001*(parseInt(gol_F3F4_F3))}
	else{Gran_Total_de_F3=Total_Puntos_de_F3}

//pegando los puntos del equipo 3 del Grupo-F en donde corresponde
	
	var Grupo_F_Equipo_3_Puntos;
	Grupo_F_Equipo_3_Puntos=document.getElementById("Grupo_F_Equipo_3_Puntos");
	Grupo_F_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_F3);

//Cálculo de puntos del equipo 4 del Grupo-F

	var Puntos_de_F4_en_F1F4;
	if(gol_F1F4_F4>gol_F1F4_F1){Puntos_de_F4_en_F1F4=3;}
	if(gol_F1F4_F4==gol_F1F4_F1){Puntos_de_F4_en_F1F4=1;}
	if(gol_F1F4_F4<gol_F1F4_F1){Puntos_de_F4_en_F1F4=0;}
	var Puntos_de_F4_en_F2F4;
	if(gol_F2F4_F4>gol_F2F4_F2){Puntos_de_F4_en_F2F4=3;}
	if(gol_F2F4_F4==gol_F2F4_F2){Puntos_de_F4_en_F2F4=1;}
	if(gol_F2F4_F4<gol_F2F4_F2){Puntos_de_F4_en_F2F4=0;}
	var Puntos_de_F4_en_F3F4;
	if(gol_F3F4_F4>gol_F3F4_F3){Puntos_de_F4_en_F3F4=3;}
	if(gol_F3F4_F4==gol_F3F4_F3){Puntos_de_F4_en_F3F4=1;}
	if(gol_F3F4_F4<gol_F3F4_F3){Puntos_de_F4_en_F3F4=0;}

	var Gol_Average_de_F4;
	Gol_Average_de_F4=0.001*(parseInt(gol_F1F4_F4)+parseInt(gol_F2F4_F4)+parseInt(gol_F3F4_F4)-parseInt(gol_F1F4_F1)-parseInt(gol_F2F4_F2)-parseInt(gol_F3F4_F3));

	var Gol_Afavor_de_F4;
	Gol_Afavor_de_F4=0.00001*(parseInt(gol_F1F4_F4)+parseInt(gol_F2F4_F4)+parseInt(gol_F3F4_F4));

	var Total_Puntos_de_F4;
	Total_Puntos_de_F4=Puntos_de_F4_en_F1F4+Puntos_de_F4_en_F2F4+Puntos_de_F4_en_F3F4+Gol_Average_de_F4+Gol_Afavor_de_F4;

	var Gran_Total_de_F4;
	if(Total_Puntos_de_F4==Total_Puntos_de_F1){Gran_Total_de_F4=Total_Puntos_de_F4+0.0000001*(Puntos_de_F4_en_F1F4-Puntos_de_F1_en_F1F4)+0.000000001*(parseInt(gol_F1F4_F4)-parseInt(gol_F1F4_F1))+0.00000000001*(parseInt(gol_F1F4_F4))}
	if(Total_Puntos_de_F4==Total_Puntos_de_F2){Gran_Total_de_F4=Total_Puntos_de_F4+0.0000001*(Puntos_de_F4_en_F2F4-Puntos_de_F2_en_F2F4)+0.000000001*(parseInt(gol_F2F4_F4)-parseInt(gol_F2F4_F2))+0.00000000001*(parseInt(gol_F2F4_F4))}
	if(Total_Puntos_de_F4==Total_Puntos_de_F3){Gran_Total_de_F4=Total_Puntos_de_F4+0.0000001*(Puntos_de_F4_en_F3F4-Puntos_de_F3_en_F3F4)+0.000000001*(parseInt(gol_F3F4_F4)-parseInt(gol_F3F4_F3))+0.00000000001*(parseInt(gol_F3F4_F4))}
	else{Gran_Total_de_F4=Total_Puntos_de_F4}

//pegando los puntos del equipo 4 del Grupo-F en donde corresponde
	
	var Grupo_F_Equipo_4_Puntos;
	Grupo_F_Equipo_4_Puntos=document.getElementById("Grupo_F_Equipo_4_Puntos");
	Grupo_F_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_F4);

//Calculando los ganadores del grupo F (Nuevos F1)

	var Calculo_Clasificado_F1;
	if(Gran_Total_de_F1>Gran_Total_de_F2 && Gran_Total_de_F1>Gran_Total_de_F3 && Gran_Total_de_F1>Gran_Total_de_F4){Calculo_Clasificado_F1=grupo_F1;}
	if(Gran_Total_de_F2>Gran_Total_de_F1 && Gran_Total_de_F2>Gran_Total_de_F3 && Gran_Total_de_F2>Gran_Total_de_F4){Calculo_Clasificado_F1=grupo_F2;}
	if(Gran_Total_de_F3>Gran_Total_de_F1 && Gran_Total_de_F3>Gran_Total_de_F2 && Gran_Total_de_F3>Gran_Total_de_F4){Calculo_Clasificado_F1=grupo_F3;}
	if(Gran_Total_de_F4>Gran_Total_de_F1 && Gran_Total_de_F4>Gran_Total_de_F2 && Gran_Total_de_F4>Gran_Total_de_F3){Calculo_Clasificado_F1=grupo_F4;}

//pegando al Clasificado 1 del Grupo-F
	
	var Empate_Tecnico_F1;
	Empate_Tecnico_F1=document.getElementById("desempate_F1");

	var Clasificado_F1;
	Clasificado_F1=document.getElementById("clasificado_F1");
	if(Calculo_Clasificado_F1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_F1=Empate_Tecnico_F1.value;Clasificado_F1.innerHTML=0;}
	Clasificado_F1.innerHTML=Calculo_Clasificado_F1;

//Calculando los ganadores del grupo E (Nuevos F2)

	var Calculo_Clasificado_F2;
	if(Gran_Total_de_F1<Gran_Total_de_F2 && Gran_Total_de_F1>Gran_Total_de_F3 && Gran_Total_de_F1>Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F1;}
	if(Gran_Total_de_F1>Gran_Total_de_F2 && Gran_Total_de_F1<Gran_Total_de_F3 && Gran_Total_de_F1>Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F1;}
	if(Gran_Total_de_F1>Gran_Total_de_F2 && Gran_Total_de_F1>Gran_Total_de_F3 && Gran_Total_de_F1<Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F1;}
	if(Gran_Total_de_F2<Gran_Total_de_F1 && Gran_Total_de_F2>Gran_Total_de_F3 && Gran_Total_de_F2>Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F2;}
	if(Gran_Total_de_F2>Gran_Total_de_F1 && Gran_Total_de_F2<Gran_Total_de_F3 && Gran_Total_de_F2>Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F2;}
	if(Gran_Total_de_F2>Gran_Total_de_F1 && Gran_Total_de_F2>Gran_Total_de_F3 && Gran_Total_de_F2<Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F2;}
	if(Gran_Total_de_F3<Gran_Total_de_F1 && Gran_Total_de_F3>Gran_Total_de_F2 && Gran_Total_de_F3>Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F3;}
	if(Gran_Total_de_F3>Gran_Total_de_F1 && Gran_Total_de_F3<Gran_Total_de_F2 && Gran_Total_de_F3>Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F3;}
	if(Gran_Total_de_F3>Gran_Total_de_F1 && Gran_Total_de_F3>Gran_Total_de_F2 && Gran_Total_de_F3<Gran_Total_de_F4){Calculo_Clasificado_F2=grupo_F3;}
	if(Gran_Total_de_F4<Gran_Total_de_F1 && Gran_Total_de_F4>Gran_Total_de_F2 && Gran_Total_de_F4>Gran_Total_de_F3){Calculo_Clasificado_F2=grupo_F4;}
	if(Gran_Total_de_F4>Gran_Total_de_F1 && Gran_Total_de_F4<Gran_Total_de_F2 && Gran_Total_de_F4>Gran_Total_de_F3){Calculo_Clasificado_F2=grupo_F4;}
	if(Gran_Total_de_F4>Gran_Total_de_F1 && Gran_Total_de_F4>Gran_Total_de_F2 && Gran_Total_de_F4<Gran_Total_de_F3){Calculo_Clasificado_F2=grupo_F4;}

//pegando al Clasificado 2 del Grupo-F

	var Empate_Tecnico_F2;
	Empate_Tecnico_F2=document.getElementById("desempate_F2");
	
	var Clasificado_F2;
	Clasificado_F2=document.getElementById("clasificado_F2");
	if(Calculo_Clasificado_F2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_F2=Empate_Tecnico_F2.value;Clasificado_F2.innerHTML=0;}
	Clasificado_F2.innerHTML=Calculo_Clasificado_F2;

//pegando al Clasificado 1 del Grupo-F en Octavos de Final

	var Calculando_Octavos_Equipo_F1;
	Calculando_Octavos_Equipo_F1=document.getElementById("Octavos_Juego_F1_vs_E2_Equipo_F1");
	
	Calcular_Octavos_Equipo_F1
	if(Calculo_Clasificado_F1=="" || Calculo_Clasificado_F1==0 || Calculo_Clasificado_F1==undefined){Calcular_Octavos_Equipo_F1=Empate_Tecnico_F1;}else{Calcular_Octavos_Equipo_F1=Calculo_Clasificado_F1;}
	Calculando_Octavos_Equipo_F1.innerHTML=Calcular_Octavos_Equipo_F1;

//pegando al Clasificado 2 del Grupo-F en Octavos de Final

	var Calculando_Octavos_Equipo_F2;
	Calculando_Octavos_Equipo_F2=document.getElementById("Octavos_Juego_E1_vs_F2_Equipo_F2");
	
	Calcular_Octavos_Equipo_F2
	if(Calculo_Clasificado_F2=="" || Calculo_Clasificado_F2==0 || Calculo_Clasificado_F2==undefined){Calcular_Octavos_Equipo_F2=Empate_Tecnico_F2;}else{Calcular_Octavos_Equipo_F2=Calculo_Clasificado_F2;}
	Calculando_Octavos_Equipo_F2.innerHTML=Calcular_Octavos_Equipo_F2;

}

function clasificados_Grupo_G(){

//se declaran las variables de gol de cada partido del Grupo-G

	var gol_G1G2_G1=document.getElementById("Juego_G1_vs_G2_Gol_G1").value;
	var gol_G1G2_G2=document.getElementById("Juego_G1_vs_G2_Gol_G2").value;
	var gol_G1G3_G1=document.getElementById("Juego_G1_vs_G3_Gol_G1").value;
	var gol_G1G3_G3=document.getElementById("Juego_G1_vs_G3_Gol_G3").value;
	var gol_G1G4_G1=document.getElementById("Juego_G1_vs_G4_Gol_G1").value;
	var gol_G1G4_G4=document.getElementById("Juego_G1_vs_G4_Gol_G4").value;
	var gol_G2G3_G2=document.getElementById("Juego_G2_vs_G3_Gol_G2").value;
	var gol_G2G3_G3=document.getElementById("Juego_G2_vs_G3_Gol_G3").value;
	var gol_G2G4_G2=document.getElementById("Juego_G2_vs_G4_Gol_G2").value;
	var gol_G2G4_G4=document.getElementById("Juego_G2_vs_G4_Gol_G4").value;
	var gol_G3G4_G3=document.getElementById("Juego_G3_vs_G4_Gol_G3").value;
	var gol_G3G4_G4=document.getElementById("Juego_G3_vs_G4_Gol_G4").value;

//Cálculo de puntos del equipo 1 del Grupo-G

	var Puntos_de_G1_en_G1G2;
	if(gol_G1G2_G1>gol_G1G2_G2){Puntos_de_G1_en_G1G2=3;}
	if(gol_G1G2_G1==gol_G1G2_G2){Puntos_de_G1_en_G1G2=1;}
	if(gol_G1G2_G1<gol_G1G2_G2){Puntos_de_G1_en_G1G2=0;}
	var Puntos_de_G1_en_G1G3;
	if(gol_G1G3_G1>gol_G1G3_G3){Puntos_de_G1_en_G1G3=3;}
	if(gol_G1G3_G1==gol_G1G3_G3){Puntos_de_G1_en_G1G3=1;}
	if(gol_G1G3_G1<gol_G1G3_G3){Puntos_de_G1_en_G1G3=0;}
	var Puntos_de_G1_en_G1G4;
	if(gol_G1G4_G1>gol_G1G4_G4){Puntos_de_G1_en_G1G4=3;}
	if(gol_G1G4_G1==gol_G1G4_G4){Puntos_de_G1_en_G1G4=1;}
	if(gol_G1G4_G1<gol_G1G4_G4){Puntos_de_G1_en_G1G4=0;}

	var Gol_Average_de_G1;
	Gol_Average_de_G1=0.001*(parseInt(gol_G1G2_G1)+parseInt(gol_G1G3_G1)+parseInt(gol_G1G4_G1)-parseInt(gol_G1G2_G2)-parseInt(gol_G1G3_G3)-parseInt(gol_G1G4_G4));

	var Gol_Afavor_de_G1;
	Gol_Afavor_de_G1=0.00001*(parseInt(gol_G1G2_G1)+parseInt(gol_G1G3_G1)+parseInt(gol_G1G4_G1));

	var Total_Puntos_de_G1;
	Total_Puntos_de_G1=Puntos_de_G1_en_G1G2+Puntos_de_G1_en_G1G3+Puntos_de_G1_en_G1G4+Gol_Average_de_G1+Gol_Afavor_de_G1;

	var Gran_Total_de_G1;
	if(Total_Puntos_de_G1==Total_Puntos_de_G2){Gran_Total_de_G1=Total_Puntos_de_G1+0.0000001*(Puntos_de_G1_en_G1G2-Puntos_de_G2_en_G1G2)+0.000000001*(parseInt(gol_G1G2_G1)-parseInt(gol_G1G2_G2))+0.00000000001*(parseInt(gol_G1G2_G1))}
	if(Total_Puntos_de_G1==Total_Puntos_de_G3){Gran_Total_de_G1=Total_Puntos_de_G1+0.0000001*(Puntos_de_G1_en_G1G3-Puntos_de_G3_en_G1G3)+0.000000001*(parseInt(gol_G1G3_G1)-parseInt(gol_G1G3_G3))+0.00000000001*(parseInt(gol_G1G3_G1))}
	if(Total_Puntos_de_G1==Total_Puntos_de_G4){Gran_Total_de_G1=Total_Puntos_de_G1+0.0000001*(Puntos_de_G1_en_G1G4-Puntos_de_G4_en_G1G4)+0.000000001*(parseInt(gol_G1G4_G1)-parseInt(gol_G1G4_G4))+0.00000000001*(parseInt(gol_G1G4_G1))}
	else{Gran_Total_de_G1=Total_Puntos_de_G1}

//pegando los puntos del equipo 1 del Grupo-G en donde corresponde
	
	var Grupo_G_Equipo_1_Puntos;
	Grupo_G_Equipo_1_Puntos=document.getElementById("Grupo_G_Equipo_1_Puntos");
	Grupo_G_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_G1);

//Cálculo de puntos del equipo 2 del Grupo-G

	var Puntos_de_G2_en_G1G2;
	if(gol_G1G2_G2>gol_G1G2_G1){Puntos_de_G2_en_G1G2=3;}
	if(gol_G1G2_G2==gol_G1G2_G1){Puntos_de_G2_en_G1G2=1;}
	if(gol_G1G2_G2<gol_G1G2_G1){Puntos_de_G2_en_G1G2=0;}
	var Puntos_de_G2_en_G2G3;
	if(gol_G2G3_G2>gol_G2G3_G3){Puntos_de_G2_en_G2G3=3;}
	if(gol_G2G3_G2==gol_G2G3_G3){Puntos_de_G2_en_G2G3=1;}
	if(gol_G2G3_G2<gol_G2G3_G3){Puntos_de_G2_en_G2G3=0;}
	var Puntos_de_G2_en_G2G4;
	if(gol_G2G4_G2>gol_G2G4_G4){Puntos_de_G2_en_G2G4=3;}
	if(gol_G2G4_G2==gol_G2G4_G4){Puntos_de_G2_en_G2G4=1;}
	if(gol_G2G4_G2<gol_G2G4_G4){Puntos_de_G2_en_G2G4=0;}

	var Gol_Average_de_G2;
	Gol_Average_de_G2=0.001*(parseInt(gol_G1G2_G2)+parseInt(gol_G2G3_G2)+parseInt(gol_G2G4_G2)-parseInt(gol_G1G2_G1)-parseInt(gol_G2G3_G3)-parseInt(gol_G2G4_G4));

	var Gol_Afavor_de_G2;
	Gol_Afavor_de_G2=0.00001*(parseInt(gol_G1G2_G2)+parseInt(gol_G2G3_G2)+parseInt(gol_G2G4_G2));

	var Total_Puntos_de_G2;
	Total_Puntos_de_G2=Puntos_de_G2_en_G1G2+Puntos_de_G2_en_G2G3+Puntos_de_G2_en_G2G4+Gol_Average_de_G2+Gol_Afavor_de_G2;

	var Gran_Total_de_G2;
	if(Total_Puntos_de_G2==Total_Puntos_de_G1){Gran_Total_de_G2=Total_Puntos_de_G2+0.0000001*(Puntos_de_G2_en_G1G2-Puntos_de_G1_en_G1G2)+0.000000001*(parseInt(gol_G1G2_G2)-parseInt(gol_G1G2_G1))+0.00000000001*(parseInt(gol_G1G2_G2))}
	if(Total_Puntos_de_G2==Total_Puntos_de_G3){Gran_Total_de_G2=Total_Puntos_de_G2+0.0000001*(Puntos_de_G2_en_G2G3-Puntos_de_G3_en_G2G3)+0.000000001*(parseInt(gol_G2G3_G2)-parseInt(gol_G2G3_G3))+0.00000000001*(parseInt(gol_G2G3_G2))}
	if(Total_Puntos_de_G2==Total_Puntos_de_G4){Gran_Total_de_G2=Total_Puntos_de_G2+0.0000001*(Puntos_de_G2_en_G2G4-Puntos_de_G4_en_G2G4)+0.000000001*(parseInt(gol_G2G4_G2)-parseInt(gol_G2G4_G4))+0.00000000001*(parseInt(gol_G2G4_G2))}
	else{Gran_Total_de_G2=Total_Puntos_de_G2}

//pegando los puntos del equipo 2 del Grupo-G en donde corresponde
	
	var Grupo_G_Equipo_2_Puntos;
	Grupo_G_Equipo_2_Puntos=document.getElementById("Grupo_G_Equipo_2_Puntos");
	Grupo_G_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_G2);

//Cálculo de puntos del equipo 3 del Grupo-G

	var Puntos_de_G3_en_G1G3;
	if(gol_G1G3_G3>gol_G1G3_G1){Puntos_de_G3_en_G1G3=3;}
	if(gol_G1G3_G3==gol_G1G3_G1){Puntos_de_G3_en_G1G3=1;}
	if(gol_G1G3_G3<gol_G1G3_G1){Puntos_de_G3_en_G1G3=0;}
	var Puntos_de_G3_en_G2G3;
	if(gol_G2G3_G3>gol_G2G3_G2){Puntos_de_G3_en_G2G3=3;}
	if(gol_G2G3_G3==gol_G2G3_G2){Puntos_de_G3_en_G2G3=1;}
	if(gol_G2G3_G3<gol_G2G3_G2){Puntos_de_G3_en_G2G3=0;}
	var Puntos_de_G3_en_G3G4;
	if(gol_G3G4_G3>gol_G3G4_G4){Puntos_de_G3_en_G3G4=3;}
	if(gol_G3G4_G3==gol_G3G4_G4){Puntos_de_G3_en_G3G4=1;}
	if(gol_G3G4_G3<gol_G3G4_G4){Puntos_de_G3_en_G3G4=0;}

	var Gol_Average_de_G3;
	Gol_Average_de_G3=0.001*(parseInt(gol_G1G3_G3)+parseInt(gol_G2G3_G3)+parseInt(gol_G3G4_G3)-parseInt(gol_G1G3_G1)-parseInt(gol_G2G3_G2)-parseInt(gol_G3G4_G4));

	var Gol_Afavor_de_G3;
	Gol_Afavor_de_G3=0.00001*(parseInt(gol_G1G3_G3)+parseInt(gol_G2G3_G3)+parseInt(gol_G3G4_G3));

	var Total_Puntos_de_G3;
	Total_Puntos_de_G3=Puntos_de_G3_en_G1G3+Puntos_de_G3_en_G2G3+Puntos_de_G3_en_G3G4+Gol_Average_de_G3+Gol_Afavor_de_G3;

	var Gran_Total_de_G3;
	if(Total_Puntos_de_G3==Total_Puntos_de_G1){Gran_Total_de_G3=Total_Puntos_de_G3+0.0000001*(Puntos_de_G3_en_G1G3-Puntos_de_G1_en_G1G3)+0.000000001*(parseInt(gol_G1G3_G3)-parseInt(gol_G1G3_G1))+0.00000000001*(parseInt(gol_G1G3_G3))}
	if(Total_Puntos_de_G3==Total_Puntos_de_G2){Gran_Total_de_G3=Total_Puntos_de_G3+0.0000001*(Puntos_de_G3_en_G2G3-Puntos_de_G2_en_G2G3)+0.000000001*(parseInt(gol_G2G3_G3)-parseInt(gol_G2G3_G2))+0.00000000001*(parseInt(gol_G2G3_G3))}
	if(Total_Puntos_de_G3==Total_Puntos_de_G4){Gran_Total_de_G3=Total_Puntos_de_G3+0.0000001*(Puntos_de_G3_en_G3G4-Puntos_de_G4_en_G3G4)+0.000000001*(parseInt(gol_G3G4_G3)-parseInt(gol_G3G4_G4))+0.00000000001*(parseInt(gol_G3G4_G3))}
	else{Gran_Total_de_G3=Total_Puntos_de_G3}

//pegando los puntos del equipo 3 del Grupo-G en donde corresponde
	
	var Grupo_G_Equipo_3_Puntos;
	Grupo_G_Equipo_3_Puntos=document.getElementById("Grupo_G_Equipo_3_Puntos");
	Grupo_G_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_G3);

//Cálculo de puntos del equipo 4 del Grupo-G

	var Puntos_de_G4_en_G1G4;
	if(gol_G1G4_G4>gol_G1G4_G1){Puntos_de_G4_en_G1G4=3;}
	if(gol_G1G4_G4==gol_G1G4_G1){Puntos_de_G4_en_G1G4=1;}
	if(gol_G1G4_G4<gol_G1G4_G1){Puntos_de_G4_en_G1G4=0;}
	var Puntos_de_G4_en_G2G4;
	if(gol_G2G4_G4>gol_G2G4_G2){Puntos_de_G4_en_G2G4=3;}
	if(gol_G2G4_G4==gol_G2G4_G2){Puntos_de_G4_en_G2G4=1;}
	if(gol_G2G4_G4<gol_G2G4_G2){Puntos_de_G4_en_G2G4=0;}
	var Puntos_de_G4_en_G3G4;
	if(gol_G3G4_G4>gol_G3G4_G3){Puntos_de_G4_en_G3G4=3;}
	if(gol_G3G4_G4==gol_G3G4_G3){Puntos_de_G4_en_G3G4=1;}
	if(gol_G3G4_G4<gol_G3G4_G3){Puntos_de_G4_en_G3G4=0;}

	var Gol_Average_de_G4;
	Gol_Average_de_G4=0.001*(parseInt(gol_G1G4_G4)+parseInt(gol_G2G4_G4)+parseInt(gol_G3G4_G4)-parseInt(gol_G1G4_G1)-parseInt(gol_G2G4_G2)-parseInt(gol_G3G4_G3));

	var Gol_Afavor_de_G4;
	Gol_Afavor_de_G4=0.00001*(parseInt(gol_G1G4_G4)+parseInt(gol_G2G4_G4)+parseInt(gol_G3G4_G4));

	var Total_Puntos_de_G4;
	Total_Puntos_de_G4=Puntos_de_G4_en_G1G4+Puntos_de_G4_en_G2G4+Puntos_de_G4_en_G3G4+Gol_Average_de_G4+Gol_Afavor_de_G4;

	var Gran_Total_de_G4;
	if(Total_Puntos_de_G4==Total_Puntos_de_G1){Gran_Total_de_G4=Total_Puntos_de_G4+0.0000001*(Puntos_de_G4_en_G1G4-Puntos_de_G1_en_G1G4)+0.000000001*(parseInt(gol_G1G4_G4)-parseInt(gol_G1G4_G1))+0.00000000001*(parseInt(gol_G1G4_G4))}
	if(Total_Puntos_de_G4==Total_Puntos_de_G2){Gran_Total_de_G4=Total_Puntos_de_G4+0.0000001*(Puntos_de_G4_en_G2G4-Puntos_de_G2_en_G2G4)+0.000000001*(parseInt(gol_G2G4_G4)-parseInt(gol_G2G4_G2))+0.00000000001*(parseInt(gol_G2G4_G4))}
	if(Total_Puntos_de_G4==Total_Puntos_de_G3){Gran_Total_de_G4=Total_Puntos_de_G4+0.0000001*(Puntos_de_G4_en_G3G4-Puntos_de_G3_en_G3G4)+0.000000001*(parseInt(gol_G3G4_G4)-parseInt(gol_G3G4_G3))+0.00000000001*(parseInt(gol_G3G4_G4))}
	else{Gran_Total_de_G4=Total_Puntos_de_G4}

//pegando los puntos del equipo 4 del Grupo-G en donde corresponde
	
	var Grupo_G_Equipo_4_Puntos;
	Grupo_G_Equipo_4_Puntos=document.getElementById("Grupo_G_Equipo_4_Puntos");
	Grupo_G_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_G4);

//Calculando los ganadores del grupo G (Nuevos G1)

	var Calculo_Clasificado_G1;
	if(Gran_Total_de_G1>Gran_Total_de_G2 && Gran_Total_de_G1>Gran_Total_de_G3 && Gran_Total_de_G1>Gran_Total_de_G4){Calculo_Clasificado_G1=grupo_G1;}
	if(Gran_Total_de_G2>Gran_Total_de_G1 && Gran_Total_de_G2>Gran_Total_de_G3 && Gran_Total_de_G2>Gran_Total_de_G4){Calculo_Clasificado_G1=grupo_G2;}
	if(Gran_Total_de_G3>Gran_Total_de_G1 && Gran_Total_de_G3>Gran_Total_de_G2 && Gran_Total_de_G3>Gran_Total_de_G4){Calculo_Clasificado_G1=grupo_G3;}
	if(Gran_Total_de_G4>Gran_Total_de_G1 && Gran_Total_de_G4>Gran_Total_de_G2 && Gran_Total_de_G4>Gran_Total_de_G3){Calculo_Clasificado_G1=grupo_G4;}

//pegando al Clasificado 1 del Grupo-G
	
	var Empate_Tecnico_G1;
	Empate_Tecnico_G1=document.getElementById("desempate_G1");

	var Clasificado_G1;
	Clasificado_G1=document.getElementById("clasificado_G1");
	if(Calculo_Clasificado_G1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_G1=Empate_Tecnico_G1.value;Clasificado_G1.innerHTML=0;}
	Clasificado_G1.innerHTML=Calculo_Clasificado_G1;

//Calculando los ganadores del grupo G (Nuevos G2)

	var Calculo_Clasificado_G2;
	if(Gran_Total_de_G1<Gran_Total_de_G2 && Gran_Total_de_G1>Gran_Total_de_G3 && Gran_Total_de_G1>Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G1;}
	if(Gran_Total_de_G1>Gran_Total_de_G2 && Gran_Total_de_G1<Gran_Total_de_G3 && Gran_Total_de_G1>Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G1;}
	if(Gran_Total_de_G1>Gran_Total_de_G2 && Gran_Total_de_G1>Gran_Total_de_G3 && Gran_Total_de_G1<Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G1;}
	if(Gran_Total_de_G2<Gran_Total_de_G1 && Gran_Total_de_G2>Gran_Total_de_G3 && Gran_Total_de_G2>Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G2;}
	if(Gran_Total_de_G2>Gran_Total_de_G1 && Gran_Total_de_G2<Gran_Total_de_G3 && Gran_Total_de_G2>Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G2;}
	if(Gran_Total_de_G2>Gran_Total_de_G1 && Gran_Total_de_G2>Gran_Total_de_G3 && Gran_Total_de_G2<Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G2;}
	if(Gran_Total_de_G3<Gran_Total_de_G1 && Gran_Total_de_G3>Gran_Total_de_G2 && Gran_Total_de_G3>Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G3;}
	if(Gran_Total_de_G3>Gran_Total_de_G1 && Gran_Total_de_G3<Gran_Total_de_G2 && Gran_Total_de_G3>Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G3;}
	if(Gran_Total_de_G3>Gran_Total_de_G1 && Gran_Total_de_G3>Gran_Total_de_G2 && Gran_Total_de_G3<Gran_Total_de_G4){Calculo_Clasificado_G2=grupo_G3;}
	if(Gran_Total_de_G4<Gran_Total_de_G1 && Gran_Total_de_G4>Gran_Total_de_G2 && Gran_Total_de_G4>Gran_Total_de_G3){Calculo_Clasificado_G2=grupo_G4;}
	if(Gran_Total_de_G4>Gran_Total_de_G1 && Gran_Total_de_G4<Gran_Total_de_G2 && Gran_Total_de_G4>Gran_Total_de_G3){Calculo_Clasificado_G2=grupo_G4;}
	if(Gran_Total_de_G4>Gran_Total_de_G1 && Gran_Total_de_G4>Gran_Total_de_G2 && Gran_Total_de_G4<Gran_Total_de_G3){Calculo_Clasificado_G2=grupo_G4;}

//pegando al Clasificado 2 del Grupo-G

	var Empate_Tecnico_G2;
	Empate_Tecnico_G2=document.getElementById("desempate_G2");
	
	var Clasificado_G2;
	Clasificado_G2=document.getElementById("clasificado_G2");
	if(Calculo_Clasificado_G2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_G2=Empate_Tecnico_G2.value;Clasificado_G2.innerHTML=0;}
	Clasificado_G2.innerHTML=Calculo_Clasificado_G2;

//pegando al Clasificado 1 del Grupo-G en Octavos de Final

	var Calculando_Octavos_Equipo_G1;
	Calculando_Octavos_Equipo_G1=document.getElementById("Octavos_Juego_G1_vs_H2_Equipo_G1");
	
	Calcular_Octavos_Equipo_G1
	if(Calculo_Clasificado_G1=="" || Calculo_Clasificado_G1==0 || Calculo_Clasificado_G1==undefined){Calcular_Octavos_Equipo_G1=Empate_Tecnico_G1;}else{Calcular_Octavos_Equipo_G1=Calculo_Clasificado_G1;}
	Calculando_Octavos_Equipo_G1.innerHTML=Calcular_Octavos_Equipo_G1;

//pegando al Clasificado 2 del Grupo-G en Octavos de Final

	var Calculando_Octavos_Equipo_G2;
	Calculando_Octavos_Equipo_G2=document.getElementById("Octavos_Juego_H1_vs_G2_Equipo_G2");
	
	Calcular_Octavos_Equipo_G2
	if(Calculo_Clasificado_G2=="" || Calculo_Clasificado_G2==0 || Calculo_Clasificado_G2==undefined){Calcular_Octavos_Equipo_G2=Empate_Tecnico_G2;}else{Calcular_Octavos_Equipo_G2=Calculo_Clasificado_G2;}
	Calculando_Octavos_Equipo_G2.innerHTML=Calcular_Octavos_Equipo_G2;

}

function clasificados_Grupo_H(){

//se declaran las variables de gol de cada partido del Grupo-H

	var gol_H1H2_H1=document.getElementById("Juego_H1_vs_H2_Gol_H1").value;
	var gol_H1H2_H2=document.getElementById("Juego_H1_vs_H2_Gol_H2").value;
	var gol_H1H3_H1=document.getElementById("Juego_H1_vs_H3_Gol_H1").value;
	var gol_H1H3_H3=document.getElementById("Juego_H1_vs_H3_Gol_H3").value;
	var gol_H1H4_H1=document.getElementById("Juego_H1_vs_H4_Gol_H1").value;
	var gol_H1H4_H4=document.getElementById("Juego_H1_vs_H4_Gol_H4").value;
	var gol_H2H3_H2=document.getElementById("Juego_H2_vs_H3_Gol_H2").value;
	var gol_H2H3_H3=document.getElementById("Juego_H2_vs_H3_Gol_H3").value;
	var gol_H2H4_H2=document.getElementById("Juego_H2_vs_H4_Gol_H2").value;
	var gol_H2H4_H4=document.getElementById("Juego_H2_vs_H4_Gol_H4").value;
	var gol_H3H4_H3=document.getElementById("Juego_H3_vs_H4_Gol_H3").value;
	var gol_H3H4_H4=document.getElementById("Juego_H3_vs_H4_Gol_H4").value;

//Cálculo de puntos del equipo 1 del Grupo-H

	var Puntos_de_H1_en_H1H2;
	if(gol_H1H2_H1>gol_H1H2_H2){Puntos_de_H1_en_H1H2=3;}
	if(gol_H1H2_H1==gol_H1H2_H2){Puntos_de_H1_en_H1H2=1;}
	if(gol_H1H2_H1<gol_H1H2_H2){Puntos_de_H1_en_H1H2=0;}
	var Puntos_de_H1_en_H1H3;
	if(gol_H1H3_H1>gol_H1H3_H3){Puntos_de_H1_en_H1H3=3;}
	if(gol_H1H3_H1==gol_H1H3_H3){Puntos_de_H1_en_H1H3=1;}
	if(gol_H1H3_H1<gol_H1H3_H3){Puntos_de_H1_en_H1H3=0;}
	var Puntos_de_H1_en_H1H4;
	if(gol_H1H4_H1>gol_H1H4_H4){Puntos_de_H1_en_H1H4=3;}
	if(gol_H1H4_H1==gol_H1H4_H4){Puntos_de_H1_en_H1H4=1;}
	if(gol_H1H4_H1<gol_H1H4_H4){Puntos_de_H1_en_H1H4=0;}

	var Gol_Average_de_H1;
	Gol_Average_de_H1=0.001*(parseInt(gol_H1H2_H1)+parseInt(gol_H1H3_H1)+parseInt(gol_H1H4_H1)-parseInt(gol_H1H2_H2)-parseInt(gol_H1H3_H3)-parseInt(gol_H1H4_H4));

	var Gol_Afavor_de_H1;
	Gol_Afavor_de_H1=0.00001*(parseInt(gol_H1H2_H1)+parseInt(gol_H1H3_H1)+parseInt(gol_H1H4_H1));

	var Total_Puntos_de_H1;
	Total_Puntos_de_H1=Puntos_de_H1_en_H1H2+Puntos_de_H1_en_H1H3+Puntos_de_H1_en_H1H4+Gol_Average_de_H1+Gol_Afavor_de_H1;

	var Gran_Total_de_H1;
	if(Total_Puntos_de_H1==Total_Puntos_de_H2){Gran_Total_de_H1=Total_Puntos_de_H1+0.0000001*(Puntos_de_H1_en_H1H2-Puntos_de_H2_en_H1H2)+0.000000001*(parseInt(gol_H1H2_H1)-parseInt(gol_H1H2_H2))+0.00000000001*(parseInt(gol_H1H2_H1))}
	if(Total_Puntos_de_H1==Total_Puntos_de_H3){Gran_Total_de_H1=Total_Puntos_de_H1+0.0000001*(Puntos_de_H1_en_H1H3-Puntos_de_H3_en_H1H3)+0.000000001*(parseInt(gol_H1H3_H1)-parseInt(gol_H1H3_H3))+0.00000000001*(parseInt(gol_H1H3_H1))}
	if(Total_Puntos_de_H1==Total_Puntos_de_H4){Gran_Total_de_H1=Total_Puntos_de_H1+0.0000001*(Puntos_de_H1_en_H1H4-Puntos_de_H4_en_H1H4)+0.000000001*(parseInt(gol_H1H4_H1)-parseInt(gol_H1H4_H4))+0.00000000001*(parseInt(gol_H1H4_H1))}
	else{Gran_Total_de_H1=Total_Puntos_de_H1}

//pegando los puntos del equipo 1 del Grupo-H en donde corresponde
	
	var Grupo_H_Equipo_1_Puntos;
	Grupo_H_Equipo_1_Puntos=document.getElementById("Grupo_H_Equipo_1_Puntos");
	Grupo_H_Equipo_1_Puntos.innerHTML=Math.round(Gran_Total_de_H1);

//Cálculo de puntos del equipo 2 del Grupo-H

	var Puntos_de_H2_en_H1H2;
	if(gol_H1H2_H2>gol_H1H2_H1){Puntos_de_H2_en_H1H2=3;}
	if(gol_H1H2_H2==gol_H1H2_H1){Puntos_de_H2_en_H1H2=1;}
	if(gol_H1H2_H2<gol_H1H2_H1){Puntos_de_H2_en_H1H2=0;}
	var Puntos_de_H2_en_H2H3;
	if(gol_H2H3_H2>gol_H2H3_H3){Puntos_de_H2_en_H2H3=3;}
	if(gol_H2H3_H2==gol_H2H3_H3){Puntos_de_H2_en_H2H3=1;}
	if(gol_H2H3_H2<gol_H2H3_H3){Puntos_de_H2_en_H2H3=0;}
	var Puntos_de_H2_en_H2H4;
	if(gol_H2H4_H2>gol_H2H4_H4){Puntos_de_H2_en_H2H4=3;}
	if(gol_H2H4_H2==gol_H2H4_H4){Puntos_de_H2_en_H2H4=1;}
	if(gol_H2H4_H2<gol_H2H4_H4){Puntos_de_H2_en_H2H4=0;}

	var Gol_Average_de_H2;
	Gol_Average_de_H2=0.001*(parseInt(gol_H1H2_H2)+parseInt(gol_H2H3_H2)+parseInt(gol_H2H4_H2)-parseInt(gol_H1H2_H1)-parseInt(gol_H2H3_H3)-parseInt(gol_H2H4_H4));

	var Gol_Afavor_de_H2;
	Gol_Afavor_de_H2=0.00001*(parseInt(gol_H1H2_H2)+parseInt(gol_H2H3_H2)+parseInt(gol_H2H4_H2));

	var Total_Puntos_de_H2;
	Total_Puntos_de_H2=Puntos_de_H2_en_H1H2+Puntos_de_H2_en_H2H3+Puntos_de_H2_en_H2H4+Gol_Average_de_H2+Gol_Afavor_de_H2;

	var Gran_Total_de_H2;
	if(Total_Puntos_de_H2==Total_Puntos_de_H1){Gran_Total_de_H2=Total_Puntos_de_H2+0.0000001*(Puntos_de_H2_en_H1H2-Puntos_de_H1_en_H1H2)+0.000000001*(parseInt(gol_H1H2_H2)-parseInt(gol_H1H2_H1))+0.00000000001*(parseInt(gol_H1H2_H2))}
	if(Total_Puntos_de_H2==Total_Puntos_de_H3){Gran_Total_de_H2=Total_Puntos_de_H2+0.0000001*(Puntos_de_H2_en_H2H3-Puntos_de_H3_en_H2H3)+0.000000001*(parseInt(gol_H2H3_H2)-parseInt(gol_H2H3_H3))+0.00000000001*(parseInt(gol_H2H3_H2))}
	if(Total_Puntos_de_H2==Total_Puntos_de_H4){Gran_Total_de_H2=Total_Puntos_de_H2+0.0000001*(Puntos_de_H2_en_H2H4-Puntos_de_H4_en_H2H4)+0.000000001*(parseInt(gol_H2H4_H2)-parseInt(gol_H2H4_H4))+0.00000000001*(parseInt(gol_H2H4_H2))}
	else{Gran_Total_de_H2=Total_Puntos_de_H2}

//pegando los puntos del equipo 2 del Grupo-H en donde corresponde
	
	var Grupo_H_Equipo_2_Puntos;
	Grupo_H_Equipo_2_Puntos=document.getElementById("Grupo_H_Equipo_2_Puntos");
	Grupo_H_Equipo_2_Puntos.innerHTML=Math.round(Gran_Total_de_H2);

//Cálculo de puntos del equipo 3 del Grupo-H

	var Puntos_de_H3_en_H1H3;
	if(gol_H1H3_H3>gol_H1H3_H1){Puntos_de_H3_en_H1H3=3;}
	if(gol_H1H3_H3==gol_H1H3_H1){Puntos_de_H3_en_H1H3=1;}
	if(gol_H1H3_H3<gol_H1H3_H1){Puntos_de_H3_en_H1H3=0;}
	var Puntos_de_H3_en_H2H3;
	if(gol_H2H3_H3>gol_H2H3_H2){Puntos_de_H3_en_H2H3=3;}
	if(gol_H2H3_H3==gol_H2H3_H2){Puntos_de_H3_en_H2H3=1;}
	if(gol_H2H3_H3<gol_H2H3_H2){Puntos_de_H3_en_H2H3=0;}
	var Puntos_de_H3_en_H3H4;
	if(gol_H3H4_H3>gol_H3H4_H4){Puntos_de_H3_en_H3H4=3;}
	if(gol_H3H4_H3==gol_H3H4_H4){Puntos_de_H3_en_H3H4=1;}
	if(gol_H3H4_H3<gol_H3H4_H4){Puntos_de_H3_en_H3H4=0;}

	var Gol_Average_de_H3;
	Gol_Average_de_H3=0.001*(parseInt(gol_H1H3_H3)+parseInt(gol_H2H3_H3)+parseInt(gol_H3H4_H3)-parseInt(gol_H1H3_H1)-parseInt(gol_H2H3_H2)-parseInt(gol_H3H4_H4));

	var Gol_Afavor_de_H3;
	Gol_Afavor_de_H3=0.00001*(parseInt(gol_H1H3_H3)+parseInt(gol_H2H3_H3)+parseInt(gol_H3H4_H3));

	var Total_Puntos_de_H3;
	Total_Puntos_de_H3=Puntos_de_H3_en_H1H3+Puntos_de_H3_en_H2H3+Puntos_de_H3_en_H3H4+Gol_Average_de_H3+Gol_Afavor_de_H3;

	var Gran_Total_de_H3;
	if(Total_Puntos_de_H3==Total_Puntos_de_H1){Gran_Total_de_H3=Total_Puntos_de_H3+0.0000001*(Puntos_de_H3_en_H1H3-Puntos_de_H1_en_H1H3)+0.000000001*(parseInt(gol_H1H3_H3)-parseInt(gol_H1H3_H1))+0.00000000001*(parseInt(gol_H1H3_H3))}
	if(Total_Puntos_de_H3==Total_Puntos_de_H2){Gran_Total_de_H3=Total_Puntos_de_H3+0.0000001*(Puntos_de_H3_en_H2H3-Puntos_de_H2_en_H2H3)+0.000000001*(parseInt(gol_H2H3_H3)-parseInt(gol_H2H3_H2))+0.00000000001*(parseInt(gol_H2H3_H3))}
	if(Total_Puntos_de_H3==Total_Puntos_de_H4){Gran_Total_de_H3=Total_Puntos_de_H3+0.0000001*(Puntos_de_H3_en_H3H4-Puntos_de_H4_en_H3H4)+0.000000001*(parseInt(gol_H3H4_H3)-parseInt(gol_H3H4_H4))+0.00000000001*(parseInt(gol_H3H4_H3))}
	else{Gran_Total_de_H3=Total_Puntos_de_H3}

//pegando los puntos del equipo 3 del Grupo-H en donde corresponde
	
	var Grupo_H_Equipo_3_Puntos;
	Grupo_H_Equipo_3_Puntos=document.getElementById("Grupo_H_Equipo_3_Puntos");
	Grupo_H_Equipo_3_Puntos.innerHTML=Math.round(Gran_Total_de_H3);

//Cálculo de puntos del equipo 4 del Grupo-H

	var Puntos_de_H4_en_H1H4;
	if(gol_H1H4_H4>gol_H1H4_H1){Puntos_de_H4_en_H1H4=3;}
	if(gol_H1H4_H4==gol_H1H4_H1){Puntos_de_H4_en_H1H4=1;}
	if(gol_H1H4_H4<gol_H1H4_H1){Puntos_de_H4_en_H1H4=0;}
	var Puntos_de_H4_en_H2H4;
	if(gol_H2H4_H4>gol_H2H4_H2){Puntos_de_H4_en_H2H4=3;}
	if(gol_H2H4_H4==gol_H2H4_H2){Puntos_de_H4_en_H2H4=1;}
	if(gol_H2H4_H4<gol_H2H4_H2){Puntos_de_H4_en_H2H4=0;}
	var Puntos_de_H4_en_H3H4;
	if(gol_H3H4_H4>gol_H3H4_H3){Puntos_de_H4_en_H3H4=3;}
	if(gol_H3H4_H4==gol_H3H4_H3){Puntos_de_H4_en_H3H4=1;}
	if(gol_H3H4_H4<gol_H3H4_H3){Puntos_de_H4_en_H3H4=0;}

	var Gol_Average_de_H4;
	Gol_Average_de_H4=0.001*(parseInt(gol_H1H4_H4)+parseInt(gol_H2H4_H4)+parseInt(gol_H3H4_H4)-parseInt(gol_H1H4_H1)-parseInt(gol_H2H4_H2)-parseInt(gol_H3H4_H3));

	var Gol_Afavor_de_H4;
	Gol_Afavor_de_H4=0.00001*(parseInt(gol_H1H4_H4)+parseInt(gol_H2H4_H4)+parseInt(gol_H3H4_H4));

	var Total_Puntos_de_H4;
	Total_Puntos_de_H4=Puntos_de_H4_en_H1H4+Puntos_de_H4_en_H2H4+Puntos_de_H4_en_H3H4+Gol_Average_de_H4+Gol_Afavor_de_H4;

	var Gran_Total_de_H4;
	if(Total_Puntos_de_H4==Total_Puntos_de_H1){Gran_Total_de_H4=Total_Puntos_de_H4+0.0000001*(Puntos_de_H4_en_H1H4-Puntos_de_H1_en_H1H4)+0.000000001*(parseInt(gol_H1H4_H4)-parseInt(gol_H1H4_H1))+0.00000000001*(parseInt(gol_H1H4_H4))}
	if(Total_Puntos_de_H4==Total_Puntos_de_H2){Gran_Total_de_H4=Total_Puntos_de_H4+0.0000001*(Puntos_de_H4_en_H2H4-Puntos_de_H2_en_H2H4)+0.000000001*(parseInt(gol_H2H4_H4)-parseInt(gol_H2H4_H2))+0.00000000001*(parseInt(gol_H2H4_H4))}
	if(Total_Puntos_de_H4==Total_Puntos_de_H3){Gran_Total_de_H4=Total_Puntos_de_H4+0.0000001*(Puntos_de_H4_en_H3H4-Puntos_de_H3_en_H3H4)+0.000000001*(parseInt(gol_H3H4_H4)-parseInt(gol_H3H4_H3))+0.00000000001*(parseInt(gol_H3H4_H4))}
	else{Gran_Total_de_H4=Total_Puntos_de_H4}

//pegando los puntos del equipo 4 del Grupo-H en donde corresponde
	
	var Grupo_H_Equipo_4_Puntos;
	Grupo_H_Equipo_4_Puntos=document.getElementById("Grupo_H_Equipo_4_Puntos");
	Grupo_H_Equipo_4_Puntos.innerHTML=Math.round(Gran_Total_de_H4);

//Calculando los ganadores del grupo H (Nuevos H1)

	var Calculo_Clasificado_H1;
	if(Gran_Total_de_H1>Gran_Total_de_H2 && Gran_Total_de_H1>Gran_Total_de_H3 && Gran_Total_de_H1>Gran_Total_de_H4){Calculo_Clasificado_H1=grupo_H1;}
	if(Gran_Total_de_H2>Gran_Total_de_H1 && Gran_Total_de_H2>Gran_Total_de_H3 && Gran_Total_de_H2>Gran_Total_de_H4){Calculo_Clasificado_H1=grupo_H2;}
	if(Gran_Total_de_H3>Gran_Total_de_H1 && Gran_Total_de_H3>Gran_Total_de_H2 && Gran_Total_de_H3>Gran_Total_de_H4){Calculo_Clasificado_H1=grupo_H3;}
	if(Gran_Total_de_H4>Gran_Total_de_H1 && Gran_Total_de_H4>Gran_Total_de_H2 && Gran_Total_de_H4>Gran_Total_de_H3){Calculo_Clasificado_H1=grupo_H4;}

//pegando al Clasificado 1 del Grupo-H
	
	var Empate_Tecnico_H1;
	Empate_Tecnico_H1=document.getElementById("desempate_H1");

	var Clasificado_H1;
	Clasificado_H1=document.getElementById("clasificado_H1");
	if(Calculo_Clasificado_H1==undefined){alert("Empate Técnico (Primer Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_H1=Empate_Tecnico_H1.value;Clasificado_H1.innerHTML=0;}
	Clasificado_H1.innerHTML=Calculo_Clasificado_H1;

//Calculando los ganadores del grupo H (Nuevos H2)

	var Calculo_Clasificado_H2;
	if(Gran_Total_de_H1<Gran_Total_de_H2 && Gran_Total_de_H1>Gran_Total_de_H3 && Gran_Total_de_H1>Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H1;}
	if(Gran_Total_de_H1>Gran_Total_de_H2 && Gran_Total_de_H1<Gran_Total_de_H3 && Gran_Total_de_H1>Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H1;}
	if(Gran_Total_de_H1>Gran_Total_de_H2 && Gran_Total_de_H1>Gran_Total_de_H3 && Gran_Total_de_H1<Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H1;}
	if(Gran_Total_de_H2<Gran_Total_de_H1 && Gran_Total_de_H2>Gran_Total_de_H3 && Gran_Total_de_H2>Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H2;}
	if(Gran_Total_de_H2>Gran_Total_de_H1 && Gran_Total_de_H2<Gran_Total_de_H3 && Gran_Total_de_H2>Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H2;}
	if(Gran_Total_de_H2>Gran_Total_de_H1 && Gran_Total_de_H2>Gran_Total_de_H3 && Gran_Total_de_H2<Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H2;}
	if(Gran_Total_de_H3<Gran_Total_de_H1 && Gran_Total_de_H3>Gran_Total_de_H2 && Gran_Total_de_H3>Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H3;}
	if(Gran_Total_de_H3>Gran_Total_de_H1 && Gran_Total_de_H3<Gran_Total_de_H2 && Gran_Total_de_H3>Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H3;}
	if(Gran_Total_de_H3>Gran_Total_de_H1 && Gran_Total_de_H3>Gran_Total_de_H2 && Gran_Total_de_H3<Gran_Total_de_H4){Calculo_Clasificado_H2=grupo_H3;}
	if(Gran_Total_de_H4<Gran_Total_de_H1 && Gran_Total_de_H4>Gran_Total_de_H2 && Gran_Total_de_H4>Gran_Total_de_H3){Calculo_Clasificado_H2=grupo_H4;}
	if(Gran_Total_de_H4>Gran_Total_de_H1 && Gran_Total_de_H4<Gran_Total_de_H2 && Gran_Total_de_H4>Gran_Total_de_H3){Calculo_Clasificado_H2=grupo_H4;}
	if(Gran_Total_de_H4>Gran_Total_de_H1 && Gran_Total_de_H4>Gran_Total_de_H2 && Gran_Total_de_H4<Gran_Total_de_H3){Calculo_Clasificado_H2=grupo_H4;}

//pegando al Clasificado 2 del Grupo-H

	var Empate_Tecnico_H2;
	Empate_Tecnico_H2=document.getElementById("desempate_H2");
	
	var Clasificado_H2;
	Clasificado_H2=document.getElementById("clasificado_H2");
	if(Calculo_Clasificado_H2==undefined){alert("Empate Técnico (Segundo Clasificado): Por favor seleccione el Equipo manualmente en las Celdas de Desempate o camCie los resultados de los partidos");Calculo_Clasificado_H2=Empate_Tecnico_H2.value;Clasificado_H2.innerHTML=0;}
	Clasificado_H2.innerHTML=Calculo_Clasificado_H2;

//pegando al Clasificado 1 del Grupo-H en Octavos de Final

	var Calculando_Octavos_Equipo_H1;
	Calculando_Octavos_Equipo_H1=document.getElementById("Octavos_Juego_H1_vs_G2_Equipo_H1");
	
	Calcular_Octavos_Equipo_H1
	if(Calculo_Clasificado_H1=="" || Calculo_Clasificado_H1==0 || Calculo_Clasificado_H1==undefined){Calcular_Octavos_Equipo_H1=Empate_Tecnico_H1;}else{Calcular_Octavos_Equipo_H1=Calculo_Clasificado_H1;}
	Calculando_Octavos_Equipo_H1.innerHTML=Calcular_Octavos_Equipo_H1;

//pegando al Clasificado 2 del Grupo-H en Octavos de Final

	var Calculando_Octavos_Equipo_H2;
	Calculando_Octavos_Equipo_H2=document.getElementById("Octavos_Juego_G1_vs_H2_Equipo_H2");
	
	Calcular_Octavos_Equipo_H2
	if(Calculo_Clasificado_H2=="" || Calculo_Clasificado_H2==0 || Calculo_Clasificado_H2==undefined){Calcular_Octavos_Equipo_H2=Empate_Tecnico_H2;}else{Calcular_Octavos_Equipo_H2=Calculo_Clasificado_H2;}
	Calculando_Octavos_Equipo_H2.innerHTML=Calcular_Octavos_Equipo_H2;

}

function clasificados_Cuartos_Final(){

//Calculando y pegando equipos de los cuartos de final "Equipo 8°1"

	Gol_Oct_A1=document.getElementById("Octavos_Juego_A1_vs_B2_Gol_A1").value;
	Gol_Oct_B2=document.getElementById("Octavos_Juego_A1_vs_B2_Gol_B2").value;

	Calcular_Cuartos_Equipo_81;
	if(Gol_Oct_A1>Gol_Oct_B2){Calcular_Cuartos_Equipo_81=Calcular_Octavos_Equipo_A1;}
	else{if(Gol_Oct_A1<Gol_Oct_B2){Calcular_Cuartos_Equipo_81=Calcular_Octavos_Equipo_B2;}
	else{if(Gol_Oct_A1==Gol_Oct_B2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_81=0;}else{alert("indefinido");};};}

	var Cuart_1_Eq_81;Cuart_1_Eq_81=document.getElementById("Cuartos_Juego_81_vs_83_Equipo_81");
	Cuart_1_Eq_81.innerHTML=Calcular_Cuartos_Equipo_81;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°2"

	Gol_Oct_B1=document.getElementById("Octavos_Juego_B1_vs_A2_Gol_B1").value;
	Gol_Oct_A2=document.getElementById("Octavos_Juego_B1_vs_A2_Gol_A2").value;

	Calcular_Cuartos_Equipo_82;
	if(Gol_Oct_B1>Gol_Oct_A2){Calcular_Cuartos_Equipo_82=Calcular_Octavos_Equipo_B1;}
	else{if(Gol_Oct_B1<Gol_Oct_A2){Calcular_Cuartos_Equipo_82=Calcular_Octavos_Equipo_A2;}
	else{if(Gol_Oct_B1==Gol_Oct_A2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_82=0;}else{alert("indefinido");};};}

	var Cuart_2_Eq_82;Cuart_2_Eq_82=document.getElementById("Cuartos_Juego_82_vs_84_Equipo_82");
	Cuart_2_Eq_82.innerHTML=Calcular_Cuartos_Equipo_82;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°3"

	Gol_Oct_C1=document.getElementById("Octavos_Juego_C1_vs_D2_Gol_C1").value;
	Gol_Oct_D2=document.getElementById("Octavos_Juego_C1_vs_D2_Gol_D2").value;

	Calcular_Cuartos_Equipo_83;
	if(Gol_Oct_C1>Gol_Oct_D2){Calcular_Cuartos_Equipo_83=Calcular_Octavos_Equipo_C1;}
	else{if(Gol_Oct_C1<Gol_Oct_D2){Calcular_Cuartos_Equipo_83=Calcular_Octavos_Equipo_D2;}
	else{if(Gol_Oct_C1==Gol_Oct_D2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_83=0;}else{alert("indefinido");};};}

	var Cuart_1_Eq_83;Cuart_1_Eq_83=document.getElementById("Cuartos_Juego_81_vs_83_Equipo_83");
	Cuart_1_Eq_83.innerHTML=Calcular_Cuartos_Equipo_83;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°4"

	Gol_Oct_D1=document.getElementById("Octavos_Juego_D1_vs_C2_Gol_D1").value;
	Gol_Oct_C2=document.getElementById("Octavos_Juego_D1_vs_C2_Gol_C2").value;

	Calcular_Cuartos_Equipo_84;
	if(Gol_Oct_D1>Gol_Oct_C2){Calcular_Cuartos_Equipo_84=Calcular_Octavos_Equipo_D1;}
	else{if(Gol_Oct_D1<Gol_Oct_C2){Calcular_Cuartos_Equipo_84=Calcular_Octavos_Equipo_C2;}
	else{if(Gol_Oct_D1==Gol_Oct_C2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_84=0;}else{alert("indefinido");};};}

	var Cuart_2_Eq_84;Cuart_2_Eq_84=document.getElementById("Cuartos_Juego_82_vs_84_Equipo_84");
	Cuart_2_Eq_84.innerHTML=Calcular_Cuartos_Equipo_84;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°5"

	Gol_Oct_E1=document.getElementById("Octavos_Juego_E1_vs_F2_Gol_E1").value;
	Gol_Oct_F2=document.getElementById("Octavos_Juego_E1_vs_F2_Gol_F2").value;

	Calcular_Cuartos_Equipo_85;
	if(Gol_Oct_E1>Gol_Oct_F2){Calcular_Cuartos_Equipo_85=Calcular_Octavos_Equipo_E1;}
	else{if(Gol_Oct_E1<Gol_Oct_F2){Calcular_Cuartos_Equipo_85=Calcular_Octavos_Equipo_F2;}
	else{if(Gol_Oct_E1==Gol_Oct_F2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_85=0;}else{alert("indefinido");};};}

	var Cuart_3_Eq_85;Cuart_3_Eq_85=document.getElementById("Cuartos_Juego_85_vs_87_Equipo_85");
	Cuart_3_Eq_85.innerHTML=Calcular_Cuartos_Equipo_85;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°6"

	Gol_Oct_F1=document.getElementById("Octavos_Juego_F1_vs_E2_Gol_F1").value;
	Gol_Oct_E2=document.getElementById("Octavos_Juego_F1_vs_E2_Gol_E2").value;

	Calcular_Cuartos_Equipo_86;
	if(Gol_Oct_F1>Gol_Oct_E2){Calcular_Cuartos_Equipo_86=Calcular_Octavos_Equipo_F1;}
	else{if(Gol_Oct_F1<Gol_Oct_E2){Calcular_Cuartos_Equipo_86=Calcular_Octavos_Equipo_E2;}
	else{if(Gol_Oct_F1==Gol_Oct_E2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_86=0;}else{alert("indefinido");};};}

	var Cuart_4_Eq_86;Cuart_4_Eq_86=document.getElementById("Cuartos_Juego_86_vs_88_Equipo_86");
	Cuart_4_Eq_86.innerHTML=Calcular_Cuartos_Equipo_86;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°7"

	Gol_Oct_G1=document.getElementById("Octavos_Juego_G1_vs_H2_Gol_G1").value;
	Gol_Oct_H2=document.getElementById("Octavos_Juego_G1_vs_H2_Gol_H2").value;

	Calcular_Cuartos_Equipo_87;
	if(Gol_Oct_G1>Gol_Oct_H2){Calcular_Cuartos_Equipo_87=Calcular_Octavos_Equipo_G1;}
	else{if(Gol_Oct_G1<Gol_Oct_H2){Calcular_Cuartos_Equipo_87=Calcular_Octavos_Equipo_H2;}
	else{if(Gol_Oct_G1==Gol_Oct_H2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_87=0;}else{alert("indefinido");};};}

	var Cuart_3_Eq_87;Cuart_3_Eq_87=document.getElementById("Cuartos_Juego_85_vs_87_Equipo_87");
	Cuart_3_Eq_87.innerHTML=Calcular_Cuartos_Equipo_87;

//Calculando y pegando equipos de los cuartos de final "Equipo 8°8"

	Gol_Oct_H1=document.getElementById("Octavos_Juego_H1_vs_G2_Gol_H1").value;
	Gol_Oct_G2=document.getElementById("Octavos_Juego_H1_vs_G2_Gol_G2").value;

	Calcular_Cuartos_Equipo_88;
	if(Gol_Oct_H1>Gol_Oct_G2){Calcular_Cuartos_Equipo_88=Calcular_Octavos_Equipo_H1;}
	else{if(Gol_Oct_H1<Gol_Oct_G2){Calcular_Cuartos_Equipo_88=Calcular_Octavos_Equipo_G2;}
	else{if(Gol_Oct_H1==Gol_Oct_G2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Cuartos_Equipo_88=0;}else{alert("indefinido");};};}

	var Cuart_4_Eq_88;Cuart_4_Eq_88=document.getElementById("Cuartos_Juego_86_vs_88_Equipo_88");
	Cuart_4_Eq_88.innerHTML=Calcular_Cuartos_Equipo_88;

}

function clasificados_SemiFinales(){
	
//Calculando y pegando equipos de las SemiFionales "Equipo 4°1"

	Gol_Cuart_81=document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value;
	Gol_Cuart_83=document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value;

	Calcular_SemiFinales_41;
	if(Gol_Cuart_81>Gol_Cuart_83){Calcular_SemiFinales_41=Calcular_Cuartos_Equipo_81;}
	else{if(Gol_Cuart_81<Gol_Cuart_83){Calcular_SemiFinales_41=Calcular_Cuartos_Equipo_83;}
	else{if(Gol_Cuart_81==Gol_Cuart_83){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_SemiFinales_41=0;}else{alert("indefinido");};};}

	var SF_1_Eq_41;SF_1_Eq_41=document.getElementById("SemiFinales_Juego_41_vs_43_Equipo_41");
	SF_1_Eq_41.innerHTML=Calcular_SemiFinales_41;

//Calculando y pegando equipos de las SemiFionales "Equipo 4°2"

	Gol_Cuart_82=document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value;
	Gol_Cuart_84=document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value;

	Calcular_SemiFinales_42;
	if(Gol_Cuart_82>Gol_Cuart_84){Calcular_SemiFinales_42=Calcular_Cuartos_Equipo_82;}
	else{if(Gol_Cuart_82<Gol_Cuart_84){Calcular_SemiFinales_42=Calcular_Cuartos_Equipo_84;}
	else{if(Gol_Cuart_82==Gol_Cuart_84){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_SemiFinales_42=0;}else{alert("indefinido");};};}

	var SF_2_Eq_42;SF_2_Eq_42=document.getElementById("SemiFinales_Juego_42_vs_44_Equipo_42");
	SF_2_Eq_42.innerHTML=Calcular_SemiFinales_42;

//Calculando y pegando equipos de las SemiFionales "Equipo 4°3"

	Gol_Cuart_85=document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value;
	Gol_Cuart_87=document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value;

	Calcular_SemiFinales_43;
	if(Gol_Cuart_85>Gol_Cuart_87){Calcular_SemiFinales_43=Calcular_Cuartos_Equipo_85;}
	else{if(Gol_Cuart_85<Gol_Cuart_87){Calcular_SemiFinales_43=Calcular_Cuartos_Equipo_87;}
	else{if(Gol_Cuart_85==Gol_Cuart_87){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_SemiFinales_43=0;}else{alert("indefinido");};};}

	var SF_1_Eq_43;SF_1_Eq_43=document.getElementById("SemiFinales_Juego_41_vs_43_Equipo_43");
	SF_1_Eq_43.innerHTML=Calcular_SemiFinales_43;

//Calculando y pegando equipos de las SemiFionales "Equipo 4°4"

	Gol_Cuart_86=document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value;
	Gol_Cuart_88=document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value;

	Calcular_SemiFinales_44;
	if(Gol_Cuart_86>Gol_Cuart_88){Calcular_SemiFinales_44=Calcular_Cuartos_Equipo_86;}
	else{if(Gol_Cuart_86<Gol_Cuart_88){Calcular_SemiFinales_44=Calcular_Cuartos_Equipo_88;}
	else{if(Gol_Cuart_86==Gol_Cuart_88){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_SemiFinales_44=0;}else{alert("indefinido");};};}

	var SF_2_Eq_44;SF_2_Eq_44=document.getElementById("SemiFinales_Juego_42_vs_44_Equipo_44");
	SF_2_Eq_44.innerHTML=Calcular_SemiFinales_44;

}

function clasificados_3_y_Final(){

//Calculando y pegando equipos del 3° Puesto "Equipo P-SF-1"

	Gol_SF_41=document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value;
	Gol_SF_43=document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value;

	Calcular_3_Puesto_SF_1;
	if(Gol_SF_41>Gol_SF_43){Calcular_3_Puesto_SF_1=Calcular_SemiFinales_43;}
	else{if(Gol_SF_41<Gol_SF_43){Calcular_3_Puesto_SF_1=Calcular_SemiFinales_41;}
	else{if(Gol_SF_41==Gol_SF_43){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_3_Puesto_SF_1=0;}else{alert("indefinido");};};}

	var P_3_Eq_SF_1;P_3_Eq_SF_1=document.getElementById("TercerLugar_Juego_P1_vs_P2_Equipo_P1");
	P_3_Eq_SF_1.innerHTML=Calcular_3_Puesto_SF_1;

//Calculando y pegando equipos del 3° Puesto "Equipo P-SF-2"

	Gol_SF_42=document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value;
	Gol_SF_44=document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value;

	Calcular_3_Puesto_SF_2;
	if(Gol_SF_42>Gol_SF_44){Calcular_3_Puesto_SF_2=Calcular_SemiFinales_44;}
	else{if(Gol_SF_42<Gol_SF_44){Calcular_3_Puesto_SF_2=Calcular_SemiFinales_42;}
	else{if(Gol_SF_42==Gol_SF_44){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_3_Puesto_SF_2=0;}else{alert("indefinido");};};}

	var P_3_Eq_SF_2;P_3_Eq_SF_2=document.getElementById("TercerLugar_Juego_P1_vs_P2_Equipo_P2");
	P_3_Eq_SF_2.innerHTML=Calcular_3_Puesto_SF_2;

//Calculando y pegando equipos del GranFinal "Equipo G-SF-1"

	Gol_SF_41=document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value;
	Gol_SF_43=document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value;

	Calcular_Gran_Final_SF_1;
	if(Gol_SF_41>Gol_SF_43){Calcular_Gran_Final_SF_1=Calcular_SemiFinales_41;}
	else{if(Gol_SF_41<Gol_SF_43){Calcular_Gran_Final_SF_1=Calcular_SemiFinales_43;}
	else{if(Gol_SF_41==Gol_SF_43){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Gran_Final_SF_1=0;}else{alert("indefinido");};};}

	var GF_Eq_SF_1;GF_Eq_SF_1=document.getElementById("GranFinal_Juego_G1_vs_G2_Equipo_G1");
	GF_Eq_SF_1.innerHTML=Calcular_Gran_Final_SF_1;

//Calculando y pegando equipos del GranFinal "Equipo G-SF-2"

	Gol_SF_42=document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value;
	Gol_SF_44=document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value;

	Calcular_Gran_Final_SF_2;
	if(Gol_SF_42>Gol_SF_44){Calcular_Gran_Final_SF_2=Calcular_SemiFinales_42;}
	else{if(Gol_SF_42<Gol_SF_44){Calcular_Gran_Final_SF_2=Calcular_SemiFinales_44;}
	else{if(Gol_SF_42==Gol_SF_44){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Gran_Final_SF_2=0;}else{alert("indefinido");};};}

	var GF_Eq_SF_2;GF_Eq_SF_2=document.getElementById("GranFinal_Juego_G1_vs_G2_Equipo_G2");
	GF_Eq_SF_2.innerHTML=Calcular_Gran_Final_SF_2;

}

function resumen_Final_y_Equipo_Goleador(){

//Calculando y pegando equipo "1°"

	Gol_GF_1=document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value;
	Gol_GF_2=document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value;

	Calcular_Resumen_Eq_1;
	if(Gol_GF_1>Gol_GF_2){Calcular_Resumen_Eq_1=Calcular_Gran_Final_SF_1;}
	else{if(Gol_GF_1<Gol_GF_2){Calcular_Resumen_Eq_1=Calcular_Gran_Final_SF_2;}
	else{if(Gol_GF_1==Gol_GF_2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Resumen_Eq_1=0;}else{alert("indefinido");};};};

	var Res_Eq_1;Res_Eq_1=document.getElementById("Primer_Lugar");
	Res_Eq_1.innerHTML=Calcular_Resumen_Eq_1;

//Calculando y pegando equipo "2°"

	Gol_GF_1=document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value;
	Gol_GF_2=document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value;

	Calcular_Resumen_Eq_2;
	if(Gol_GF_1>Gol_GF_2){Calcular_Resumen_Eq_2=Calcular_Gran_Final_SF_2;}
	else{if(Gol_GF_1<Gol_GF_2){Calcular_Resumen_Eq_2=Calcular_Gran_Final_SF_1;}
	else{if(Gol_GF_1==Gol_GF_2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Resumen_Eq_2=0;}else{alert("indefinido");};};};

	var Res_Eq_2;Res_Eq_2=document.getElementById("Segundo_Lugar");
	Res_Eq_2.innerHTML=Calcular_Resumen_Eq_2;

//Calculando y pegando equipo "3°"

	Gol_SF_1=document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value;
	Gol_SF_2=document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value;

	Calcular_Resumen_Eq_3;
	if(Gol_SF_1>Gol_SF_2){Calcular_Resumen_Eq_3=Calcular_3_Puesto_SF_1;}
	else{if(Gol_SF_1<Gol_SF_2){Calcular_Resumen_Eq_3=Calcular_3_Puesto_SF_2;}
	else{if(Gol_SF_1==Gol_SF_2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Resumen_Eq_3=0;}else{alert("indefinido");};};};

	var Res_Eq_3;Res_Eq_3=document.getElementById("Tercer_Lugar");
	Res_Eq_3.innerHTML=Calcular_Resumen_Eq_3;

//Calculando y pegando equipo "4°"

	Gol_SF_1=document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value;
	Gol_SF_2=document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value;

	Calcular_Resumen_Eq_4;
	if(Gol_SF_1>Gol_SF_2){Calcular_Resumen_Eq_4=Calcular_3_Puesto_SF_2;}
	else{if(Gol_SF_1<Gol_SF_2){Calcular_Resumen_Eq_4=Calcular_3_Puesto_SF_1;}
	else{if(Gol_SF_1==Gol_SF_2){alert("Los juegos de esta Fase no pueden quedar empatados, por favor revise y modifique los resultados de los juegos");Calcular_Resumen_Eq_4=0;}else{alert("indefinido");};};};

	var Res_Eq_4;Res_Eq_4=document.getElementById("Cuarto_Lugar");
	Res_Eq_4.innerHTML=Calcular_Resumen_Eq_4;

//Calculando los goles de cada Equipo declarando variables.

	var EG_Oct_1;
	var EG_Oct_2;
	var EG_Cua_1;
	var EG_Cua_2;
	var EG_SF_1;
	var EG_SF_2;
	var EG_3P_1;
	var EG_3P_2;
	var EG_GF_1;
	var EG_GF_2;

	var Total_Goles_grupo_A1;
	
	if(Calcular_Octavos_Equipo_A1==grupo_A1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_A1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_A2==grupo_A1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_A2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_A1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_A1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_A1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_A1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_A1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_A1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_A1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_A1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_A1=
	parseInt(document.getElementById("Juego_A1_vs_A2_Gol_A1").value)+
	parseInt(document.getElementById("Juego_A1_vs_A3_Gol_A1").value)+
	parseInt(document.getElementById("Juego_A1_vs_A4_Gol_A1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_A2;
	
	if(Calcular_Octavos_Equipo_A1==grupo_A2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_A1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_A2==grupo_A2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_A2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_A2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_A2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_A2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_A2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_A2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_A2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_A2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_A2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};

	Total_Goles_grupo_A2=
	parseInt(document.getElementById("Juego_A1_vs_A2_Gol_A2").value)+
	parseInt(document.getElementById("Juego_A2_vs_A3_Gol_A2").value)+
	parseInt(document.getElementById("Juego_A2_vs_A4_Gol_A2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_A3;
	
	if(Calcular_Octavos_Equipo_A1==grupo_A3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_A1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_A2==grupo_A3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_A2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_A3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_A3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_A3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_A3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_A3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_A3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_A3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_A3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};

	Total_Goles_grupo_A3=
	parseInt(document.getElementById("Juego_A1_vs_A3_Gol_A3").value)+
	parseInt(document.getElementById("Juego_A2_vs_A3_Gol_A3").value)+
	parseInt(document.getElementById("Juego_A3_vs_A4_Gol_A3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_A4;
	
	if(Calcular_Octavos_Equipo_A1==grupo_A4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_A1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_A2==grupo_A4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_A2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_A4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_A4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_A4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_A4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_A4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_A4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_A4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_A4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};

	Total_Goles_grupo_A4=
	parseInt(document.getElementById("Juego_A1_vs_A4_Gol_A4").value)+
	parseInt(document.getElementById("Juego_A2_vs_A4_Gol_A4").value)+
	parseInt(document.getElementById("Juego_A3_vs_A4_Gol_A4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_B1;
	
	if(Calcular_Octavos_Equipo_B2==grupo_B1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_B2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_B1==grupo_B1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_B1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_B1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_B1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_B1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_B1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_B1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_B1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_B1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_B1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_B1=
	parseInt(document.getElementById("Juego_B1_vs_B2_Gol_B1").value)+
	parseInt(document.getElementById("Juego_B1_vs_B3_Gol_B1").value)+
	parseInt(document.getElementById("Juego_B1_vs_B4_Gol_B1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_B2;
	
	if(Calcular_Octavos_Equipo_B2==grupo_B2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_B2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_B1==grupo_B2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_B1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_B2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_B2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_B2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_B2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_B2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_B2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_B2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_B2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_B2=
	parseInt(document.getElementById("Juego_B1_vs_B2_Gol_B2").value)+
	parseInt(document.getElementById("Juego_B2_vs_B3_Gol_B2").value)+
	parseInt(document.getElementById("Juego_B2_vs_B4_Gol_B2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_B3;
	
	if(Calcular_Octavos_Equipo_B2==grupo_B3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_B2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_B1==grupo_B3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_B1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_B3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_B3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_B3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_B3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_B3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_B3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_B3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_B3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_B3=
	parseInt(document.getElementById("Juego_B1_vs_B3_Gol_B3").value)+
	parseInt(document.getElementById("Juego_B2_vs_B3_Gol_B3").value)+
	parseInt(document.getElementById("Juego_B3_vs_B4_Gol_B3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_B4;
	
	if(Calcular_Octavos_Equipo_B2==grupo_B4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_A1_vs_B2_Gol_B2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_B1==grupo_B4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_B1_vs_A2_Gol_B1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_81==grupo_B4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_81").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_82==grupo_B4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_82").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_B4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_B4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_B4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_B4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_B4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_B4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_B4=
	parseInt(document.getElementById("Juego_B1_vs_B4_Gol_B4").value)+
	parseInt(document.getElementById("Juego_B2_vs_B4_Gol_B4").value)+
	parseInt(document.getElementById("Juego_B3_vs_B4_Gol_B4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_C1;
	
	if(Calcular_Octavos_Equipo_C1==grupo_C1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_C1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_C2==grupo_C1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_C2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_C1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_C1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_C1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_C1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_C1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_C1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_C1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_C1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_C1=
	parseInt(document.getElementById("Juego_C1_vs_C2_Gol_C1").value)+
	parseInt(document.getElementById("Juego_C1_vs_C3_Gol_C1").value)+
	parseInt(document.getElementById("Juego_C1_vs_C4_Gol_C1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_C2;
	
	if(Calcular_Octavos_Equipo_C1==grupo_C2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_C1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_C2==grupo_C2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_C2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_C2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_C2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_C2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_C2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_C2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_C2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_C2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_C2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_C2=
	parseInt(document.getElementById("Juego_C1_vs_C2_Gol_C2").value)+
	parseInt(document.getElementById("Juego_C2_vs_C3_Gol_C2").value)+
	parseInt(document.getElementById("Juego_C2_vs_C4_Gol_C2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_C3;
	
	if(Calcular_Octavos_Equipo_C1==grupo_C3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_C1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_C2==grupo_C3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_C2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_C3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_C3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_C3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_C3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_C3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_C3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_C3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_C3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_C3=
	parseInt(document.getElementById("Juego_C1_vs_C3_Gol_C3").value)+
	parseInt(document.getElementById("Juego_C2_vs_C3_Gol_C3").value)+
	parseInt(document.getElementById("Juego_C3_vs_C4_Gol_C3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_C4;
	
	if(Calcular_Octavos_Equipo_C1==grupo_C4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_C1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_C2==grupo_C4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_C2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_C4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_C4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_C4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_C4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_C4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_C4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_C4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_C4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_C4=
	parseInt(document.getElementById("Juego_C1_vs_C4_Gol_C4").value)+
	parseInt(document.getElementById("Juego_C2_vs_C4_Gol_C4").value)+
	parseInt(document.getElementById("Juego_C3_vs_C4_Gol_C4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_D1;
	
	if(Calcular_Octavos_Equipo_D2==grupo_D1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_D2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_D1==grupo_D1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_D1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_D1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_D1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_D1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_D1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_D1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_D1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_D1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_D1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_D1=
	parseInt(document.getElementById("Juego_D1_vs_D2_Gol_D1").value)+
	parseInt(document.getElementById("Juego_D1_vs_D3_Gol_D1").value)+
	parseInt(document.getElementById("Juego_D1_vs_D4_Gol_D1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_D2;
	
	if(Calcular_Octavos_Equipo_D2==grupo_D2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_D2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_D1==grupo_D2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_D1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_D2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_D2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_D2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_D2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_D2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_D2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_D2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_D2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_D2=
	parseInt(document.getElementById("Juego_D1_vs_D2_Gol_D2").value)+
	parseInt(document.getElementById("Juego_D2_vs_D3_Gol_D2").value)+
	parseInt(document.getElementById("Juego_D2_vs_D4_Gol_D2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_D3;
	
	if(Calcular_Octavos_Equipo_D2==grupo_D3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_D2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_D1==grupo_D3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_D1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_D3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_D3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_D3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_D3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_D3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_D3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_D3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_D3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_D3=
	parseInt(document.getElementById("Juego_D1_vs_D3_Gol_D3").value)+
	parseInt(document.getElementById("Juego_D2_vs_D3_Gol_D3").value)+
	parseInt(document.getElementById("Juego_D3_vs_D4_Gol_D3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_D4;
	
	if(Calcular_Octavos_Equipo_D2==grupo_D4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_C1_vs_D2_Gol_D2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_D1==grupo_D4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_D1_vs_C2_Gol_D1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_83==grupo_D4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_81_vs_83_Gol_83").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_84==grupo_D4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_82_vs_84_Gol_84").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_41==grupo_D4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_41").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_42==grupo_D4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_42").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_D4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_D4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_D4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_D4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_D4=
	parseInt(document.getElementById("Juego_D1_vs_D4_Gol_D4").value)+
	parseInt(document.getElementById("Juego_D2_vs_D4_Gol_D4").value)+
	parseInt(document.getElementById("Juego_D3_vs_D4_Gol_D4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_E1;
	
	if(Calcular_Octavos_Equipo_E1==grupo_E1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_E1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_E2==grupo_E1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_E2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_E1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_E1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_E1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_E1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_E1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_E1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_E1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_E1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_E1=
	parseInt(document.getElementById("Juego_E1_vs_E2_Gol_E1").value)+
	parseInt(document.getElementById("Juego_E1_vs_E3_Gol_E1").value)+
	parseInt(document.getElementById("Juego_E1_vs_E4_Gol_E1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_E2;
	
	if(Calcular_Octavos_Equipo_E1==grupo_E2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_E1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_E2==grupo_E2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_E2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_E2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_E2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_E2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_E2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_E2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_E2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_E2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_E2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_E2=
	parseInt(document.getElementById("Juego_E1_vs_E2_Gol_E2").value)+
	parseInt(document.getElementById("Juego_E2_vs_E3_Gol_E2").value)+
	parseInt(document.getElementById("Juego_E2_vs_E4_Gol_E2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_E3;
	
	if(Calcular_Octavos_Equipo_E1==grupo_E3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_E1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_E2==grupo_E3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_E2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_E3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_E3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_E3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_E3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_E3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_E3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_E3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_E3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_E3=
	parseInt(document.getElementById("Juego_E1_vs_E3_Gol_E3").value)+
	parseInt(document.getElementById("Juego_E2_vs_E3_Gol_E3").value)+
	parseInt(document.getElementById("Juego_E3_vs_E4_Gol_E3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_E4;
	
	if(Calcular_Octavos_Equipo_E1==grupo_E4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_E1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_E2==grupo_E4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_E2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_E4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_E4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_E4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_E4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_E4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_E4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_E4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_E4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_E4=
	parseInt(document.getElementById("Juego_E1_vs_E4_Gol_E4").value)+
	parseInt(document.getElementById("Juego_E2_vs_E4_Gol_E4").value)+
	parseInt(document.getElementById("Juego_E3_vs_E4_Gol_E4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_F1;
	
	if(Calcular_Octavos_Equipo_F2==grupo_F1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_F2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_F1==grupo_F1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_F1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_F1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_F1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_F1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_F1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_F1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_F1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_F1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_F1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_F1=
	parseInt(document.getElementById("Juego_F1_vs_F2_Gol_F1").value)+
	parseInt(document.getElementById("Juego_F1_vs_F3_Gol_F1").value)+
	parseInt(document.getElementById("Juego_F1_vs_F4_Gol_F1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_F2;
	
	if(Calcular_Octavos_Equipo_F2==grupo_F2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_F2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_F1==grupo_F2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_F1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_F2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_F2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_F2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_F2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_F2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_F2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_F2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_F2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_F2=
	parseInt(document.getElementById("Juego_F1_vs_F2_Gol_F2").value)+
	parseInt(document.getElementById("Juego_F2_vs_F3_Gol_F2").value)+
	parseInt(document.getElementById("Juego_F2_vs_F4_Gol_F2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_F3;
	
	if(Calcular_Octavos_Equipo_F2==grupo_F3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_F2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_F1==grupo_F3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_F1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_F3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_F3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_F3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_F3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_F3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_F3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_F3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_F3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_F3=
	parseInt(document.getElementById("Juego_F1_vs_F3_Gol_F3").value)+
	parseInt(document.getElementById("Juego_F2_vs_F3_Gol_F3").value)+
	parseInt(document.getElementById("Juego_F3_vs_F4_Gol_F3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_F4;
	
	if(Calcular_Octavos_Equipo_F2==grupo_F4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_E1_vs_F2_Gol_F2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_F1==grupo_F4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_F1_vs_E2_Gol_F1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_85==grupo_F4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_85").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_86==grupo_F4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_86").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_F4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_F4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_F4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_F4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_F4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_F4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_F4=
	parseInt(document.getElementById("Juego_F1_vs_F4_Gol_F4").value)+
	parseInt(document.getElementById("Juego_F2_vs_F4_Gol_F4").value)+
	parseInt(document.getElementById("Juego_F3_vs_F4_Gol_F4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_G1;
	
	if(Calcular_Octavos_Equipo_G1==grupo_G1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_G1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_G2==grupo_G1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_G2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_G1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_G1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_G1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_G1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_G1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_G1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_G1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_G1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_G1=
	parseInt(document.getElementById("Juego_G1_vs_G2_Gol_G1").value)+
	parseInt(document.getElementById("Juego_G1_vs_G3_Gol_G1").value)+
	parseInt(document.getElementById("Juego_G1_vs_G4_Gol_G1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_G2;
	
	if(Calcular_Octavos_Equipo_G1==grupo_G2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_G1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_G2==grupo_G2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_G2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_G2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_G2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_G2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_G2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_G2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_G2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_G2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_G2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_G2=
	parseInt(document.getElementById("Juego_G1_vs_G2_Gol_G2").value)+
	parseInt(document.getElementById("Juego_G2_vs_G3_Gol_G2").value)+
	parseInt(document.getElementById("Juego_G2_vs_G4_Gol_G2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_G3;
	
	if(Calcular_Octavos_Equipo_G1==grupo_G3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_G1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_G2==grupo_G3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_G2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_G3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_G3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_G3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_G3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_G3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_G3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_G3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_G3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_G3=
	parseInt(document.getElementById("Juego_G1_vs_G3_Gol_G3").value)+
	parseInt(document.getElementById("Juego_G2_vs_G3_Gol_G3").value)+
	parseInt(document.getElementById("Juego_G3_vs_G4_Gol_G3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_G4;
	
	if(Calcular_Octavos_Equipo_G1==grupo_G4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_G1").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_G2==grupo_G4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_G2").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_G4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_G4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_G4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_G4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_G4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_G4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_G4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_G4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_G4=
	parseInt(document.getElementById("Juego_G1_vs_G4_Gol_G4").value)+
	parseInt(document.getElementById("Juego_G2_vs_G4_Gol_G4").value)+
	parseInt(document.getElementById("Juego_G3_vs_G4_Gol_G4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_H1;
	
	if(Calcular_Octavos_Equipo_H2==grupo_H1)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_H2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_H1==grupo_H1)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_H1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_H1)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_H1)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_H1)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_H1)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_H1)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_H1)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_H1)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_H1)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_H1=
	parseInt(document.getElementById("Juego_H1_vs_H2_Gol_H1").value)+
	parseInt(document.getElementById("Juego_H1_vs_H3_Gol_H1").value)+
	parseInt(document.getElementById("Juego_H1_vs_H4_Gol_H1").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_H2;
	
	if(Calcular_Octavos_Equipo_H2==grupo_H2)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_H2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_H1==grupo_H2)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_H1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_H2)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_H2)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_H2)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_H2)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_H2)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_H2)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_H2)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_H2)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_H2=
	parseInt(document.getElementById("Juego_H1_vs_H2_Gol_H2").value)+
	parseInt(document.getElementById("Juego_H2_vs_H3_Gol_H2").value)+
	parseInt(document.getElementById("Juego_H2_vs_H4_Gol_H2").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_H3;
	
	if(Calcular_Octavos_Equipo_H2==grupo_H3)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_H2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_H1==grupo_H3)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_H1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_H3)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_H3)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_H3)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_H3)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_H3)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_H3)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_H3)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_H3)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_H3=
	parseInt(document.getElementById("Juego_H1_vs_H3_Gol_H3").value)+
	parseInt(document.getElementById("Juego_H2_vs_H3_Gol_H3").value)+
	parseInt(document.getElementById("Juego_H3_vs_H4_Gol_H3").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

	var Total_Goles_grupo_H4;
	
	if(Calcular_Octavos_Equipo_H2==grupo_H4)
	{EG_Oct_1=parseInt(document.getElementById("Octavos_Juego_G1_vs_H2_Gol_H2").value);}
	else{EG_Oct_1=0};
	if(Calcular_Octavos_Equipo_H1==grupo_H4)
	{EG_Oct_2=parseInt(document.getElementById("Octavos_Juego_H1_vs_G2_Gol_H1").value);}
	else{EG_Oct_2=0};
	if(Calcular_Cuartos_Equipo_87==grupo_H4)
	{EG_Cua_1=parseInt(document.getElementById("Cuartos_Juego_85_vs_87_Gol_87").value);}
	else{EG_Cua_1=0};
	if(Calcular_Cuartos_Equipo_88==grupo_H4)
	{EG_Cua_2=parseInt(document.getElementById("Cuartos_Juego_86_vs_88_Gol_88").value);}
	else{EG_Cua_2=0};
	if(Calcular_SemiFinales_43==grupo_H4)
	{EG_SF_1=parseInt(document.getElementById("SemiFinales_Juego_41_vs_43_Gol_43").value);}
	else{EG_SF_1=0};
	if(Calcular_SemiFinales_44==grupo_H4)
	{EG_SF_2=parseInt(document.getElementById("SemiFinales_Juego_42_vs_44_Gol_44").value);}
	else{EG_SF_2=0};
	if(Calcular_3_Puesto_SF_1==grupo_H4)
	{EG_3P_1=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P1").value);}
	else{EG_3P_1=0};
	if(Calcular_3_Puesto_SF_2==grupo_H4)
	{EG_3P_2=parseInt(document.getElementById("TercerLugar_Juego_P1_vs_P2_Gol_P2").value);}
	else{EG_3P_2=0};
	if(Calcular_Gran_Final_SF_1==grupo_H4)
	{EG_GF_1=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G1").value);}
	else{EG_GF_1=0};
	if(Calcular_Gran_Final_SF_2==grupo_H4)
	{EG_GF_2=parseInt(document.getElementById("GranFinal_Juego_G1_vs_G2_Gol_G2").value);}
	else{EG_GF_2=0};
	
	Total_Goles_grupo_H4=
	parseInt(document.getElementById("Juego_H1_vs_H4_Gol_H4").value)+
	parseInt(document.getElementById("Juego_H2_vs_H4_Gol_H4").value)+
	parseInt(document.getElementById("Juego_H3_vs_H4_Gol_H4").value)+
	EG_Oct_1+EG_Oct_2+EG_Cua_1+EG_Cua_2+EG_SF_1+
	EG_SF_2+EG_3P_1+EG_3P_2+EG_GF_1+EG_GF_2;

// Para el Goleador MEGA LUMPIA:

	Calcular_Equipo_Goleador;

	if(Total_Goles_grupo_A1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_A1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_A1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_A1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_A1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_A1;}
	else{if(Total_Goles_grupo_A2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_A2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_A2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_A2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_A2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_A2;}
	else{if(Total_Goles_grupo_A3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_A3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_A3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_A3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_A3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_A3;}	
	else{if(Total_Goles_grupo_A4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_A4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_A4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_A4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_A4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_A4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_A4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_A4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_A4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_A4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_A4;}	
	else{if(Total_Goles_grupo_B1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_B1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_B1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_B1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_B1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_B1;}
	else{if(Total_Goles_grupo_B2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_B2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_B2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_B2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_B2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_B2;}
	else{if(Total_Goles_grupo_B3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_B3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_B3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_B3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_B3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_B3;}
	else{if(Total_Goles_grupo_B4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_B4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_B4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_B4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_B4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_B4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_B4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_B4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_B4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_B4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_B4;}
	else{if(Total_Goles_grupo_C1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_C1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_C1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_C1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_C1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_C1;}
	else{if(Total_Goles_grupo_C2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_C2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_C2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_C2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_C2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_C2;}
	else{if(Total_Goles_grupo_C3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_C3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_C3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_C3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_C3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_C3;}
	else{if(Total_Goles_grupo_C4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_C4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_C4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_C4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_C4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_C4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_C4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_C4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_C4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_C4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_C4;}
	else{if(Total_Goles_grupo_D1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_D1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_D1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_D1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_D1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_D1;}
	else{if(Total_Goles_grupo_D2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_D2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_D2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_D2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_D2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_D2;}
	else{if(Total_Goles_grupo_D3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_D3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_D3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_D3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_D3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_D3;}
	else{if(Total_Goles_grupo_D4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_D4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_D4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_D4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_D4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_D4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_D4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_D4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_D4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_D4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_D4;}
	else{if(Total_Goles_grupo_E1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_E1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_E1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_E1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_E1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_E1;}
	else{if(Total_Goles_grupo_E2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_E2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_E2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_E2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_E2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_E2;}
	else{if(Total_Goles_grupo_E3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_E3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_E3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_E3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_E3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_E3;}
	else{if(Total_Goles_grupo_E4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_E4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_E4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_E4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_E4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_E4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_E4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_E4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_E4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_E4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_E4;}
	else{if(Total_Goles_grupo_F1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_F1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_F1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_F1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_F1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_F1;}
	else{if(Total_Goles_grupo_F2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_F2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_F2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_F2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_F2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_F2;}
	else{if(Total_Goles_grupo_F3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_F3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_F3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_F3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_F3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_F3;}
	else{if(Total_Goles_grupo_F4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_F4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_F4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_F4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_F4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_F4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_F4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_F4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_F4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_F4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_F4;}
	else{if(Total_Goles_grupo_G1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_G1>Total_Goles_grupo_H1
	&&Total_Goles_grupo_G1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_G1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_G1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_G1;}
	else{if(Total_Goles_grupo_G2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_G2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_G2>Total_Goles_grupo_H2
	&&Total_Goles_grupo_G2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_G2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_G2;}
	else{if(Total_Goles_grupo_G3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_G3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_G3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_G3>Total_Goles_grupo_H3
	&&Total_Goles_grupo_G3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_G3;}
	else{if(Total_Goles_grupo_G4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_G4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_G4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_G4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_G4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_G4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_G4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_G4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_G4>Total_Goles_grupo_H3
	&&Total_Goles_grupo_G4>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_G4;}
	else{if(Total_Goles_grupo_H1>Total_Goles_grupo_A1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_A2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_A3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_A4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_B1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_B2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_B3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_B4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_C1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_C2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_C3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_C4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_D1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_D2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_D3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_D4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_E1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_E2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_E3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_E4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_F1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_F2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_F3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_F4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_G1
	&&Total_Goles_grupo_H1>Total_Goles_grupo_G2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_G3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_G4
	&&Total_Goles_grupo_H1>Total_Goles_grupo_H2
	&&Total_Goles_grupo_H1>Total_Goles_grupo_H3
	&&Total_Goles_grupo_H1>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_H1;}
	else{if(Total_Goles_grupo_H2>Total_Goles_grupo_A1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_A2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_A3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_A4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_B1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_B2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_B3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_B4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_C1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_C2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_C3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_C4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_D1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_D2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_D3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_D4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_E1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_E2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_E3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_E4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_F1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_F2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_F3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_F4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_G1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_G2
	&&Total_Goles_grupo_H2>Total_Goles_grupo_G3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_G4
	&&Total_Goles_grupo_H2>Total_Goles_grupo_H1
	&&Total_Goles_grupo_H2>Total_Goles_grupo_H3
	&&Total_Goles_grupo_H2>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_H2;}
	else{if(Total_Goles_grupo_H3>Total_Goles_grupo_A1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_A2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_A3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_A4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_B1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_B2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_B3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_B4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_C1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_C2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_C3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_C4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_D1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_D2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_D3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_D4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_E1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_E2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_E3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_E4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_F1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_F2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_F3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_F4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_G1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_G2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_G3
	&&Total_Goles_grupo_H3>Total_Goles_grupo_G4
	&&Total_Goles_grupo_H3>Total_Goles_grupo_H1
	&&Total_Goles_grupo_H3>Total_Goles_grupo_H2
	&&Total_Goles_grupo_H3>Total_Goles_grupo_H4){Calcular_Equipo_Goleador=grupo_H3;}
	else{if(Total_Goles_grupo_H4>Total_Goles_grupo_A1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_A2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_A3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_A4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_B1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_B2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_B3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_B4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_C1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_C2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_C3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_C4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_D1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_D2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_D3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_D4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_E1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_E2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_E3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_E4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_F1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_F2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_F3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_F4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_G1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_G2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_G3
	&&Total_Goles_grupo_H4>Total_Goles_grupo_G4
	&&Total_Goles_grupo_H4>Total_Goles_grupo_H1
	&&Total_Goles_grupo_H4>Total_Goles_grupo_H2
	&&Total_Goles_grupo_H4>Total_Goles_grupo_H3){Calcular_Equipo_Goleador=grupo_H4;}
	else{Calcular_Equipo_Goleador="Empate";alert("Hay un empate en la cantida de goles de dos o más equipos para el máximo equipo Goleador del Torneo, por favor cambie el resultado de alguno de los juegos para desempatar.");};};};};};};};};};};};};};};};};};};};};};};};};};};};};};};};};

	var Mostrar_Equipo_Goleador;
	Mostrar_Equipo_Goleador=document.getElementById("Equipo_Goleador");
	Mostrar_Equipo_Goleador.innerHTML=Calcular_Equipo_Goleador;

}

window.addEventListener("load",iniciar,false);


</script>
	<script src="jquery-1.10.2.js"></script>
	<script>
        /* Array con las imagenes que se iran mostrando en la web*/
        var imagenes_01=new Array(
			'IMAGENES2/BALON01.png',
			'IMAGENES2/BALON02.png',
			'IMAGENES2/BALON03.png',
			'IMAGENES2/BALON04.png',
			'IMAGENES2/BALON05.png',
			'IMAGENES2/BALON06.png',
			'IMAGENES2/BALON07.png',
			'IMAGENES2/BALON08.png',
			'IMAGENES2/BALON09.png',
			'IMAGENES2/BALON10.png',
			'IMAGENES2/BALON11.png',
			'IMAGENES2/BALON12.png',
			'IMAGENES2/BALON13.png',
			'IMAGENES2/BALON14.png',
			'IMAGENES2/BALON15.png',
			'IMAGENES2/BALON16.png',
			'IMAGENES2/BALON17.png',
			'IMAGENES2/BALON18.png',
			'IMAGENES2/BALON19.png',
			'IMAGENES2/BALON20.png'
		);
        var imagenes_02=new Array(
			'IMAGENES2/BANDERAS.png',
			'IMAGENES2/BANDERASPEQUENAS.png',
			'IMAGENES2/CONFEDERACION01.png',
			'IMAGENES2/CONFEDERACION02.png',
			'IMAGENES2/CONFEDERACION03.png',
			'IMAGENES2/CONFEDERACION04.png',
			'IMAGENES2/CONFEDERACION05.png',
			'IMAGENES2/CONFEDERACION06.png',
			'IMAGENES2/CONFEDERACIONESTODAS.png'
		);
        var imagenes_03=new Array(
			'IMAGENES2/CAMPEONES01.png',
			'IMAGENES2/CAMPEONES02.png',
			'IMAGENES2/CAMPEONES03.png',
			'IMAGENES2/CAMPEONES04.png',
			'IMAGENES2/CAMPEONES05.png',
			'IMAGENES2/CAMPEONES06.png',
			'IMAGENES2/CAMPEONES07.png',
			'IMAGENES2/CAMPEONES08.png',
			'IMAGENES2/CAMPEONES09.png',
			'IMAGENES2/CAMPEONES10.png',
			'IMAGENES2/CAMPEONES11.png',
			'IMAGENES2/CAMPEONES12.png',
			'IMAGENES2/CAMPEONES13.png',
			'IMAGENES2/CAMPEONES14.png',
			'IMAGENES2/CAMPEONES15.png',
			'IMAGENES2/CAMPEONES16.png',
			'IMAGENES2/CAMPEONES17.png',
			'IMAGENES2/CAMPEONES18.png',
			'IMAGENES2/CAMPEONES19.png',
			'IMAGENES2/CAMPEONES20.png'
		);
        var imagenes_04=new Array(
			'IMAGENES2/ESTADIO01.png',
			'IMAGENES2/ESTADIO02.png',
			'IMAGENES2/ESTADIO03.png',
			'IMAGENES2/ESTADIO04.png',
			'IMAGENES2/ESTADIO05.png',
			'IMAGENES2/ESTADIO06.png',
			'IMAGENES2/ESTADIO07.png',
			'IMAGENES2/ESTADIO08.png',
			'IMAGENES2/ESTADIO09.png',
			'IMAGENES2/ESTADIO10.png',
			'IMAGENES2/ESTADIO11.png',
			'IMAGENES2/ESTADIO12.png',
			'IMAGENES2/ESTADIO13.png',
			'IMAGENES2/ESTADIO14.png',
			'IMAGENES2/ESTADIO15.png',
			'IMAGENES2/ESTADIO16.png',
			'IMAGENES2/ESTADIO17.png',
			'IMAGENES2/ESTADIO18.png',
			'IMAGENES2/ESTADIO19.png',
			'IMAGENES2/ESTADIO20.png'
		);
        var imagenes_05=new Array(
			'IMAGENES2/LOGO1.png',
			'IMAGENES2/LOGOS001.png',
			'IMAGENES2/LOGOS002.png',
			'IMAGENES2/LOGOS003.png',
			'IMAGENES2/LOGOS004.png',
			'IMAGENES2/LOGOS005.png',
			'IMAGENES2/LOGOS006.png',
			'IMAGENES2/LOGOS007.png',
			'IMAGENES2/LOGOS008.png',
			'IMAGENES2/LOGOS009.png',
			'IMAGENES2/LOGOS010.png',
			'IMAGENES2/LOGOS011.png',
			'IMAGENES2/LOGOS012.png',
			'IMAGENES2/LOGOS013.png',
			'IMAGENES2/LOGOS014.png',
			'IMAGENES2/LOGOS015.png',
			'IMAGENES2/LOGOS016.png',
			'IMAGENES2/LOGOS017.png',
			'IMAGENES2/LOGOS018.png',
			'IMAGENES2/LOGOS019.png',
			'IMAGENES2/LOGOS020.png',
			'IMAGENES2/LOGOSTODOS.png'
		);
        var imagenes_06=new Array(
			'IMAGENES2/MEJORESEQUIPOS01.png',
			'IMAGENES2/MEJORESEQUIPOS02.png',
			'IMAGENES2/MEJORESEQUIPOS03.png',
			'IMAGENES2/MEJORESEQUIPOS04.png',
			'IMAGENES2/MEJORESEQUIPOS05.png',
			'IMAGENES2/MEJORESEQUIPOS06.png',
			'IMAGENES2/MEJORESEQUIPOS07.png',
			'IMAGENES2/MEJORESEQUIPOS08.png',
			'IMAGENES2/MEJORESEQUIPOS09.png',
			'IMAGENES2/MEJORESEQUIPOS10.png',
			'IMAGENES2/MEJORESEQUIPOS11.png',
			'IMAGENES2/MEJORESEQUIPOS12.png',
			'IMAGENES2/MEJORESEQUIPOS13.png',
			'IMAGENES2/MEJORESEQUIPOS14.png',
			'IMAGENES2/MEJORESEQUIPOS15.png',
			'IMAGENES2/MEJORESEQUIPOS16.png',
			'IMAGENES2/MEJORESEQUIPOS17.png',
			'IMAGENES2/MEJORESEQUIPOS18.png',
			'IMAGENES2/MEJORESEQUIPOS19.png',
			'IMAGENES2/MEJORESEQUIPOS20.png'
		);
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto01(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen01").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_01.length));
            // cambiamos la imagen
            document.getElementById("imagen01").src=imagenes_01[index];
            // aparece la imagen
            $("#imagen01").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto02(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen02").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_02.length));
            // cambiamos la imagen
            document.getElementById("imagen02").src=imagenes_02[index];
            // aparece la imagen
            $("#imagen02").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto03(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen03").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_03.length));
            // cambiamos la imagen
            document.getElementById("imagen03").src=imagenes_03[index];
            // aparece la imagen
            $("#imagen03").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto04(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen04").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_04.length));
            // cambiamos la imagen
            document.getElementById("imagen04").src=imagenes_04[index];
            // aparece la imagen
            $("#imagen04").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto05(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen05").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_05.length));
            // cambiamos la imagen
            document.getElementById("imagen05").src=imagenes_05[index];
            // aparece la imagen
            $("#imagen05").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto06(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen06").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_06.length));
            // cambiamos la imagen
            document.getElementById("imagen06").src=imagenes_06[index];
            // aparece la imagen
            $("#imagen06").fadeOut(1000);
        }

        /*Función que se ejecuta una vez cargada la página*/
        onload=function(){
            // Indicamos que cada 5 segundos cambie la imagen
            setInterval(CambiarImagenConEfecto01,3800);
            setInterval(CambiarImagenConEfecto02,3600);
            setInterval(CambiarImagenConEfecto03,3900);
            setInterval(CambiarImagenConEfecto04,3850);
            setInterval(CambiarImagenConEfecto05,3650);
            setInterval(CambiarImagenConEfecto06,3950);
        }
    </script>



</head>

<body>

<body>

<aside>
  <figure>
  <img src="IMAGENES/LOGO1.jpg" width="164" height="261">
  </figure>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/LOGOSTODOS.png" id="imagen05"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/BANDERAS.png" id="imagen02"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/CAMPEONES01.png" id="imagen03"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/BALON01.png" id="imagen01"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/ESTADIO01.png" id="imagen04"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/MEJORESEQUIPOS01.png" id="imagen06"></div>
</aside>


<header>
  <h1>Quiniela RUSIA-2018</h1>
</header>

<nav>
<div id="usuario">Bienvenido a la zona de Nuevos Usuarios&nbsp;&nbsp;&nbsp;</div>
<div>
<blockquote><a href="QMF2016_Salir.php">Salir</a></blockquote>
<blockquote><a href="QMF2016_Instructivo_Nuevo_Usuario.php">Instrucciones</a></blockquote>
</div>
</nav>

<section>

<form name="quiniela_usuario" id="quiniela_usuario" method="post" action="QMF2016_registra_usuario.php">

<table style="margin-left:10px">
<br>
	<h3 style="margin-left:100px">Antes de llenar estos datos lea las siguientes <a href="QMF2016_Instructivo_Nuevo_Usuario.php">"Instrucciones"</a></h3>
	
	<tr>
		<td>Usuario:</td>
		<td><input style="width:150px; text-align:left;" type="text" name="nombre_usuario" id="nombre_usuario" required></td>
		<td>Email:</td>
		<td><input style="width:150px; text-align:left;" type="text" name="email_usuario" id="email_usuario" required></td>
		<td>Confirmar Email:</td>
		<td><input style="width:150px; text-align:left;" type="text" name="email_usuario_corr" id="email_usuario_corr" required></td>
	</tr>
	
    <tr>
		<td>Código Inicio</td>
		<td><input style="width:150px; text-align:left;" type="text" name="codigo_inicio" id="codigo_inicio" required></td>
		<td>Contraseña:</td>
		<td><input style="width:150px; text-align:left;" type="password" name="contrasena_usuario" id="contrasena_usuario" required></td>
		<td style="width:130px">Confirmar Contraseña:</td>
		<td><input style="width:150px; text-align:left;" type="password" name="contrasena_usuario_corr" id="contrasena_usuario_corr" required></td>
    </tr>
    
</table>

<table style="background-color:#F4F4F4; margin-left:45px">

<td>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "A" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_A1_vs_A2_Equipo_A1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A1_vs_A2_Gol_A1" name="Juego_A1_vs_A2_Gol_A1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A1_vs_A2_Gol_A2" name="Juego_A1_vs_A2_Gol_A2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_A1_vs_A2_Equipo_A2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_A1_vs_A3_Equipo_A1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A1_vs_A3_Gol_A1" name="Juego_A1_vs_A3_Gol_A1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A1_vs_A3_Gol_A3" name="Juego_A1_vs_A3_Gol_A3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_A1_vs_A3_Equipo_A3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_A1_vs_A4_Equipo_A1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A1_vs_A4_Gol_A1" name="Juego_A1_vs_A4_Gol_A1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A1_vs_A4_Gol_A4" name="Juego_A1_vs_A4_Gol_A4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_A1_vs_A4_Equipo_A4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_A2_vs_A3_Equipo_A2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A2_vs_A3_Gol_A2" name="Juego_A2_vs_A3_Gol_A2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A2_vs_A3_Gol_A3" name="Juego_A2_vs_A3_Gol_A3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_A2_vs_A3_Equipo_A3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_A2_vs_A4_Equipo_A2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A2_vs_A4_Gol_A2" name="Juego_A2_vs_A4_Gol_A2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A2_vs_A4_Gol_A4" name="Juego_A2_vs_A4_Gol_A4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_A2_vs_A4_Equipo_A4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_A3_vs_A4_Equipo_A3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A3_vs_A4_Gol_A3" name="Juego_A3_vs_A4_Gol_A3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_A3_vs_A4_Gol_A4" name="Juego_A3_vs_A4_Gol_A4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_A3_vs_A4_Equipo_A4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_A" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_A_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_A_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_A_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_A_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_A_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_A_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_A_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_A_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"A1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"A2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"A1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"A2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_A1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_A2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_A1" name="desempate_A1" style="width:35px;" list="Equipos_Grupo_A">
            <datalist id="Equipos_Grupo_A">
			<option value="<?php echo "$equipo_A1"; ?>">
			<option value="<?php echo "$equipo_A2"; ?>">
			<option value="<?php echo "$equipo_A3"; ?>">
            <option value="<?php echo "$equipo_A4"; ?>">
			</datalist>            
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_A2" name="desempate_A2" style="width:35px;" list="Equipos_Grupo_A">
            <datalist id="Equipos_Grupo_A">
			<option value="<?php echo "$equipo_A1"; ?>">
			<option value="<?php echo "$equipo_A2"; ?>">
			<option value="<?php echo "$equipo_A3"; ?>">
            <option value="<?php echo "$equipo_A4"; ?>">
			</datalist>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "B" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_B1_vs_B2_Equipo_B1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B1_vs_B2_Gol_B1" name="Juego_B1_vs_B2_Gol_B1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B1_vs_B2_Gol_B2" name="Juego_B1_vs_B2_Gol_B2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_B1_vs_B2_Equipo_B2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_B1_vs_B3_Equipo_B1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B1_vs_B3_Gol_B1" name="Juego_B1_vs_B3_Gol_B1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B1_vs_B3_Gol_B3" name="Juego_B1_vs_B3_Gol_B3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_B1_vs_B3_Equipo_B3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_B1_vs_B4_Equipo_B1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B1_vs_B4_Gol_B1" name="Juego_B1_vs_B4_Gol_B1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B1_vs_B4_Gol_B4" name="Juego_B1_vs_B4_Gol_B4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_B1_vs_B4_Equipo_B4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_B2_vs_B3_Equipo_B2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B2_vs_B3_Gol_B2" name="Juego_B2_vs_B3_Gol_B2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B2_vs_B3_Gol_B3" name="Juego_B2_vs_B3_Gol_B3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_B2_vs_B3_Equipo_B3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_B2_vs_B4_Equipo_B2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B2_vs_B4_Gol_B2" name="Juego_B2_vs_B4_Gol_B2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B2_vs_B4_Gol_B4" name="Juego_B2_vs_B4_Gol_B4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_B2_vs_B4_Equipo_B4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_B3_vs_B4_Equipo_B3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B3_vs_B4_Gol_B3" name="Juego_B3_vs_B4_Gol_B3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_B3_vs_B4_Gol_B4" name="Juego_B3_vs_B4_Gol_B4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_B3_vs_B4_Equipo_B4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_B" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_B_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_B_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_B_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_B_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_B_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_B_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_B_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_B_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"B1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"B2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"B1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"B2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_B1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_B2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_B1" name="desempate_B1" style="width:35px;" list="Equipos_Grupo_B">
            <datalist id="Equipos_Grupo_B">
			<option value="<?php echo "$equipo_B1"; ?>">
			<option value="<?php echo "$equipo_B2"; ?>">
			<option value="<?php echo "$equipo_B3"; ?>">
            <option value="<?php echo "$equipo_B4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_B2" name="desempate_B2" style="width:35px;" list="Equipos_Grupo_B">
            <datalist id="Equipos_Grupo_B">
			<option value="<?php echo "$equipo_B1"; ?>">
			<option value="<?php echo "$equipo_B2"; ?>">
			<option value="<?php echo "$equipo_B3"; ?>">
            <option value="<?php echo "$equipo_B4"; ?>">
			</datalist> 
            </td>
        </tr>
    </table>
    
    <table>
        <tr>
            <td colspan="4"><strong>Grupo "C" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_C1_vs_C2_Equipo_C1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C1_vs_C2_Gol_C1" name="Juego_C1_vs_C2_Gol_C1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C1_vs_C2_Gol_C2" name="Juego_C1_vs_C2_Gol_C2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_C1_vs_C2_Equipo_C2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_C1_vs_C3_Equipo_C1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C1_vs_C3_Gol_C1" name="Juego_C1_vs_C3_Gol_C1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C1_vs_C3_Gol_C3" name="Juego_C1_vs_C3_Gol_C3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_C1_vs_C3_Equipo_C3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_C1_vs_C4_Equipo_C1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C1_vs_C4_Gol_C1" name="Juego_C1_vs_C4_Gol_C1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C1_vs_C4_Gol_C4" name="Juego_C1_vs_C4_Gol_C4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_C1_vs_C4_Equipo_C4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_C2_vs_C3_Equipo_C2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C2_vs_C3_Gol_C2" name="Juego_C2_vs_C3_Gol_C2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C2_vs_C3_Gol_C3" name="Juego_C2_vs_C3_Gol_C3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_C2_vs_C3_Equipo_C3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_C2_vs_C4_Equipo_C2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C2_vs_C4_Gol_C2" name="Juego_C2_vs_C4_Gol_C2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C2_vs_C4_Gol_C4" name="Juego_C2_vs_C4_Gol_C4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_C2_vs_C4_Equipo_C4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_C3_vs_C4_Equipo_C3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C3_vs_C4_Gol_C3" name="Juego_C3_vs_C4_Gol_C3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_C3_vs_C4_Gol_C4" name="Juego_C3_vs_C4_Gol_C4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_C3_vs_C4_Equipo_C4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_C" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_C_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_C_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_C_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_C_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_C_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_C_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_C_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_C_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"C1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"C2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"C1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"C2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_C1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_C2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_C1" name="desempate_C1" style="width:35px;" list="Equipos_Grupo_C">
            <datalist id="Equipos_Grupo_C">
			<option value="<?php echo "$equipo_C1"; ?>">
			<option value="<?php echo "$equipo_C2"; ?>">
			<option value="<?php echo "$equipo_C3"; ?>">
            <option value="<?php echo "$equipo_C4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_C2" name="desempate_C2" style="width:35px;" list="Equipos_Grupo_C">
            <datalist id="Equipos_Grupo_C">
			<option value="<?php echo "$equipo_C1"; ?>">
			<option value="<?php echo "$equipo_C2"; ?>">
			<option value="<?php echo "$equipo_C3"; ?>">
            <option value="<?php echo "$equipo_C4"; ?>">
			</datalist> 
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "D" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_D1_vs_D2_Equipo_D1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D1_vs_D2_Gol_D1" name="Juego_D1_vs_D2_Gol_D1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D1_vs_D2_Gol_D2" name="Juego_D1_vs_D2_Gol_D2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_D1_vs_D2_Equipo_D2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_D1_vs_D3_Equipo_D1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D1_vs_D3_Gol_D1" name="Juego_D1_vs_D3_Gol_D1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D1_vs_D3_Gol_D3" name="Juego_D1_vs_D3_Gol_D3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_D1_vs_D3_Equipo_D3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_D1_vs_D4_Equipo_D1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D1_vs_D4_Gol_D1" name="Juego_D1_vs_D4_Gol_D1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D1_vs_D4_Gol_D4" name="Juego_D1_vs_D4_Gol_D4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_D1_vs_D4_Equipo_D4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_D2_vs_D3_Equipo_D2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D2_vs_D3_Gol_D2" name="Juego_D2_vs_D3_Gol_D2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D2_vs_D3_Gol_D3" name="Juego_D2_vs_D3_Gol_D3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_D2_vs_D3_Equipo_D3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_D2_vs_D4_Equipo_D2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D2_vs_D4_Gol_D2" name="Juego_D2_vs_D4_Gol_D2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D2_vs_D4_Gol_D4" name="Juego_D2_vs_D4_Gol_D4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_D2_vs_D4_Equipo_D4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_D3_vs_D4_Equipo_D3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D3_vs_D4_Gol_D3" name="Juego_D3_vs_D4_Gol_D3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_D3_vs_D4_Gol_D4" name="Juego_D3_vs_D4_Gol_D4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_D3_vs_D4_Equipo_D4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_D" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_D_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_D_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_D_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_D_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_D_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_D_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_D_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_D_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"D1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"D2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"D1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"D2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_D1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_D2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_D1" name="desempate_D1" style="width:35px;" list="Equipos_Grupo_D">
            <datalist id="Equipos_Grupo_D">
			<option value="<?php echo "$equipo_D1"; ?>">
			<option value="<?php echo "$equipo_D2"; ?>">
			<option value="<?php echo "$equipo_D3"; ?>">
            <option value="<?php echo "$equipo_D4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_D2" name="desempate_D2" style="width:35px;" list="Equipos_Grupo_D">
            <datalist id="Equipos_Grupo_D">
			<option value="<?php echo "$equipo_D1"; ?>">
			<option value="<?php echo "$equipo_D2"; ?>">
			<option value="<?php echo "$equipo_D3"; ?>">
            <option value="<?php echo "$equipo_D4"; ?>">
			</datalist>
            </td>
        </tr>
    </table>
    
</td>

<td>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "E" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_E1_vs_E2_Equipo_E1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E1_vs_E2_Gol_E1" name="Juego_E1_vs_E2_Gol_E1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E1_vs_E2_Gol_E2" name="Juego_E1_vs_E2_Gol_E2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_E1_vs_E2_Equipo_E2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_E1_vs_E3_Equipo_E1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E1_vs_E3_Gol_E1" name="Juego_E1_vs_E3_Gol_E1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E1_vs_E3_Gol_E3" name="Juego_E1_vs_E3_Gol_E3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_E1_vs_E3_Equipo_E3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_E1_vs_E4_Equipo_E1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E1_vs_E4_Gol_E1" name="Juego_E1_vs_E4_Gol_E1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E1_vs_E4_Gol_E4" name="Juego_E1_vs_E4_Gol_E4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_E1_vs_E4_Equipo_E4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_E2_vs_E3_Equipo_E2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E2_vs_E3_Gol_E2" name="Juego_E2_vs_E3_Gol_E2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E2_vs_E3_Gol_E3" name="Juego_E2_vs_E3_Gol_E3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_E2_vs_E3_Equipo_E3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_E2_vs_E4_Equipo_E2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E2_vs_E4_Gol_E2" name="Juego_E2_vs_E4_Gol_E2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E2_vs_E4_Gol_E4" name="Juego_E2_vs_E4_Gol_E4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_E2_vs_E4_Equipo_E4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_E3_vs_E4_Equipo_E3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E3_vs_E4_Gol_E3" name="Juego_E3_vs_E4_Gol_E3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_E3_vs_E4_Gol_E4" name="Juego_E3_vs_E4_Gol_E4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_E3_vs_E4_Equipo_E4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_E" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_E_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_E_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_E_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_E_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_E_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_E_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_E_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_E_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"E1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"E2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"E1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"E2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_E1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_E2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_E1" name="desempate_E1" style="width:35px;" list="Equipos_Grupo_E">
            <datalist id="Equipos_Grupo_E">
			<option value="<?php echo "$equipo_E1"; ?>">
			<option value="<?php echo "$equipo_E2"; ?>">
			<option value="<?php echo "$equipo_E3"; ?>">
            <option value="<?php echo "$equipo_E4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_E2" name="desempate_E2" style="width:35px;" list="Equipos_Grupo_E">
            <datalist id="Equipos_Grupo_E">
			<option value="<?php echo "$equipo_E1"; ?>">
			<option value="<?php echo "$equipo_E2"; ?>">
			<option value="<?php echo "$equipo_E3"; ?>">
            <option value="<?php echo "$equipo_E4"; ?>">
			</datalist> 
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "F" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_F1_vs_F2_Equipo_F1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F1_vs_F2_Gol_F1" name="Juego_F1_vs_F2_Gol_F1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F1_vs_F2_Gol_F2" name="Juego_F1_vs_F2_Gol_F2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_F1_vs_F2_Equipo_F2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_F1_vs_F3_Equipo_F1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F1_vs_F3_Gol_F1" name="Juego_F1_vs_F3_Gol_F1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F1_vs_F3_Gol_F3" name="Juego_F1_vs_F3_Gol_F3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_F1_vs_F3_Equipo_F3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_F1_vs_F4_Equipo_F1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F1_vs_F4_Gol_F1" name="Juego_F1_vs_F4_Gol_F1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F1_vs_F4_Gol_F4" name="Juego_F1_vs_F4_Gol_F4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_F1_vs_F4_Equipo_F4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_F2_vs_F3_Equipo_F2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F2_vs_F3_Gol_F2" name="Juego_F2_vs_F3_Gol_F2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F2_vs_F3_Gol_F3" name="Juego_F2_vs_F3_Gol_F3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_F2_vs_F3_Equipo_F3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_F2_vs_F4_Equipo_F2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F2_vs_F4_Gol_F2" name="Juego_F2_vs_F4_Gol_F2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F2_vs_F4_Gol_F4" name="Juego_F2_vs_F4_Gol_F4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_F2_vs_F4_Equipo_F4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_F3_vs_F4_Equipo_F3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F3_vs_F4_Gol_F3" name="Juego_F3_vs_F4_Gol_F3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_F3_vs_F4_Gol_F4" name="Juego_F3_vs_F4_Gol_F4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_F3_vs_F4_Equipo_F4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_F" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_F_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_F_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_F_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_F_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_F_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_F_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_F_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_F_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"F1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"F2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"F1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"F2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_F1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_F2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_F1" name="desempate_F1" style="width:35px;" list="Equipos_Grupo_F">
            <datalist id="Equipos_Grupo_F">
			<option value="<?php echo "$equipo_F1"; ?>">
			<option value="<?php echo "$equipo_F2"; ?>">
			<option value="<?php echo "$equipo_F3"; ?>">
            <option value="<?php echo "$equipo_F4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_F2" name="desempate_F2" style="width:35px;" list="Equipos_Grupo_F">
            <datalist id="Equipos_Grupo_F">
			<option value="<?php echo "$equipo_F1"; ?>">
			<option value="<?php echo "$equipo_F2"; ?>">
			<option value="<?php echo "$equipo_F3"; ?>">
            <option value="<?php echo "$equipo_F4"; ?>">
			</datalist> 
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "G" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_G1_vs_G2_Equipo_G1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G1_vs_G2_Gol_G1" name="Juego_G1_vs_G2_Gol_G1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G1_vs_G2_Gol_G2" name="Juego_G1_vs_G2_Gol_G2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_G1_vs_G2_Equipo_G2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_G1_vs_G3_Equipo_G1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G1_vs_G3_Gol_G1" name="Juego_G1_vs_G3_Gol_G1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G1_vs_G3_Gol_G3" name="Juego_G1_vs_G3_Gol_G3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_G1_vs_G3_Equipo_G3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_G1_vs_G4_Equipo_G1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G1_vs_G4_Gol_G1" name="Juego_G1_vs_G4_Gol_G1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G1_vs_G4_Gol_G4" name="Juego_G1_vs_G4_Gol_G4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_G1_vs_G4_Equipo_G4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_G2_vs_G3_Equipo_G2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G2_vs_G3_Gol_G2" name="Juego_G2_vs_G3_Gol_G2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G2_vs_G3_Gol_G3" name="Juego_G2_vs_G3_Gol_G3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_G2_vs_G3_Equipo_G3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_G2_vs_G4_Equipo_G2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G2_vs_G4_Gol_G2" name="Juego_G2_vs_G4_Gol_G2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G2_vs_G4_Gol_G4" name="Juego_G2_vs_G4_Gol_G4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_G2_vs_G4_Equipo_G4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_G3_vs_G4_Equipo_G3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G3_vs_G4_Gol_G3" name="Juego_G3_vs_G4_Gol_G3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_G3_vs_G4_Gol_G4" name="Juego_G3_vs_G4_Gol_G4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_G3_vs_G4_Equipo_G4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_G" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_G_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_G_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_G_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_G_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_G_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_G_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_G_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_G_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"G1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"G2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"G1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"G2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_G1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_G2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_G1" name="desempate_G1" style="width:35px;" list="Equipos_Grupo_G">
            <datalist id="Equipos_Grupo_G">
			<option value="<?php echo "$equipo_G1"; ?>">
			<option value="<?php echo "$equipo_G2"; ?>">
			<option value="<?php echo "$equipo_G3"; ?>">
            <option value="<?php echo "$equipo_G4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_G2" name="desempate_G2" style="width:35px;" list="Equipos_Grupo_G">
            <datalist id="Equipos_Grupo_G">
			<option value="<?php echo "$equipo_G1"; ?>">
			<option value="<?php echo "$equipo_G2"; ?>">
			<option value="<?php echo "$equipo_G3"; ?>">
            <option value="<?php echo "$equipo_G4"; ?>">
			</datalist> 
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="4"><strong>Grupo "H" - 1°Ronda:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_H1_vs_H2_Equipo_H1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H1_vs_H2_Gol_H1" name="Juego_H1_vs_H2_Gol_H1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H1_vs_H2_Gol_H2" name="Juego_H1_vs_H2_Gol_H2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_H1_vs_H2_Equipo_H2"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_H1_vs_H3_Equipo_H1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H1_vs_H3_Gol_H1" name="Juego_H1_vs_H3_Gol_H1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H1_vs_H3_Gol_H3" name="Juego_H1_vs_H3_Gol_H3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_H1_vs_H3_Equipo_H3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_H1_vs_H4_Equipo_H1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H1_vs_H4_Gol_H1" name="Juego_H1_vs_H4_Gol_H1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H1_vs_H4_Gol_H4" name="Juego_H1_vs_H4_Gol_H4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_H1_vs_H4_Equipo_H4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_H2_vs_H3_Equipo_H2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H2_vs_H3_Gol_H2" name="Juego_H2_vs_H3_Gol_H2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H2_vs_H3_Gol_H3" name="Juego_H2_vs_H3_Gol_H3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_H2_vs_H3_Equipo_H3"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_H2_vs_H4_Equipo_H2"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H2_vs_H4_Gol_H2" name="Juego_H2_vs_H4_Gol_H2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H2_vs_H4_Gol_H4" name="Juego_H2_vs_H4_Gol_H4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_H2_vs_H4_Equipo_H4"></td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Juego_H3_vs_H4_Equipo_H3"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H3_vs_H4_Gol_H3" name="Juego_H3_vs_H4_Gol_H3" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Juego_H3_vs_H4_Gol_H4" name="Juego_H3_vs_H4_Gol_H4" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Juego_H3_vs_H4_Equipo_H4"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#FEFFCA"><input type="button" id="Calculando_Puntos_Grupo_H" value="Calcular Puntos del Grupo" style="width:200px"></td>
        </tr>
        <tr>
        	<td bgcolor="#FEFFCA" id="Grupo_H_Equipo_1_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_H_Equipo_2_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_H_Equipo_3_Posiciones" style="font-weight:bold"></td>
            <td bgcolor="#FEFFCA" id="Grupo_H_Equipo_4_Posiciones" style="font-weight:bold"></td>
        </tr>
        <tr>
        	<td bgcolor="#FFFFFF" id="Grupo_H_Equipo_1_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_H_Equipo_2_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_H_Equipo_3_Puntos"></td>
            <td bgcolor="#FFFFFF" id="Grupo_H_Equipo_4_Puntos"></td>
        </tr>
        <tr>
         <td colspan="2" bgcolor="#F7CED5" id="Clasificados"><strong>"Clasificados"</strong></td>
         <td colspan="2" bgcolor="#CCCCCC" id="desempate"><strong>"Desempate"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"H1"</strong></td>
            <td bgcolor="#F7CED5"><strong>"H2"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"H1"</strong></td>
            <td bgcolor="#CCCCCC"><strong>"H2"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="clasificado_H1"></td>
            <td bgcolor="#FFFFFF" id="clasificado_H2"></td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_H1" name="desempate_H1" style="width:35px;" list="Equipos_Grupo_H">
            <datalist id="Equipos_Grupo_H">
			<option value="<?php echo "$equipo_H1"; ?>">
			<option value="<?php echo "$equipo_H2"; ?>">
			<option value="<?php echo "$equipo_H3"; ?>">
            <option value="<?php echo "$equipo_H4"; ?>">
			</datalist> 
            </td>
            <td bgcolor="#CCCCCC">
            <input type="text" id="desempate_H2" name="desempate_H2" style="width:35px;" list="Equipos_Grupo_H">
            <datalist id="Equipos_Grupo_H">
			<option value="<?php echo "$equipo_H1"; ?>">
			<option value="<?php echo "$equipo_H2"; ?>">
			<option value="<?php echo "$equipo_H3"; ?>">
            <option value="<?php echo "$equipo_H4"; ?>">
			</datalist> 
            </td>
        </tr>
    </table>

</td>

<td>

    <table>
        <tr>
            <td colspan="4"><strong>Octavos de Final:</strong></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º1 ("A1" vs "B2")</td>
        </tr>
        <tr>
            <td style="width:40px; background-color:#B0DFFF;" id="Octavos_Juego_A1_vs_B2_Equipo_A1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_A1_vs_B2_Gol_A1" name="Octavos_Juego_A1_vs_B2_Gol_A1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_A1_vs_B2_Gol_B2" name="Octavos_Juego_A1_vs_B2_Gol_B2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_A1_vs_B2_Equipo_B2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º2 ("B1" vs "A2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_B1_vs_A2_Equipo_B1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_B1_vs_A2_Gol_B1" name="Octavos_Juego_B1_vs_A2_Gol_B1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_B1_vs_A2_Gol_A2" name="Octavos_Juego_B1_vs_A2_Gol_A2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_B1_vs_A2_Equipo_A2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º3 ("C1" vs "D2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_C1_vs_D2_Equipo_C1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_C1_vs_D2_Gol_C1"  name="Octavos_Juego_C1_vs_D2_Gol_C1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_C1_vs_D2_Gol_D2" name="Octavos_Juego_C1_vs_D2_Gol_D2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_C1_vs_D2_Equipo_D2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º4 (D1" vs "C2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_D1_vs_C2_Equipo_D1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_D1_vs_C2_Gol_D1" name="Octavos_Juego_D1_vs_C2_Gol_D1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_D1_vs_C2_Gol_C2" name="Octavos_Juego_D1_vs_C2_Gol_C2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_D1_vs_C2_Equipo_C2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º5 ("E1" vs "F2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_E1_vs_F2_Equipo_E1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_E1_vs_F2_Gol_E1" name="Octavos_Juego_E1_vs_F2_Gol_E1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_E1_vs_F2_Gol_F2" name="Octavos_Juego_E1_vs_F2_Gol_F2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_E1_vs_F2_Equipo_F2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º6 ("F1" vs "E2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_F1_vs_E2_Equipo_F1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_F1_vs_E2_Gol_F1" name="Octavos_Juego_F1_vs_E2_Gol_F1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_F1_vs_E2_Gol_E2" name="Octavos_Juego_F1_vs_E2_Gol_E2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_F1_vs_E2_Equipo_E2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º7 ("G1" vs "H2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_G1_vs_H2_Equipo_G1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_G1_vs_H2_Gol_G1" name="Octavos_Juego_G1_vs_H2_Gol_G1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_G1_vs_H2_Gol_H2" name="Octavos_Juego_G1_vs_H2_Gol_H2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_G1_vs_H2_Equipo_H2"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">8º8 ("H1" vs "G2")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_H1_vs_G2_Equipo_H1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_H1_vs_G2_Gol_H1" name="Octavos_Juego_H1_vs_G2_Gol_H1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Octavos_Juego_H1_vs_G2_Gol_G2" name="Octavos_Juego_H1_vs_G2_Gol_G2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Octavos_Juego_H1_vs_G2_Equipo_G2"></td>
        </tr>
        <tr>
           <td colspan="4" bgcolor="#FEFFCA">
           <input type="button" id="Calcular_Equipos_Cuartos_Final" value="Mostrar 4° de Final" style="width:200px">
           </td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="4"><strong>Cuartos de Final:</strong></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">4º1 ("8º1" vs "8º3")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_81_vs_83_Equipo_81"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_81_vs_83_Gol_81" name="Cuartos_Juego_81_vs_83_Gol_81" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_81_vs_83_Gol_83" name="Cuartos_Juego_81_vs_83_Gol_83" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_81_vs_83_Equipo_83"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">4º2 ("8º2" vs "8º4")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_82_vs_84_Equipo_82"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_82_vs_84_Gol_82" name="Cuartos_Juego_82_vs_84_Gol_82" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_82_vs_84_Gol_84" name="Cuartos_Juego_82_vs_84_Gol_84" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_82_vs_84_Equipo_84"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">4º3 ("8º5" vs "8º7")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_85_vs_87_Equipo_85"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_85_vs_87_Gol_85" name="Cuartos_Juego_85_vs_87_Gol_85" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_85_vs_87_Gol_87" name="Cuartos_Juego_85_vs_87_Gol_87" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_85_vs_87_Equipo_87"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">4º4 ("8º6" vs "8º8")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_86_vs_88_Equipo_86"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_86_vs_88_Gol_86" name="Cuartos_Juego_86_vs_88_Gol_86" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="Cuartos_Juego_86_vs_88_Gol_88" name="Cuartos_Juego_86_vs_88_Gol_88" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="Cuartos_Juego_86_vs_88_Equipo_88"></td>
        </tr>
        <tr>
           <td colspan="4" bgcolor="#FEFFCA">
           <input type="button" id="Calcular_Equipos_SemiFinales" value="Mostrar SemiFinales" style="width:200px">
           </td>
        </tr>
	</table>

    <table>

        <tr>
            <td colspan="4"><strong>Semifinales:</strong></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">Semi 1 ("4º1" vs "4º3")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="SemiFinales_Juego_41_vs_43_Equipo_41"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="SemiFinales_Juego_41_vs_43_Gol_41" name="SemiFinales_Juego_41_vs_43_Gol_41" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="SemiFinales_Juego_41_vs_43_Gol_43" name="SemiFinales_Juego_41_vs_43_Gol_43" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="SemiFinales_Juego_41_vs_43_Equipo_43"></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">Semi 2 ("4º2" vs "4º4")</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="SemiFinales_Juego_42_vs_44_Equipo_42"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="SemiFinales_Juego_42_vs_44_Gol_42" name="SemiFinales_Juego_42_vs_44_Gol_42" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="SemiFinales_Juego_42_vs_44_Gol_44" name="SemiFinales_Juego_42_vs_44_Gol_44" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="SemiFinales_Juego_42_vs_44_Equipo_44"></td>
        </tr>
        <tr>
           <td colspan="4" bgcolor="#FEFFCA">
           <input type="button" id="Calcular_Equipos_3_Puesto_Y_FINAL" value="Mostrar 3° y FINAL" style="width:200px">
           </td>
        </tr>
	</table>

    <table>

        <tr>
            <td colspan="4"><strong>3° Lugar:</strong></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">P-SF-1 vs P-SF-2</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="TercerLugar_Juego_P1_vs_P2_Equipo_P1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="TercerLugar_Juego_P1_vs_P2_Gol_P1" name="TercerLugar_Juego_P1_vs_P2_Gol_P1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="TercerLugar_Juego_P1_vs_P2_Gol_P2" name="TercerLugar_Juego_P1_vs_P2_Gol_P2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="TercerLugar_Juego_P1_vs_P2_Equipo_P2"></td>
        </tr>
	</table>

    <table>
        <tr>
            <td colspan="4"><strong>GRAN FINAL:</strong></td>
        </tr>
        <tr>
            <td colspan="4" bgcolor="#F7CED5">G-SF-1 vs G-SF-2</td>
        </tr>
        <tr>
            <td bgcolor="#B0DFFF" id="GranFinal_Juego_G1_vs_G2_Equipo_G1"></td>
            <td bgcolor="#B0DFFF"><input type="number" id="GranFinal_Juego_G1_vs_G2_Gol_G1" name="GranFinal_Juego_G1_vs_G2_Gol_G1" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF"><input type="number" id="GranFinal_Juego_G1_vs_G2_Gol_G2" name="GranFinal_Juego_G1_vs_G2_Gol_G2" min="0" max="20" style="width:35px;" required></td>
            <td bgcolor="#B0DFFF" id="GranFinal_Juego_G1_vs_G2_Equipo_G2"></td>
        </tr>
        <tr>
           <td colspan="4" bgcolor="#FEFFCA">
           <input type="button" id="Calcular_Resumen_Final" value="Mostrar Resumen Final" style="width:200px">
           </td>
        </tr>
	</table>
    
    <table>
        <tr>
            <td colspan="4"><strong>RESUMEN:</strong></td>
        </tr>
        <tr>
            <td bgcolor="#F7CED5"><strong>"1°"</strong></td>
            <td bgcolor="#F7CED5"><strong>"2°"</strong></td>
            <td bgcolor="#F7CED5"><strong>"3°"</strong></td>
            <td bgcolor="#F7CED5"><strong>"4°"</strong></td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF" id="Primer_Lugar"></td>
            <td bgcolor="#FFFFFF" id="Segundo_Lugar"></td>
            <td bgcolor="#FFFFFF" id="Tercer_Lugar"></td>
            <td bgcolor="#FFFFFF" id="Cuarto_Lugar"></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Goleador:</strong></td>
            <td colspan="2" bgcolor="#FFFFFF" id="Equipo_Goleador"><strong></strong></td>
        </tr>

    </table>
    <br>   
    <table>
    <input type="submit" name="registrar" id="registrar" value="Registrar" style="width:80px;">
    </table>
    <br><br><br><br><br><br>

    
</td>

</table>

</form>




</section>

<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>