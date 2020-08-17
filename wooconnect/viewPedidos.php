<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet pingback  " href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
  <div>
    <h3>Lista de Pedidos</h3><br>
    <a href="../index.php" target="_self">Voltar</a><br><br>
    <?php
    
    $path = '../wooconnect/connectREST.php';
    //Retornará true se o arquivo existir
    if (file_exists($path)) {
    //Se o arquivo existir podemos incluí-lo.
    include($path);
    }
    $woocommerce = new Client($url, $consumer_key, $consumer_secret, $options);
    // while($resposta){
    //   $id = $resposta['id_usuario'];
    //   $primeiro_nome = $resposta['primeiro_nome'];
    //   $sobrenome = $resposta['sobrenome'];
    //   $email = $resposta['email'];
    //   echo "<form action='form_update.php' method='POST'>";
    //   echo "ID:<br>";
    //   echo "<input type='text' name='id_usuario' value='$id'><br>";
    //   echo "Nome:<br>";
    //   echo "<input type='text' name='primeiro_nome' value='$primeiro_nome'><br>";
    //   echo "Sobrenome:<br>";
    //   echo "<input type='text' name='sobrenome' value='$sobrenome'><br>";
    //   echo "E-mail:<br>";
    //   echo "<input type='text' name='email' value='$email'><br><br>";
    //   echo "<input class='btn btn-primary' type='submit' value='Editar'><br><br<br><br>";
    //   echo "</form>";
    // }
    ?>
    <br><br>
    <a href="../index.php" target="_self">Voltar</a><br>
  </div>
<?php
  // tira o resultado da busca da memória
  // mysql_free_result($resposta);
?>
</body>
</html>