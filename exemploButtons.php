<html>

	<head>
		<title>Botões</title>
		<link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
		</head>

	<?php
	function teste() {
	?>
		<div>
			<p>
				<?php echo "Foi digitado \"" . $_POST['texto'] . "\""; ?>
			</p>
		</div>
	<?php
	}
	?>

	<body>
		<div>
			<form action="?a=ok" method="POST">
				<input type="text" name="texto" />
				<br />
				<input type="submit" value="Enviar..." />
			</form>
		</div>
		<?php
		if ( isset( $_GET['a'] ) && $_GET['a'] == 'ok' && $_POST['texto'] != '' ) {
			teste();
		}
		?>
	</body>

</html>
