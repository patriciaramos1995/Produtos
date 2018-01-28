<html>
	<head>
		<link href="/DesafioProdutos/public/css/custom.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/js/bootstrap.min.js" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
		<h1>Nova Categoria</h1>
		<form action="/DesafioProdutos/public/categorias/adiciona<?= isset($categoria) ? '/'.$categoria->id : ''?>" enctype="multipart/form-data">
		
		  <div class="form-group">
		    <label for="inputNomeCategoria">Nome da Categoria:</label>
		    <input type="text" class="form-control" id="inputNomeCategoria" name="inputNomeCategoria" value="<?=isset($categoria) ? $categoria->nome: ""?>">
		  </div>
		  <br>
		  <div class="form-group">
	    	  <input type="file" id="inputFoto" name="inputFoto" value="<?=isset($categoria) ? $categoria->foto :''?>">
    	  </div>
    	  <br>
    	  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</body>
</html>
