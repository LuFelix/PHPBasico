<!DOCTYPE html>
<html lang="pt-BR">
<html meta charset="utf-8"/>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
	<title>Sistema de Cadastro de Clientes</title>
</head>
<body>
	<div>
		<h3>Pesquisa de Clientes</h3>
		<form action="find.php" method="POST">
			Nome<br>
			<input type="text" name="find" placeholder="Digite o nome para pesquisa..."> <br><br>
			<input class="btn btn-primary" type="submit" value="Pesquisar">
		</form>
    <br><br>
    <a href="index.php" target="_self">Voltar</a><br>
	</div>
</body>
<footer>
	<h3>Rodapé</h3>
</footer>

</html>
