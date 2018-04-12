<!DOCTYPE html>
<html>
<head>
	<title>Lista de notificaciones</title>
</head>
<body>
	<table>
		<tr><th>Id</th><th>Autor origen</th><th>Autor destino</th><th>Fecha/Hora</th><th>Descripción</th></tr>
		<?<?php
			foreach ($notifs as $title => $notif) {
				echo '<tr><td><a href="index.php?book='.$notif->id.'">'.$notif->id.'</a></td><td>'.$notif->idAutorOrigen.'</td><td>'.$notif->idAutorDestino.'</td><td>'.$notif->fechaHora.'</td><td>'.$notif->descripcion.'</td></tr>';
			}
		?>
	</table>
</body>
</html>