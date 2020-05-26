<?php

include 'db.php';
$id_livro = $_GET['id_livro'];

$query = "DELETE FROM LIVRO WHERE id_livro = $id_livro";

mysqli_query($conexao, $query);

header('location:index.php?pagina=livro');
 