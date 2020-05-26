<?php

include'db.php';

$nome_filial = $_POST['nome_filial'];
$cep_filial  = $_POST['cep_filial'];

$query = "INSERT INTO FILIAL(nome_filial, endereco_filial) VALUES('$nome_filial', $cep_filial)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=filial');