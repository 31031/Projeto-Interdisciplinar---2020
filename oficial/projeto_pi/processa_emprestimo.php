<?php

include'db.php';

$id_leitor = $_POST['escolha_leitor'];
$id_livro  = $_POST['escolha_livro'];

 $data_atual = date("Y/m/d");

$mes_entrega = 0;
$mes = date('m');
$ano = date('Y');
if($mes == 12){
  $mes_entrega = $mes - 11;
  $ano++;
}else{
  $mes_entrega = $mes + 1;
}

$data_entrega = date("$ano/$mes_entrega/d");


$query = "INSERT INTO EMPRESTIMO(id_leitor, id_livro, data_atual, data_entrega) VALUES($id_leitor, $id_livro, '$data_atual', '$data_entrega')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=emprestimo');