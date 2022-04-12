<?php
session_start();
require_once'conexao.php';


$usu = $_POST['use'];
$senha = $_POST['senha'];


$consulta = "SELECT usu FROM clientes WHERE usu = '$usu'";
$mysql = mysqli_query($conn, $consulta);
$tes = mysqli_fetch_assoc($mysql);

if ($tes > 0) {
	$consulta2 = "SELECT usu FROM clientes WHERE usu = '$usu' and senha = '$senha'";
	$mysql2 = mysqli_query($conn, $consulta2);
	$tes2 = mysqli_fetch_assoc($mysql2);
	if ($tes2 > 0) {
		$_SESSION['pane'] = "$usu";
		header('location: painel12.php');
		$_SESSION['confirmacao'] = true;
	}else{
		$_SESSION['scor'] = "<input id='csenha2' type='password' name='senha' placeholder='Senha' required>";
		$_SESSION['atencion'] = "<div id='erro'><p id='avisa'>Desculpe! Senha inválida!</p></div>";
		header('location: login.php');
	}
	
	
	
}else{
	$_SESSION['ucor'] = "<input id='csenha2' type='text' name='use' placeholder='Login' required>";
	$_SESSION['atencion'] = "<div id='erro'><p id='avisa'>Desculpe! Usuário inválido!</p></div>";
	header('location: login.php');
}






  ?>