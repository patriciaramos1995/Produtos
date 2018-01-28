<html>
	<head>
		<link href="/DesafioProdutos/public/css/custom.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/js/bootstrap.min.js" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
	<div class="col-lg-8">
		<h1>Listagem de Categorias</h1>
		<br>
		<a href="/DesafioProdutos/public/categoriaCadastro" class="btn btn-info" role="button">Novo</a>
		<br><br>
		<form action="/DesafioProdutos/public/categorias/busca">
			<div class="form-group col-lg-6">
				<label>Pesquisar Categorias:</label>
		    	<input type="text" class="form-control" id="buscaCategoria" name="buscaCategoria">
		    	<br>
		    	<input type="submit" class="btn btn-info"  value="Buscar">
		    </div>
			
		</form>
		<br>
		<table class="table table-striped">
			<tr>
		      <th scope="col">#</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Foto</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
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
	</div>
	</body>
</html>