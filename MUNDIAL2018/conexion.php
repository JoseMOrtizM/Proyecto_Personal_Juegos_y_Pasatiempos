<?PHP
$conexion=mysqli_connect("localhost","root","");
if(mysqli_connect_errno()){echo "Fallo al conectar con la BBDD";exit();}
mysqli_select_db($conexion,"mundial_2018") or die ("No se encuentra la BBDD");
mysqli_set_charset($conexion,"utf8");
?>