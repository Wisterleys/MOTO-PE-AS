<?php
 session_start();
require_once'conexao.php';

	if (!$_SESSION['confirmacao']) {
		$_SESSION['atencion'] = "<div id='erro'><p id='avisa'>Precisa logar para acessar o Painel</p></div>";
		header('location: login.php');
	}else{
		$clien = $_SESSION['pane'];
		$consulta = "SELECT*FROM clientes WHERE usu = '$clien'";
		$mysqli = mysqli_query($conn, $consulta);
	}
?>	
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>MOTO PEÇAS CAPITAL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="_css/css3/minn.css" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1370px)" href="_css/css3/mediuuu.css" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1990px)" href="_css/css3/large.css" />
	<style type="text/css">
		div#quem h3{
			color: gold;
			font-size: 20pt;
		}
		p#marquee{
			position: relative;
			top: -150px;
			left: 400px;
			height: 350px;
			width: 250px;
			
		}
	</style>
	<script type="text/javascript" src="_js/file.js"></script>
</head>
<body>
	<div id="geral">
		
	<header>
		<div id="cabecalho">
		<img id="logo" src="_imagens/cooltext305064461102175.gif">
		<img  id="icon" src="_imagens/home.png">
		<nav>
			<p onmousemove="mudafoto(2)" onmouseout="mudafoto(4)"><a href="index.php">Home</a></p>
			<p onmousemove="mudafoto(3)" onmouseout="mudafoto(4)"><a href="pecas.php">Peças</a></p>
			<p onmousemove="mudafoto(4)" onmouseout="mudafoto(4)"><a href="painel12.php">Painel do Usuário</a></p>
			<p onmousemove="mudafoto(5)" onmouseout="mudafoto(4)"><a href="cadastro.php">Cadastro</a></p>
			<p onmousemove="mudafoto(6)" onmouseout="mudafoto(4)"><a href="login.php">Login</p>
			<p onmousemove="mudafoto(7)" onmouseout="mudafoto(4)"><a href="quem.php">Quem somos</a></p>
		</nav>
		</div>
	</header>
	<section>
		<div id="quem">
		<p><a href='sair.php'>Sair</a></p><br><br>
		<h1><p><?php echo date("d / m / Y"); ?><br></p> </h1><br>
		<?php while($dado = $mysqli->fetch_array()){ ?>
		<h3 id="teste">Olá, <?php echo $dado['nome']; ?></h3>
		<p id="marquee"><marquee><?php echo " $dado[nome] <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  $dado[fone] <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  $dado[email]"; ?></marquee></p>
		<?php } ?>
	</div>
	</section>
 
<footer id="roda">
	<center>
	<p><a href="" target="_blank"><img src="_imagens/telefone.png" width="80"> </a></p>
	<p><a href="" target="_blank"><img src="_imagens/whatsapp.png" width="200"> </a></p>
	<p><a href="" target="_blank"><img src="_imagens/facebook.png" width="80"> </a></p>
	</center>
	<p id="cop">&copy;Copyright 2018 - by Grupo <br/>
</footer>
</div>
</body>
</html>