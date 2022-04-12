<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>MOTO PEÇAS CAPITAL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="_css/css3/minn.css" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1370px)" href="_css/css3/mediuuu.css" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1990px)" href="_css/css3/large.css" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="_css/divminn.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1370px" href="_css/div3.css">
	<script type="text/javascript" src="_js/file.js"></script>
	
</head>
<body>
	<div id="geral">

	<header>
		<div id="cabecalho">
		<img id="logo" src="_imagens/cooltext305064461102175.gif">
		<img  id="icon" src="_imagens/home.png">
		<nav>
			<p onmousemove="mudafoto(2)" onmouseout="mudafoto(5)"><a href="index.php">Home</a></p>
			<p onmousemove="mudafoto(3)" onmouseout="mudafoto(5)"><a href="pecas.php">Peças</a></p>
			<p onmousemove="mudafoto(5)" onmouseout="mudafoto(5)"><a href="cadastro.php">Cadastro</a></p>
			<p onmousemove="mudafoto(6)" onmouseout="mudafoto(5)"><a href="login.php">Login</p>
			<p onmousemove="mudafoto(7)" onmouseout="mudafoto(5)"><a href="quem.php">Quem somos</a></p>
		</nav>
		</div>
	</header>
	<section>
		<form method="post" action="processocad.php">
			<div id="aviso">
			<p id="avisa"><?php echo $_SESSION['aviso']?? "  "; ?></p>
			</div><br>
			<div id="link">
			<p id="avisa2"><?php echo $_SESSION['link']?? "  "; ?></p>
			</div>
			<input type="text" name="nome" placeholder="Nome completo" required><br>
			<input type="email" name="email" placeholder="E-mail" required><br>
			<input type="tel" name="fone" placeholder="Telefone"><br>
			<?php  echo $_SESSION['login']?? "<input type='text' name='usu' placeholder='Login' required>" ?><br>
			<input type="password" name="senha" placeholder="Senha" required><br>
			<?php  echo $_SESSION['cs']?? "<input id='csenha' type='password' name='csenha' placeholder='Confirma senha' required>"; ?><br>
			<input id="sub" type="submit" value="Cadastrar">
		</form>
		
		
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