<?php
	session_start();
	if (isset($_SESSION['password']))
	{
                //echo $_SESSION['k_password'];
                 echo $_SESSION['usuario'];
                 
                 
								 

		echo 'Haz sido identificado correctamente';
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <h1><?php echo $_SESSION['k_nombre'];?></h1>
</body>
</html>

<?php
	}
	else
	{
		echo"Acceso no autorizado";
	}
	?>