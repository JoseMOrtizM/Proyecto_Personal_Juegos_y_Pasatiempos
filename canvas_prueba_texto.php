<?php
$lado=300;
$radio=0.8*($lado/2);
$pos1x=$lado/2;
$pos1y=($lado/2)-$radio;
$var1=500;
$pos2x=($lado/2)+($radio*sin(3.1415269/3));
$pos2y=($lado/2)-($radio*sin(3.1415269/6));
$var2=400;
$pos3x=($lado/2)+($radio*sin(3.1415269/3));
$pos3y=($lado/2)+($radio*sin(3.1415269/6));
$var3=300;
$pos4x=$lado/2;
$pos4y=($lado/2)+$radio;
$var4=600;
$pos5x=($lado/2)-($radio*sin(3.1415269/3));
$pos5y=($lado/2)+($radio*sin(3.1415269/6));
$var5=700;
$pos6x=($lado/2)-($radio*sin(3.1415269/3));
$pos6y=($lado/2)-($radio*sin(3.1415269/6));
$var6=100;
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>

#lienzo{
	border:1px #FF0000 solid;
}

section{
	width:800px;
	position:relative;
	margin:auto;
}

</style>

<script>

function comenzar(){
	var elemento=document.getElementById("lienzo");
	lienzo=elemento.getContext("2d");
	lienzo.font="bold 12px verdana";
	lienzo.textAlign="center";
	lienzo.textBaseline="top";
	lienzo.fillText("<?php echo "Sec 'A' $var1"; ?>",<?php echo "$pos1x";?>,<?php echo "$pos1y";?>);
	lienzo.fillText("<?php echo "Sec 'B' $var2"; ?>",<?php echo "$pos2x";?>,<?php echo "$pos2y";?>);
	lienzo.fillText("<?php echo "Sec 'C' $var3"; ?>",<?php echo "$pos3x";?>,<?php echo "$pos3y";?>);
	lienzo.fillText("<?php echo "Sec 'D' $var4"; ?>",<?php echo "$pos4x";?>,<?php echo "$pos4y";?>);
	lienzo.fillText("<?php echo "Sec 'E' $var5"; ?>",<?php echo "$pos5x";?>,<?php echo "$pos5y";?>);
	lienzo.fillText("<?php echo "Sec 'F' $var6"; ?>",<?php echo "$pos6x";?>,<?php echo "$pos6y";?>);
}

window.addEventListener("load",comenzar,false);

</script>

</head>

<body>

<section>

<canvas id="lienzo" width="300" height="300">

su navegador no soporta canvas

</canvas>

</section>

</body>
</html>
