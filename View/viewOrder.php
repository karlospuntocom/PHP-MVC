 <?php
require ('../Model/includes.php');
$db = DataBase::singleton();

$opselect = $_GET["order"];
// $config = Config::singleton();
$consulta = $db->executeQue("select * from OrdenServicio where id =".$opselect);
$total = $db->numRows($consulta);
if ($total > 0) {
	while ($row = $db->arrayResult($consulta)) {
		$carreras[] = array('id' => $row['idcarrera'],
		'nombre' => $row['nombre']);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Órden de Servicio</title>
</head>
<body>
<?php
	echo 'Id: '.$order->id.'<br/>';
	echo 'Id Cliente: '.$order->idCliente.'<br/>';
	echo 'Fecha/Hora: '.$order->fechaHora.'<br/>';	
	echo 'Descripcion: '.$order->descripcion.'<br/>';	
	echo 'Cantidad Productos: '.$order->cantidadProductos.'<br/>';	
	echo 'Costo Total: '.$order->costoTotal.'<br/>';
?>
</body>
</html>