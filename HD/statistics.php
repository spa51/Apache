<?php
include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta = new Producto;
$vent = $objconsulta->semana($id, $conexion);
$vent2 = $objconsulta->mes($id, $conexion);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HD13COCINA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="overflow-hidden">
<div class="container-fluid base">
    <div class="fondo">
        <div class="barra">
            <a href="index.html">
                <img class="img1" src="img/image.png" alt="">
            </a>
        </div>
        <div class="cuadro">
            <h2>ESTADÍSTICAS</h2>
            <div class="graficas">
            <div class="grafica">
                <canvas style="height: 250px; width: 250px;" id="ventasChart" ></canvas>

                <script>
                    // Datos de ejemplo
                    var semanas = [];
                    var valorTotal = [];
                    <?php while ($row = mysqli_fetch_array($vent)) { ?>
                    semanas.push('Semana <?php echo $row['semana']; ?>');
                    valorTotal.push(<?php echo $row['valor_total']; ?>);
                    <?php } ?>

                    // Configuración del gráfico
                    var ctx = document.getElementById('ventasChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: semanas,
                            datasets: [{
                                data: valorTotal,
                                backgroundColor: [
                                    'rgba(246, 107, 60, 0.5)', //naranja
                                    'rgba(172, 180, 188, 0.5)',  //
                                    'rgba(5, 5, 36, 0.5)', //negro
                                    'rgba(140, 140, 156, 0.5)', //
                                    'rgba(233, 244, 255, 0.5)' //blanco
                                ],
                                borderColor: [
                                    'rgba(246, 107, 60, 1)', //naranja
                                    'rgba(172, 180, 188, 1)',  //
                                    'rgba(5, 5, 36, 1)', //negro
                                    'rgba(140, 140, 156, 1)', //
                                    'rgba(233, 244, 255, 1)' //blanco
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                r: {
                                    angleLines: {
                                        display: false
                                    },
                                    suggestedMin: 0
                                }
                            },
                            plugins: {
            legend: {
                labels: {
                    color: 'rgba(255, 255, 255, 1)' // Cambia el color de las etiquetas a blanco
                }
            }
        }
                            

                        }
                        
                    });
                </script>
            </div>
            <div class="grafica2">
                <canvas style="height: 250px; width: 250px;" id="ventasChart2"></canvas>

                <script>
                    // Datos de ejemplo
                    var ventas = <?php echo json_encode($vent2); ?>;
                    
                    // Obtener arrays separados para meses, cantidad de ventas y valor total
                    var meses = ventas.map(function (venta) {
                        return venta.mes;
                    });
                    var cantidadVentas = ventas.map(function (venta) {
                        return venta.cantidad_ventas;
                    });
                    var valorTotal = ventas.map(function (venta) {
                        return venta.valor_total;
                    });
                    
                    // Configuración del gráfico
                    var ctx = document.getElementById('ventasChart2').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: meses,
                            datasets: [{
                                label: 'Valor total',
                                data: valorTotal,
                                backgroundColor: [
                                    'rgba(246, 107, 60, 0.5)', //naranja
                                    'rgba(172, 180, 188, 0.5)',  //
                                    'rgba(5, 5, 36, 0.5)', //negro
                                    'rgba(140, 140, 156, 0.5)', //
                                    'rgba(233, 244, 255, 0.5)' //blanco
                                ],
                                borderColor: [
                                    'rgba(246, 107, 60, 1)', //naranja
                                    'rgba(172, 180, 188, 1)',  //
                                    'rgba(5, 5, 36, 1)', //negro
                                    'rgba(140, 140, 156, 1)', //
                                    'rgba(233, 244, 255, 1)' //blanco
                                ],
                                borderWidth: 1
                            }],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                r: {
                                    suggestedMin: 0,
                                    suggestedMax: Math.max(...valorTotal) + 500, // Ajusta el rango máximo según el valor máximo de valorTotal
                                    ticks: {
                                        stepSize: 500
                                    }
                                }
                            },
                            plugins: {
            legend: {
                labels: {
                    color: 'rgba(255, 255, 255, 1)' // Cambia el color de las etiquetas a blanco
                }
            }
        }
                        }
                    });
                </script>
            </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8g

</body>
</html>