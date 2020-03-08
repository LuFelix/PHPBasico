<?php
include "connect.php";
include "email.php";
$id = $_POST['id_usuario'];
$primeiro_nome = $_POST['primeiro_nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['e-mail'];

mysqli_query($link,"SELECT * FROM tbl_usuarios WHERE id_usuario='$id';");

header ('location:index.php');
?>
