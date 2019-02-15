<?php include("cabecalho.php"); ?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==true) {
?>
	<p class="alert-success" align="center">Logado com sucesso!</p>
<?php
}	?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==false) {
?>
	<p class="alert-danger" align="center">Usuário ou senha inválida!</p>
<?php
}	?>


		<h1 align="center">Bem vindo!</h1>

		<h3 align="center">Login</h3>
		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>Email:</td>
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
				<tr>
					<td>Senha:</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				<tr>
					<td><button class="btn btn-primary">Login</button></td>
				</tr>
			</table>
		</form>
<?php include("rodape.php"); ?>