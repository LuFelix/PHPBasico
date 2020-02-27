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
		<h3>Edita Cliente</h3>
		<form action="update.php" method="POST">
			ID:<br>
			<input type="text" name="id_usuario" value="<?php echo $_POST['id_usuario'];?>"> <br><br>
			Nome:<br>
			<input type="text" name="primeiro_nome" value="<?php echo $_POST['primeiro_nome'];?>"> <br><br>
			Sobrenome:<br>
			<input type="text" name="sobrenome" value="<?php echo $_POST['sobrenome'];?>"><br><br>
			E-mail:<br>
			<input type="text" name="e-mail" value="<?php echo $_POST['email'];?>"><br><br>
		  <input type="radio" name="genero" value="masculino" checked> Masculino<br>
		  <input type="radio" name="genero" value="feminino"> Feminino<br>
		  <input type="radio" name="genero" value="outro"> Outro<br><br>
		  <input class="btn btn-primary" type="submit" value="Salvar"><br>
		</form>
		<br>
		<a href="index.php" target="_self">Voltar</a><br>
	</div>
</body>
<footer>
	<h3>Rodapé</h3>
</footer>

</html>
