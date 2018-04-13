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