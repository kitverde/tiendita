<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="sb.css">
  <title>Buscar</title>
</head>
  <img id="logo" src="img\logo.png" width="90px" height="90px">
<body>
  <header><h1>Busqueda de contactos</h1></header>
  <nav><a href="GarcesAgenda.php">Regresar</a></nav>
  <h2>Programacion web II</h2>
  <div id="no">
    
    <form>
      <ul>
      <li><label>Nombre-------------</label>
      <input type="radio" name="tipo"></li>
      <li><label>Tipo de contacto---</label>
      <input type="radio" name="tipo"></li>
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
<img id="twi" src="img\asd.png" width="100px" height="100px">
</html>