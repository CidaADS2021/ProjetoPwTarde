<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "pwtarde";

$conexao = mysqli_connect($servidor, $usuario, $senha) or die("Erro na conexão");

mysqli_select_db($conexao,$bancodeDados);
?>