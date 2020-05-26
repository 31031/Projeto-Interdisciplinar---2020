<?php

include 'db.php';

$id_filial = $_GET['id_filial'];


$query = "DELETE FROM FILIAL WHERE id_filial = '$id_filial'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=filial');
 