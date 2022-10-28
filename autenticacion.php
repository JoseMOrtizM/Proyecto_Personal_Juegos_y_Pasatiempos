<?php
require ("conexion.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>RULETA ACTIVA</TITLE>
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
	<form action="comprueba_usuario.php" method='post' name='formulario_autenticacion'>
		<table style="margin:auto;">
			<tr>
				<td style="color:#F00; font-size:28px; padding:15px; margin:auto;">Ingreso al Sistema</td>
			</tr>
			<tr>
				<td style='text-align:center;'><img width="16px" height="16px" style="margin:1px 0px 1px 1px; padding:3px 0px 0px 0px;" src="IMAGENES/USUARIO.jpg"/><input type='text' name='usuario' required placeholder='Usuario' value=''></td>
			</tr>
			<tr>
				<td style='text-align:center;'><img width="16px" height="16px" style="margin:1px 0px 1px 1px;  padding:3px 0px 0px 0px;" src="IMAGENES/CONTRASENA.jpg"/><input type='password' name='contrasena' required placeholder='Contraseña' value=''></td>
			</tr>
			<tr>
				<td style='text-align:center;'><br><input type='submit' name='enviar' class="boton" value='Ingresar'></td>
			</tr>
			<?php
			if(isset($_GET['user'])==true){
				if($_GET['user']=='invalido'){ echo "<tr><td style='color:red;'>Indicador o Contraseña Invalidos</td></tr>"; }
			}
			?>
		</table>
	</form>
</section>
<br><br>
<?php
require ("footer.php");
?>
<br><br>
</body>
</html>