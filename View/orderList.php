<?php
require ('../Model/includes.php');
$db = DataBase::singleton();
$consulta = $db->executeQue("select * from OrdenServicio");
$total = $db->numRows($consulta);
$orders = null;
if ($total > 0) {
	while ($row = $db->arrayResult($consulta)) {
		$oders[] = array(
			'id' => $row['id'],
			'idCliente' => $row['idCliente'],
			'fechaHora' => $row['fechaHora'],
			'descripcion' => $row['descripcion'],
			'cantidadProductos' => $row['cantidadProductos'],
			'costoTotal' => $row['costoTotal']
		);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de OS</title>
</head>
<body>
	<table>
		<tr><th>Id</th><th>Id Cliente</th><th>Fecha/Hora</th><th>Descripción</th><th>Cantidad Productos</th><th>Costo Total</th></tr>
		<?<?php
			foreach ($orders as $title => $order) {
				echo '<tr><td><a href="index.php?order='.$order->id.'">'.$order->id.'</a></td><td>'.$order->idCliente.'</td><td>'.$order->fechaHora.'</td><td>'.$order->descripcion.'</td><td>'.$order->cantidadProductos.'</td><td>'.$order->costoTotal.'</td></tr>';
			}
		?>
	</table>
</body>
</html>