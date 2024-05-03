
 <?php

include_once("DbManager.php");

class cGlobal
{
	//Constructor
	function cGlobal()
	{


	}



	function ingresar_producto($id_producto, $nombre, $precio, $existencias, $id_proveedor)
	{
		//creamos el objeto $con a partir de la clase DBManager
		$con=new DBManager;
		if ($con->conectar()==true)
		{

			$query="insert into productos (id_producto, nombre, precio, existencias, id_proveedor) VALUES ('$id_producto','$nombre','$precio','$existencias','$id_proveedor')"; //" '$id_producto', '$descripcion', id_categoria from categorias where nombre='$categoria'";

			$resultado=mysql_query($query) or die("Error ingresando producto al inventario");
		}
                 include_once("ingresar_producto.php");
	}

	function ingresar_categoria($id_producto, $num_factura, $cantidad)
	{
		//creamos el objeto $con a partir de la clase DBManager
		$con=new DBManager;
		if ($con->conectar()==true)
		{

			$query="insert into ventas (id_producto, num_factura, cantidad) VALUES('$id_producto','$num_factura','$cantidad')";

			$resultado=mysql_query($query) or die("Error ingresando ventas");
		}
                 include_once("ingresar_categoria.php");
	}

  function ingresar_proveedores($id_proveedor, $nombre_proveedor)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {

      $query="insert into proveedores (id_proveedor, nombre_proveedor) VALUES('$id_proveedor','$nombre_proveedor')";

      $resultado=mysql_query($query) or die("Error ingresando ventas");
    }
                 include_once("ingresar_proveedores.php");
  }

  function ingresar_facturas($id_cliente, $num_factura, $fecha)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {

      $query="insert into facturas (id_cliente, num_factura, fecha) VALUES('$id_cliente','$num_factura','$fecha')";

      $resultado=mysql_query($query) or die("Error ingresando la factura");
    }
                 include_once("ingresar_categoria.php");
  }

  function ingresar_cliente($id_cliente, $nombre, $direccion)
  {
    //creamos el objeto $con a partir de la clase DBManager
    $con=new DBManager;
    if ($con->conectar()==true)
    {

      $query="insert into clientes (id_cliente, nombre, direccion) VALUES('$id_cliente','$nombre','$direccion')";

      $resultado=mysql_query($query) or die("Error ingresando cliente");
    }
                 include_once("ingresar_cliente.php");
  }

	function consultar_productos($num_factura)
	{

		$con=new DBManager;

		//usamos el mtodo conectar para realizar la conexin
		if ($con->conectar()==true)
		{
			$query="SELECT a.nombre from productos a, ventas b where b.num_factura='$num_factura' && b.id_producto=a.id_producto";
			$resultado=mysql_query($query) or die("Error en consulta de factura");
			// echo "Query: $query";
			return $resultado;
		}

	}

	function consultar_totalfactura($num_factura)
	{

		$con=new DBManager;

		//usamos el mtodo conectar para realizar la conexin
		if ($con->conectar()==true)
		{
			$query="SELECT b.precio * a.cantidad from ventas a, productos b where a.num_factura='$num_factura' && a.id_producto=b.id_producto";
			$resultado=mysql_query($query) or die("Error en consulta de factura");
			// echo "Query: $query";
			return $resultado;
		}

	}

	function consultar_facturacliente($id_cliente)
	{

		$con=new DBManager;

		//usamos el mtodo conectar para realizar la conexin
		if ($con->conectar()==true)
		{
			$query="SELECT num_factura from facturas where id_cliente = '$id_cliente'";
			$resultado=mysql_query($query) or die("Error en consulta de factura");
			// echo "Query: $query";
			return $resultado;
		}

	}

	function consultar_facturafecha($fecha1,$fecha2)
	{

		$con=new DBManager;

		//usamos el mtodo conectar para realizar la conexin
		if ($con->conectar()==true)
		{
			$query="SELECT num_factura from facturas where fecha >= '$fecha1' && fecha <= '$fecha2'";
			$resultado=mysql_query($query) or die("Error en consulta de factura");
			// echo "Query: $query";
			return $resultado;
		}

	}


	//buscar las atenciones


}



?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
