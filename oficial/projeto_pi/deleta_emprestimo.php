<?php

include 'db.php';

$id_emprestimo = $_GET['id_emprestimo'];


$query = "DELETE FROM EMPRESTIMO WHERE ID_emprestimo = $id_emprestimo";

mysqli_query($conexao, $query);

header('location:index.php?pagina=emprestimo');
 