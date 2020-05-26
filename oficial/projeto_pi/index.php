<?php
//26/05/2020 última versão atualizada
// programadores : Bernardo Blom, Breno Henrique, Matheus Sousa, Paulo Gessy, Willian Santos, Yuri Araújo 
session_start();

//inclusão do banco de dados
include 'db.php';


//inclusão do cabeçalho
include 'header.php';

//insercão do admin no banco de dados
$usuario = "SELECT `ID` FROM `funcionario`";
mysqli_query($conexao, $query);

if($usuario == 0){
	$query = "INSERT INTO FUNCIONARIO(id,funcionario, senha) VALUES('1', 'admin', '202cb962ac59075b964b07152d234b70')";
	mysqli_query($conexao, $query);
}

//login
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'livro';
	}
}
else{
	$pagina = 'home';
}

//inclusão do conteúdo
switch (@$pagina){
	case'livro':include'views/livro.php'; break;
	case'inserir_livro':include'views/inserir_livro.php'; break;
	case'leitor':include'views/leitor.php'; break;
	case'inserir_leitor':include'views/inserir_leitor.php'; break;
	case'emprestimo':include'views/emprestimo.php'; break;
	case'inserir_emprestimo':include'views/inserir_emprestimo.php'; break;
	case'funcionario':include'views/funcionario.php'; break;
	case'inserir_funcionario':include'views/inserir_funcionario.php'; break;
	case'filial':include'views/filial.php'; break;
	case'inserir_filial':include'views/inserir_filial.php'; break;
	default:include 'views/home.php';break;
}

//inclusão do rodapé
include 'footer.php';
 
