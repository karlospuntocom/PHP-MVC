<!DOCTYPE html>
<html>
<head>
	<title>Lista de OS</title>
</head>
<body>
	<table>
		<tr><th>Id</th><th>Id Cliente</th><th>Fecha/Hora</th><th>Descripción</th><th>Cantidad Productos</th><th>Costo Total</th></tr>
		<?<?php
			foreach ($notifs as $title => $notif) {
				echo '<tr><td><a href="index.php?book='.$notif->id.'">'.$notif->id.'</a></td><td>'.$notif->idCliente.'</td><td>'.$notif->fechaHora.'</td><td>'.$notif->descripcion.'</td><td>'.$notif->cantidadProductos.'</td><td>'.$notif->costoTotal.'</td></tr>';
			}
		?>
	</table>
</body>
</html>