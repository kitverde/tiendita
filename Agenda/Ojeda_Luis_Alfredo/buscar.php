<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylebuscar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
	<title>Buscar</title>
</head>
<body>
	<header><h1>Busqueda de contactos</h1></header>
	<nav><a href="ojedaAgenda.php">Regresar</a></nav>
	<div id="table1">
		<form>
			<ul>
			<li><label>Nombre</label>
			<input type="radio" name="opcion" value="nombre"></li>
			<li><label>Tipo de contacto</label>
			<input type="radio" name="opcion" value="tipo"></li>
			</ul>
			<input type="text" name="busqueda">
			<input type="submit" name="buscar" value="Buscar"><br>
		</form>
	</div>
	<div id="tabla">
		<table id="table">
			<tr>
		<td>
			Nombre:
		</td>
		<td>
			Telefono:
		</td>
		<td>
			Red social:
		</td>
		<td>
			Contacto red social:
		</td>
		<td>
			Correo electronico:
		</td>
		<td>
			Tipo:
		</td>
		<td>
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-check" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M14 3v4a1 1 0 0 0 1 1h4" />
  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
  <path d="M9 15l2 2l4 -4" />
</svg>
		</td>
		<td><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <line x1="4" y1="7" x2="20" y2="7" />
  <line x1="10" y1="11" x2="10" y2="17" />
  <line x1="14" y1="11" x2="14" y2="17" />
  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
</svg></td></tr>
		</table>
	</div>
</body>
</html>