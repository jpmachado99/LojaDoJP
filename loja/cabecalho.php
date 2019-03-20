<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php"); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loja do JP</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- <link href="css/loja.css" rel="stylesheet"> -->
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Menu</a>
			</div>

			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adicionar Produtos</a></li>
					<li><a href="produto-lista.php">Lista de Produtos</a></li>
					<!-- <li><a href="sobre.php">Sobre</a></li> -->
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		
		<div class="principal">