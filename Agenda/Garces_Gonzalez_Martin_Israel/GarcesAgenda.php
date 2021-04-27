<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
	<title>Agenda Martin</title>
</head>

<body>
	<img id="twi" src="img\asd.png" width="150em" height="150em">
	<img id="logo" src="img\logo.png" width="150em" height="150em">

	<header><h1>Actividad agenda</h1></header>
	<h5>Programacion web</h5>
	<nav><a href="../../agendas.html">Agendas</a></nav>
	<NAV><a href="buscar.php">Buscar</a></NAV>
	<section>
	<div>
<form method="post" action="GarcesAgenda.php">
	<h4>Agenda de contactos</h4>
	<table>
	<tr>
	<td><label>Nombre<span>*</span></label>
	<input id="inputname" type="text" name="nombre"></td>
	<td>
		<label>Tipo contacto</label>
	<select id="selectcontact" name="contatipo">
		<option >......</option>
		<option value="trabajo"> Trabajo </option>
		<option value="escuela">Escuela</option>
		<option value="familia">Familia</option>
		<option value="otro">Otro</option>
	</select>
	</td>
	<td>
		<input class="button" type="submit" name="agregar" value="Agregar">
	</td>
	</tr>
	<tr>
		<td><label>Telefono<span>*</span></label>
	<input id="inputtel" type="text" name="Telefono"></td>
	<td>
	<label>Correo electronico</label>
	<input id="inputemail" type="email" name="Correo">
	</td>
	<td>
	
	</td>
	</tr>
	<tr>
		<td>
			<label>Red social</label>
	<select id="selectred" name="tiporedsocial">
		<option >.....</option>
		<option value="facebook"> facebook </option>
		<option value="twitter">Twitter</option>
		<option value="Instagram">Instagram</option>
	</select>
		</td>
		<td><label >Contacto de red social</label>
	<input id="inputredsocial" type="text" name="contactored"></td>
	</tr>
	<tr>
		<td>	</td>
	</tr>
	</table>
</form>
</div>
</section>

<div id="tabla">
	<table id="table">
		<tr >
		<td >
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
<?php
    if(!$usuarios = simplexml_load_file('datos')){
        echo "No se ha podido cargar el archivo";}
        else{
            foreach($usuarios as $usuario)
        {
            echo "<tr><td>".$usuario->nombre."</td><td>".
            $usuario->contacto."</td><td>".
            $usuario->redsocial["tipored"]."</td><td>".
            $usuario->redsocial."</td><td>".
            $usuario->correo."</td><td>".
            $usuario->contacto["tipo"] ."</td></tr>";
        }
    }
    ?>
	</table>
</div>
<?php
if (isset($_POST['agregar'])) {
$nombre=$_POST['nombre'];
$telefono=$_POST['Telefono'];
$redsocial=$_POST['tiporedsocial'];
$contactored=$_POST['contactored'];
$contacto=$_POST['contatipo'];
$correo=$_POST['Correo'];
$doc = new domDocument("1.0","utf-8");
$doc->formatOutput = true;
$doc->load("datos");
$raiz = $doc->getElementsByTagName("clientes")->item(0);
$rama = $doc->createElement('usuario');
$hoja = $doc->createElement('nombre');
$hoja->appendChild($doc->createTextNode($nombre));
$rama->appendChild($hoja);
$hoja = $doc->createElement('contacto');
$hoja->setAttribute('tipo', $contacto);
$hoja->appendChild($doc->createTextNode($telefono));
$rama->appendChild($hoja);
$hoja = $doc->createElement('correo');
$hoja->appendChild($doc->createTextNode($correo));
$rama->appendChild($hoja);
$hoja = $doc->createElement('redsocial');
$hoja->setAttribute('tipored', $redsocial);
$hoja->appendChild($doc->createTextNode($contactored));
$rama->appendChild($hoja);
$raiz->appendChild($rama);
$doc->appendChild($raiz);
$doc->save("datos");
}
?>
</body>
</html>