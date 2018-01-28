<html>
	<head>
		<link href="/DesafioProdutos/public/css/custom.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/js/bootstrap.min.js" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
	<div class="col-lg-8">
		<h1>Listagem de produtos</h1>
		<br>
		<a href="/DesafioProdutos/public/produtoCadastro" class="btn btn-info" role="button">Novo</a>
		<br><br>
		<form action="/DesafioProdutos/public/produtos/busca">
			<div class="form-group col-lg-6">
				<label>Pesquisar Produtos:</label>
		    	<input type="text" class="form-control" id="buscaProduto" name="buscaProduto">
		    </div>
		    <div class="form-group col-lg-3">
				<select name="tipoBusca" class="form-control">
					<option value="nome">Nome</option>
					<option value="categoria">Categoria</option>
				</select>
				<br>
				<input type="submit" class="btn btn-info"  value="Buscar">
			</div>
			
		</form>
		<br>

		<table class="table table-striped">
			<tr>
		      <th scope="col">#</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Descrição</th>
		      <th scope="col">Foto</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
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
	</div>
	</body>
</html>