<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

  <title>Hotel CherryBlue</title>
</head>
<body>
<!-- nav -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="reserva.php">Reservar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>

  <!-- <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li> -->
</ul>
<div class="container">
    <main>
      <div class="py-5 text-center">
        <img src="img/32.png" alt="" width="72" height="72">
        <h2>Reservas</h2>
        <p class="lead">Bienvenidos al Hotel CherryBlue sera un placer tenerlos como nuestros futuros clientes.</p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Habitaciones</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Habitacion Simple</h6>
                <small class="text-muted">Cama doble television y Baño</small>
              </div>
              <span class="text-muted">$30.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Habitacion Doble</h6>
                <small class="text-muted">Dos camas dobles etc</small>
              </div>
              <span class="text-muted">$50.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div class="text-success">
                <h6 class="my-0">Habitacion Matrimonial</h6>
                <small class="text-muted">Gran cama matrimonial con jacuzzi</small>
              </div>
              <span class="text-muted">$90.000</span>
            </li>
          </ul>

          <form class="card p-2">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div class="lead">
                <h6 class="my-0">Segun las fechas de sus registros podra tener descuentos en sus reservas</h6>
              </div>
            </li>
          </form>
        </div>
        <!-- Formulario -->
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Registro de Reserva</h4>
          <form class="needs-validation" id="form1" name="form1" method="post" action="recibe.php" novalidate>
            <div class="row g-3">

              <div class="col-sm-6">
                <label for="nombre" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Ingrese su nombre
                </div>
              </div>

              <div class="col-sm-6">
                <label for="apellido" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido" placeholder="" value="" required>
                <div class="invalid-feedback">
                  ingrese su apellido
                </div>
              </div>

              <div class="col-6">
                <label for="cedula" class="form-label">Documento</label>
                <input type="text" class="form-control" name="cedula" placeholder="123456789" required>
                  <div class="invalid-feedback">
                    Ingrese numero de indentificacion
                  </div>
              </div>

              <div class="col-md-6">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" placeholder="1234567890" required>
                <div class="invalid-feedback">
                  Ingrese un telefono 
                </div>
              </div>


              <div class="col-6">
                <label for="email" class="form-label">Correo </label>
                <input type="text" class="form-control" name="email" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                  Ingrese un correo valido
                </div>
              </div>

              <div class="col-6">
                <label for="direccion" class="form-label">Dirreccion</label>
                <input type="text" class="form-control" name="direccion" placeholder="calle 13 #12-67" required>
                <div class="invalid-feedback">
                  Ponga su direccion
                </div>
              </div>

              <div class="col-md-7">
                <label for="habitacion" class="form-sel">Habitacion</label>
                <select class="form-select" name="habitacion" required>
                  <option value="">Seleccione...</option>
                  <option value="simple">Habitacion Simple</option>
                  <option value="doble">Habitacion Doble</option>
                  <option value="matrimonial">Habitacion Matrimonial</option>
                </select>
                <div class="invalid-feedback">
                  Seleccione una habitacion
                </div>
              </div>


              <div class="col-md-6">
                <label for="en_fecha" class="form-label">Fecha de Ingreso</label>
                <input type="date" class="form-control" name="en_fecha" placeholder="" required>
                <div class="invalid-feedback">
                  Se requiere fecha
                </div>
              </div>

              <div class="col-md-6">
                <label for="sa_fecha" class="form-label">Fecha de Salida</label>
                <input type="date" class="form-control" name="sa_fecha" placeholder="" required>
                <div class="invalid-feedback">
                  Se requiere fecha
                </div>
              </div>




              <hr class="my-4">

              <h4 class="mb-3">Metodo de pago</h4>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Titular de tarjeta</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="tarjeta" class="form-label">Numero de tarjeta</label>
                  <input type="text" class="form-control" name="tarjeta" placeholder="123456789" required>
                  <div class="invalid-feedback">
                    Se requiere numero de tarjeta
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expedicion</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Reservar</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2021 CherryBlue</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


      <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>