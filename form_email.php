
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet pingback  " href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<?php
include "connect.php";
//include "e-mail.php";
$id = 2;// $_POST['id_usuario'];
$primeiro_nome ='';// $_POST['primeiro_nome'];
$sobrenome =''; //$_POST['sobrenome'];
$email = '';//$_POST['e-mail'];

$comando = mysqli_query($link,"SELECT * FROM tbl_usuarios WHERE id_usuario='$id';");
while($dados = mysqli_fetch_array($comando)){
	$id = $dados['id_usuario'];
	$nome = $dados['primeiro_nome'];
	$sobrenome = $dados['sobrenome'];
	$email = $dados['email'];
}

?>
<body>
<div>
		<h3>Enviar E-mail para Cliente</h3>
		<form action="email.php" method="POST">
			ID:<br>
			<input type="text" name="id_usuario" value="<?php echo $id;?>"> <br><br>
			Nome:<br>
			<input type="text" name="primeiro_nome" value="<?php echo $nome;?>"> <br><br>
			Sobrenome:<br>
			<input type="text" id="sobrenome" name="sobrenome" value="<?php echo $sobrenome;?>"><br><br>
			E-mail:<br>
			<input type="email" name="destinatario" aria-describedby="emailHelp" placeholder="E-mail" value="<?php echo $email;?>"><br><br>
			Texto do e-mail:<br>
            <textarea class="form-control" id="email" rows="8"></textarea><br><br>
			<input class="btn btn-primary" type="submit" value='Enviar'/>"
		</form>
		<br>
		<a href="index.php" target="_self">Voltar</a><br>
	</div>
    <br><br>
    <a href="index.php" target="_self">Voltar</a><br>
  </div>
<?php
  // tira o resultado da busca da memória
  mysql_free_result($dados);
?>
</body>
</html>


