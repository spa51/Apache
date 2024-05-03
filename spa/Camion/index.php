<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="servi" name="servi" action="dato.php" action="index.html" method="post" onsubmit="return verificar(this)">
      <p align="center" >INGRESAR DATOS</p>
      <table border="0" align="center">
        <tr>
          <td>Modelo</td>
          <td> <input id="Modelo" type="text" name="Modelo"></td>
        </tr>
        <tr>
          <td>Color</td>
          <td> <input id="Color" type="text" name="Color"></td>
        </tr>
        <tr>
          <td>Placa</td>
          <td> <input type="text" name="Placa" id="Placa"> </td>
        </tr>
        <tr>
          <td>Distancia</td>
          <td> <input type="text" name="Distancia" id="Distancia"> </td>
        </tr>
        <tr>
          <td>Tiempo</td>
          <td> <input type="text" name="Tiempo" id="Tiempo"> </td>
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
