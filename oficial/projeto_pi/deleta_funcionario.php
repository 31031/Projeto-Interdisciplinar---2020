<?php

include 'db.php';

$id = $_GET['ID'];


$query = "DELETE FROM FUNCIONARIO WHERE ID = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=funcionario');
 