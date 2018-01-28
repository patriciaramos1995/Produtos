<html>
	<body>

		<h1>listagem de Categorias</h1>
		<a href="/DesafioProdutos/public/categoriaCadastro" class="btn btn-info" role="button">Novo</a>
		<br>
		<form action="/DesafioProdutos/public/categorias/busca">
			<input type="text" id="buscaCategoria" name="buscaCategoria">
			<input type="submit" class="btn btn-info"  value="Buscar">
		<form>
		<br>
		<table>
			<?php foreach($categorias as $c): ?>
				<tr>
					<td><?= $c->id ?></td>
					<td><?= $c->nome ?></td>
					<td><?= $c->foto ?></td>
					<td><a href="/DesafioProdutos/public/categorias/edita/<?=$c->id?>">Editar</a></td>
					<td><a href="/DesafioProdutos/public/categorias/exclui/<?=$c->id?>">Excluir</a></td>
				</tr>
			<?php endforeach ?>
		</table>

	</body>
</html>