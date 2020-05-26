<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "ldk";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM LIVRO";
$consulta_livro = mysqli_query($conexao, $query);


$query = "SELECT * FROM LEITOR";
$consulta_leitor = mysqli_query($conexao, $query);


$query = "SELECT emprestimo.id_emprestimo, leitor.nome_leitor, livro.nome_livro 
			FROM LEITOR, LIVRO, EMPRESTIMO
			WHERE emprestimo.id_leitor = leitor.id_leitor
			AND  emprestimo.id_livro = livro.id_livro";
$consulta_emprestimo = mysqli_query($conexao, $query);


$query = "SELECT * FROM FUNCIONARIO";
$consulta_funcionario = mysqli_query($conexao, $query);


$query = "SELECT * FROM FILIAl";
$consulta_filial = mysqli_query($conexao, $query);
