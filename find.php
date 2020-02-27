<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
  <div>
    <h3>Contatos</h3>
    <?php
    include "connect.php";
    $find = $_POST['find'];
    $comando = mysqli_query($link,"SELECT id_usuario, primeiro_nome,sobrenome,email FROM tbl_usuarios WHERE primeiro_nome LIKE '%$find%'");
    while($dados = mysqli_fetch_array($comando)){
      $id = $dados['id_usuario'];
      $primeiro_nome = $dados['primeiro_nome'];
      $sobrenome = $dados['sobrenome'];
      $email = $dados['email'];
      echo "<form action='form_update.php' method='POST'>";
      echo "ID:<br>";
      echo "<input type='text' name='id_usuario' value='$id'><br>";
      echo "Nome:<br>";
      echo "<input type='text' name='primeiro_nome' value='$primeiro_nome'><br>";
      echo "Sobrenome:<br>";
      echo "<input type='text' name='sobrenome' value='$sobrenome'><br>";
      echo "E-mail:<br>";
      echo "<input type='text' name='email' value='$email'><br><br>";
      echo "<input class='btn btn-primary' type='submit' value='Editar'><br><br<br><br>";
      echo "</form>";
    }
    ?>
    <a href="form_find.php" target="_self">Pesquisa</a>
    <a href="index.php" target="_self">Início</a><br>
  </div>
<?php
  // tira o resultado da busca da memória
  mysql_free_result($dados);
?>
</body>
</html>
