<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="servi" name="servi" action="datos.php" action="index.html" method="post" onsubmit="return verificar(this)">
      <p align="center" >INGRESAR DATOS DEL VENDEDOR</p>
      <table border="0" align="center">
        <tr>
          <td>ID_PRODUCTO</td>
          <td> <input id="salario" type="text" name="salario"></td>
        </tr>
        <tr>
          <td>PRECIO</td>
          <td> <input id="pventa" type="text" name="pventa"></td>
        </tr>
        <tr>
          <td>CANTIDAD A VENDER</td>
          <td> <input type="text" name="sventa" id="sventa"> </td>
        </tr>
        <tr>
          <td>EXISTENCIAS</td>
          <td> <input type="text" name="tventa" id="tventa"> </td>
        </tr>
      </table>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Calcular" />
        </div>
      </label></td>
    </form>
  </body>
</html>
