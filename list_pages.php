
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="functions.js"></script>
  <link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
  <style>h4{ display:inline;	}</style>
  <script type="text/javascript">
   
  </script>
</head>
<body>
  <div>
    <h3>Lista Paginada</h3><br>
    <a href="index.php" target="_self">Voltar</a><br><br>
<?php
    include "connect.php";
    //include "e-mail.php";
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    //seleciona todos os itens da tabela
    $comando = "select * from tbl_usuarios;";
    $dados = mysqli_query($link,$comando);
    //conta o total de itens
    $total = mysqli_num_rows($dados);
    //seta a quantidade de itens por página, neste caso, 2 itens
    $registros = 3;
    //calcula o número de páginas arredondando o resultado para cima
    $numPaginas = ceil($total/$registros);
    //variavel para calcular o início da visualização com base na página atual
    $inicio = ($registros*$pagina)-$registros;
    //seleciona os itens por página
    $comando = "select * from tbl_usuarios limit $inicio,$registros;";
    $dados = mysqli_query($link,$comando);
    //$total = mysqli_num_rows($link,$dados);
    //exibe os dados selecionados
    while ($conteudo = mysqli_fetch_array($dados)) {
      $id = $conteudo['id_usuario'];
      $primeiro_nome = $conteudo['primeiro_nome'];
      $sobrenome = $conteudo['sobrenome'];
      $email = $conteudo['email'];
      echo "<form action='form_update.php' method='POST'>";
      echo "ID:<br>";
      echo "<input type='text' name='id_usuario' value='$id'><br>";
      echo "Nome:<br>";
      echo "<input type='text' name='primeiro_nome' value='$primeiro_nome'><br>";
      echo "Sobrenome:<br>";
      echo "<input type='text' name='sobrenome' value='$sobrenome'><br>";
      echo "E-mail:<br>";
      echo "<input type='text' name='email' value='$email'><br><br>";
      echo "<input class='btn btn-primary' type='submit' value='Editar'/>";
      echo "<a type='button' class='btn btn-info' href='form_email.php'>Enviar e-mail</a><br><br<br><br>";
      echo "</script>";
      echo "</form>";

      /**
       * substituindo a função no botão de enviar email por "enviaEmail();" 
       * pode-se enviar diretamente usando o JS ou abrir a página para 
       * escrever o conteudo
      */
      
      /*Lista Simples
        echo $conteudo['id']." - ";
        echo $conteudo['primeiro_nome']." - ";
        echo $conteudo['sobrenome']." - ";
        echo $conteudo['email']." - <br>";
        */
    }
    
    //exibe a paginação
    for($i = 1; $i < $numPaginas + 1; $i++) {
        echo "<h4><a href='list_pages.php?pagina=$i'>".$i."</h4></a> ";
    }
    
    
?>
<br><br>
<a href="index.php" target="_self">Voltar</a><br>
</div>

<?php
// tira o resultado da busca da memória
mysql_free_result($conteudo);
?>
</body>


</script>
</html>
