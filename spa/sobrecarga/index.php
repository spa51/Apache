<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="servi" name="servi" action="recibe_datos.php"class="" action="index.html" method="post" onsubmit="return verificar(this)">
       <p align="center" >INGRESAR DATOS DE ESTUDIANTES</p>
      <table border="0" align="center">
        <tr>
          <td>Quiz</td>
          <td> <input type="text" name="quiz" id="quiz"> </td>
        </tr>
        <tr>
          <td>Trabajo</td>
          <td> <input type="text" name="trabajo" id="trabajo"> </td>
        </tr>
        <tr>
          <td>Taller</td>
          <td> <input type="text" name="taller" id="taller"> </td>
        </tr>
        <tr>
          <td>Parcial</td>
          <td> <input type="text" name="parcial" id="parcial"> </td>
        </tr>
      </table>
      <td colspan="2"><label>
          <div align="center">
            <input type="submit" name="Submit" Value="Enviar" />
          </div>
        </label></td>

    </form>

  </body>
</html>
