<?php 
$usuario=$_POST['usuario'];
$password=$_POST['password'];

session_start();
$_SESSION['usuario']=$usuario;


include('db.php');
$consulta="SELECT a.password,a.usuario,b.nombres,b.apellidos FROM tusuarios a,tclientes b WHERE a.usuario='$usuario' && a.cedula=b.cedula";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if ($filas) {
    
    header("location:home.php");

} else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error en la autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
