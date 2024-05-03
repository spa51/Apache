<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="servi" name="servi" action="dato.php" class="" action="index.html" method="post" onsubmit="return verificar(this)">
      <table border="0" align="center">
      <tr>
        <td>ID_PRODUCTO</td>
        <td> <input id="id" type="text" name="id"></td>
      </tr>
      <tr>
        <td>PRECIO</td>
        <td> <input id="precio" type="text" name="precio"></td>
      </tr>
      <tr>
        <td>CANTIDAD A VENDER</td>
        <td> <input type="text" name="venta" id="venta"> </td>
      </tr>
      <tr>
        <td>EXISTENCIAS</td>
        <td> <input type="text" name="existencias" id="existencias"> </td>
      </tr>
    </table>
    <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Calcular Comision" />
        </div>
      </label></td>
    </form>

  </body>
</html>
