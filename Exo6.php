<!DOCTYPE html>
<html>
<head>
	<title>Diviseurs d'un nombre</title>
</head>
<body>
	<h1>Diviseurs d'un nombre</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="number">Saisissez un nombre :</label>
		<input type="text" name="number" id="number">
		<input type="submit" value="Afficher les diviseurs">
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$number = intval($_POST['number']);
			echo '<p>Les diviseurs de ' . $number . ' sont : </p>';
			for ($i = 1; $i <= $number; $i++) {
				if ($number % $i === 0) {
					echo $i . ' ';
				}
			}
		}
	?>
</body>
</html>
