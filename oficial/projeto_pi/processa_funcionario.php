<?php

include'db.php';

$funcionario = $_POST['funcionario'];
$senha	     = md5($_POST['senha']);

$query = "INSERT INTO FUNCIONARIO(funcionario, senha) VALUES('$funcionario', '$senha')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=funcionario');