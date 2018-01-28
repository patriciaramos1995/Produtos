<html>
	<body>

		<h1>listagem de produtos</h1>
		<a href="/DesafioProdutos/public/produtoCadastro" class="btn btn-info" role="button">Novo</a>

		<table>
			<?php foreach($produtos as $p): ?>
				<tr>
					<td><?= $p->id ?></td>
					<td><?= $p->nome ?></td>
					<td><?= $p->descricao ?></td>
					<td><?= $p->foto ?></td>
					<td><a href="/DesafioProdutos/public/produtos/edita/<?=$p->id?>">Editar</a></td>
					<td><a href="/DesafioProdutos/public/produtos/exclui/<?=$p->id?>">Excluir</a></td>
				</tr>
			<?php endforeach ?>
		</table>

	</body>
</html>