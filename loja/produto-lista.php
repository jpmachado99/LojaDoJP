<?php 
	include("cabecalho.php"); 
 	include("conecta.php"); 
 	include("banco-produto.php");  

?>

<table class="table table-striped table-bordered">

	<?php
	$produtos = listaProdutos($conexao);
	foreach($produtos as $produto) :
	?>

	    <tr>
	        <td><?=$produto['nome'] ?></td>
	        <td>R$ <?=$produto['preco'] ?></td>
	        <td><?=substr($produto['descricao'], 0, 40) ?></td>
			<td><?=$produto['categoria_nome'] ?></td>
			<td><a class="btn btn-warning" href="produto-altera_formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
	        <td>
		        <form action="remove-produto.php" method="post">
	            	<input type="hidden" name="id" value="<?=$produto['id']?>" />
	            	<button class="btn btn-danger">Remover</button>
	        	</form>
	        </td>
	    </tr>

	<?php endforeach ?>
</table>

<?php include("rodape.php"); ?>