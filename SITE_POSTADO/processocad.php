<?php 
session_start();
require_once'conexao.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$usu = $_POST['usu'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];

if ($senha != $csenha) {
	$_SESSION['aviso'] = "<div id='erro'><p id='avisa'>Digite a mesma senha no campo de confirmação</p></div>";
	$_SESSION['cs'] = "<input id='csenha2' type='password' name='csenha' placeholder='Confirma senha' required>";
	header('location: cadastro.php');
}else{
	$consulta = "SELECT*FROM clientes where usu = '$usu'";
	$execut = mysqli_query($conn, $consulta);
	$tes = mysqli_fetch_assoc($execut);
	if ($tes > 0) {
		$_SESSION['login'] = "<input id='csenha2' type='text' name='usu' placeholder='Login' required>";
		$_SESSION['aviso'] = "<div id='erro'><p id='avisa'>Desculpe! Usuário já existe!</p></div>";
		header('location: cadastro.php');
	}else{
		$inseri = "INSERT INTO clientes (nome, email, fone, usu, senha) VALUES ('$nome', '$email', '$fone', '$usu', '$senha')";
		$mysql = mysqli_query($conn, $inseri);
		if (mysqli_insert_id($conn)) {
			$_SESSION['aviso'] = "<div id='certo'><p id='avisa'>Cadastrado com sucesso!</p></div>";
			$_SESSION['link'] = "<div id='certo'><p id='avisa'><a href='login.php'>Clique aqui</a></p></div>";
			header('location: cadastro.php');
		}else{
			$_SESSION['aviso'] = "<div id='erro'><p id='avisa'>Erro! Não foi possível realizar o cadastro!</p></div>";
			header('location: cadastro.php');
		}
		
	}
	
}





?>