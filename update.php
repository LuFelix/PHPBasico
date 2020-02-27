<?php
include "connect.php";
$id = $_POST['id_usuario'];
$primeiro_nome = $_POST['primeiro_nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['e-mail'];

mysqli_query($link,"UPDATE tbl_usuarios SET primeiro_nome='$primeiro_nome',sobrenome='$sobrenome',email='$email' WHERE id_usuario='$id';");


header ('location:index.php');
?>
