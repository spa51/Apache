<?php
include_once("Servicio.php");
$conexion = $objeto->connectDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $objconsulta = new Producto;

    if (isset($_POST['actualizar'])) {
        $id = $_POST['idcliente'];
        $name = $_POST['nombres'];
        $address = $_POST['direccion'];
        $phone = $_POST['telefono'];
        
        $result = $objconsulta->modificar($conexion, $id, $name, $address, $phone);

        if ($result) {
            echo "Datos actualizados correctamente.";
        } else {
            echo "Error al actualizar los datos.";
        }
    } elseif (isset($_POST['eliminar'])) {
        $id = $_POST['idcliente'];
        
        $result = $objconsulta->eliminar($conexion, $id);

        if ($result) {
            echo "Registro eliminado correctamente.";
        } else {
            echo "Error al eliminar el registro.";
        }
    }

    header('Location: 1.php'); // Redirige de vuelta a la página de edición después de actualizar o eliminar
    exit; // Asegúrate de terminar el script después de enviar el encabezado
}
?>
