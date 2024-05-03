<?php
include_once("Servicio.php");
$conexion = $objeto->connectDB();

$objconsulta = new Producto;
$vent = $objconsulta->mostrar($conexion); 
?>
<nav>
    <ul>
        <li><a href="1.php">Capítulo 1</a></li>
        <li><a href="index.php">Atrás</a></li>
    </ul>
</nav>

<h1>Capítulo 1</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_array($vent)) { ?>
        <tr>
            <form action="process_update.php" method="post">
                <td><input type="text" name="idcliente" value="<?php echo htmlspecialchars($row['idcliente']); ?>" readonly></td>
                <td><input type="text" name="nombres" value="<?php echo htmlspecialchars($row['nombres']); ?>"></td>
                <td><input type="text" name="direccion" value="<?php echo htmlspecialchars($row['direccion']); ?>"></td>
                <td><input type="text" name="telefono" value="<?php echo htmlspecialchars($row['telefono']); ?>"></td>
                <td><button type="submit" name="actualizar">Actualizar</button>
                <button type="submit" name="eliminar">eliminar</button></td>
            </form>
        </tr> 
        <?php } ?>
    </tbody>
</table>

<nav>
    <ul>
        <li><a href="1.php">Capítulo 1</a></li>
        <li><a href="index.php">Atrás</a></li>
    </ul>
</nav>
