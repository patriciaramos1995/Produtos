<html>
	<body>
		<h1>listagem de produtos</h1>

		<table>
			<?php foreach($produtos as $p): ?>
				<tr>
					<td><?= $p->id ?></td>
					<td><?= $p->nome ?></td>
					<td><?= $p->descricao ?></td>
					<td><?= $p->foto ?></td>
				</tr>
			<?php endforeach ?>
		</table>

	</body>
</html>