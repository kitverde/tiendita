<?php 
if(isset($_POST['ingresar'])){
$Usuario = $_POST['usuario'];
$contraseña= $_POST['password'];
session_start();
$_SESSION['usuario']=$Usuario;
include 'Bd_conexion.php';
mysqli_select_db($conexion,"kitverde");
$consulta="SELECT *FROM usuario where Username='$Usuario' and contraseña= '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if ($filas) {
	header("location:home.php");
}
else{
	?>
	<?php
	include 'index.php';

	?>
	<h1>Error en la autenticación</h1>
	<<?php  
}
mysqli_free_result($resultado);
mysql_close($conexion);
}
?>
