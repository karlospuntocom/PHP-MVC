<!DOCTYPE html>
<html>
<head>
	<title>Lista de libros</title>
</head>
<body>
	<table>
		<tr><th>Title</th><th>Author</th><th>Description</th></tr>
		<?<?php
			foreach ($books as $title => $book) {
				echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
			}
		?>
	</table>
</body>
</html>