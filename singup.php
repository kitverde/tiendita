<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Stick&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<title>Resgistro</title>
	<link rel="stylesheet" type="text/css" href="styleSingUp.css">
</head>
<body>
	<div >
<header>
	<img src="img/logo.png">
	<h1>"Kit verde"</h1>
</header>
<nav id="nav">
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="nosotros.html">Nosostros</a></li>
		<li><a href="singup.php">Sing-Up</a></li>
	</ul>
	</nav>
</div>
<form method="post" action="singup.php">
	<FIELDSET>
		<LEGEND>Para registrarse por favor llene los siguientes campos</LEGEND>
		<div>
		<input type="text" name="Nombre" placeholder="Nombre">
		</div>
		<div>
		<input type="text" placeholder="Apellidos" name="Apellidos">
</div>
<div>
		<input type="text" placeholder="Nombre de usuario" name="Username">
</div>
<div>
		<input type="password" placeholder="Contraseña" name="password">
		</div>
<div>
		<input type="text" placeholder="Correo electronico" name="email">
</div>
<div>
		<input type="submit" value="Registrarse" name="Registrarse">
		</div>
	</FIELDSET>
</form>
<footer >
	<div id="derechos"><p id="pie"><a target="_blank" href="https://www.tonala.ceti.mx/portal/"><img src="img/logo_ceti.png" height="100px" width="80px"></a>Derechos reservados <br>Martin Israel Garces Gonzalez<br>Joan Salvador Hernandez Loza<br>Luis Alfredo Ojeda</p>
	</div>
	<a target="_blank" class="redes" href="https://www.facebook.com/Kit-verde-100323422139893/?ref=page_internal">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg></a>
  <a target="_blank" class="redes" href="https://twitter.com/VerdeCatalogo">
  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
</svg>
  </a>

</footer>
<?php 
if(isset($_POST['Registrarse'])) {
	$Nombre= $_POST['Nombre'];
	$Apellidos= $_POST['Apellidos'];
	$email= $_POST['email'];
	$Username= $_POST['Username'];
	$Contrasena= $_POST['password'];
	
	
	include 'Bd_conexion.php';
	mysqli_select_db($conexion,"kitverde") or die("fallo en la conexion");
	$resultado = mysqli_query($conexion,"INSERT INTO `kitverde`.`usuario` (`Nombre`, `Apellidos`, `CorreoElectronico`, `Username`, `contraseña`) VALUES ('$Nombre', '$Apellidos', '$email', '$Username', '$Contrasena');");
	if ($resultado==true){ echo "Gracias!! hemos resivido sus datos.\n";
		echo '<meta HTTP-EQUIV= "REFRESH" CONTENT= "15;URL= singup.php">';
	}
	else{echo "error en la consulta";
	mysqli_close($conexion);
	}
}
 ?>-
</body>
</html>