<?php
	session_start();
	// Borramos toda la sesion
	session_destroy();
	//echo 'Ha terminado la session <p><a href="index.php">index</a></p>';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos1.css" media="screen">
	<title>Menú</title>
</head>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<body class="fondo" align="center">
	<tr>
		<b>
		<td height="600" align="center" class="subtitulos">Sesión finalizada correctamente.<br>
		<a href="index.php">Regresar</a></td></b>
	</tr>
</body>
</html>
