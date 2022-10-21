<?php
session_start();
include('conexao.php');
if(empty($_POST['emailreg']) || empty($_POST['senhareg'])) {
    header('Location: front_registro.php');
    exit();
}

$name = mysqli_real_escape_string($conexao, $_POST['name']);
$emailreg = mysqli_real_escape_string($conexao, $_POST['emailreg']);
$senhareg = mysqli_real_escape_string($conexao, $_POST['senhareg']);

$query = "insert into usuario (usuario,senha,name) value ('$emailreg',md5('$senhareg'),'$name')";

$result = mysqli_query($conexao, $query);
?>  