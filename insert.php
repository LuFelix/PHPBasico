<?php
include "connect.php";
$primeiro_nome = $_POST['primeiro_nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['e-mail'];

mysqli_query($link,"INSERT INTO tbl_usuarios(primeiro_nome,sobrenome,email)
values
('$primeiro_nome','$sobrenome','$email')");

header ('location:index.php');
?>
