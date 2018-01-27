<html>
	<body>
		<form action="/DesafioProdutos/public/produtos/adiciona" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="inputNomeProduto">Nome do produto:</label>
		    <input type="text" class="form-control" id="inputNomeProduto" name="inputNomeProduto">
		  </div>
		  <div class="form-group">
		    <label for="inputDescricaoProduto">Descrição do produto:</label>
		    <input type="text" class="form-control" id="inputDescricaoProduto" name="inputDescricaoProduto">
		  </div>
		  <div class="form-group">
	    	  <input type="file" id="inputFoto" name="inputFoto">
    	  </div>
    	  <div class="form-group">
		    <label for="selectCategorias">Categoria</label>
		    <select multiple class="form-control" id="selectCategorias" name="selectCategorias">
		    	<?php foreach($categorias as $c): ?>	
		      		<option value="<?=$c->id?>"><?=$c->nome?></option>
		      	<?php endforeach ?>
		    </select>
		  </div>    	  
		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</body>
</html>