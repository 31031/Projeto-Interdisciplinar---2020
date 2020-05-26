<?php 

include 'db.php';
 
$funcionario = addslashes($_POST['funcionario']);
$senha = md5($_POST['senha']);



$query = "SELECT * FROM FUNCIONARIO WHERE FUNCIONARIO = '$funcionario' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();

	$_SESSION['login'] = true;
	$_SESSION['funcionario'] = $funcionario;

	header('location:index.php');
}
else{
	header('location:index.php?erro');
}

?> 