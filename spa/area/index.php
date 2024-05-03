<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<script type="text/javascript">
function verificar( servi )
        {
            if ( servi.codigo.value == "")
            {
                alert( "Falta Codigo" );
                servi.codigo.focus();
                return false;
            }
             if ( servi.nombre.value == "")
            {
                alert( "Falta el Nombre" );
                servi.nombre.focus();
                return false;
            }
             if ( servi.nota1.value == "")
            {
                alert( "Falta la Primera Nota" );
                servi.nota1.focus();
                return false;
            }
             if ( servi.celular.value == "")
            {
                alert( "Falta Celular" );
                servi.celular.focus();
                return false;
            }
              return true;
        }
</script>
<form id="servi" name="servi" method="post" action="recibe_datos.php" onSubmit="return verificar(this)">
  <p align="center">INGRESO DE CALIFICACIONES </p>
  <table width="318" border="1" align="center">
    <tr>
      <td width="158">Codigo</td>
      <td width="144"><label>
        
        <div align="right">
          <input name="codigo" type="text" id="codigo" />
        </div>
      </label></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><input name="nombre" type="text" id="nombre" /></td>
    </tr>
    <tr>
      <td>Nota 1er 35 </td>
      <td><input name="nota1" type="text" id="nota1" /></td>
    </tr>
    <tr>
      <td>Nota 2do 35 </td>
      <td><input name="nota2" type="text" id="nota2" /></td>
    </tr>
    <tr>
      <td>Nota 30 </td>
      <td><input name="nota3" type="text" id="nota3" /></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Calcular nota definitiva " />
        </div>
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
