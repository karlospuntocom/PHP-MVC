<!DOCTYPE html>
<html>
<head>
	<title>Lista de OS</title>
</head>
<body>
	<table>
		<tr><th>Id</th><th>Id Cliente</th><th>Fecha/Hora</th><th>Descripción</th><th>Cantidad Productos</th><th>Costo Total</th></tr>
		<?php
			foreach ($orders as $id => $row) {
				echo '<tr><td><a href="index.php?order='.$row[id].'">'.$row[id].'</a></td><td>'.$row[idCliente].'</td><td>'.$row[fechaHora].'</td><td>'.$row[descripcion].'</td><td>'.$row[cantidadProductos].'</td><td>'.$row[costoTotal].'</td></tr>';
			}
		?>
	</table>
	<a href="View/createOrder.php?new=1"> Crear </a>
</body>
</html>