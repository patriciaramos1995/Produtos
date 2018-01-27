<html>
	<body>
		<form action="/DesafioProdutos/public/produtos/adiciona<?= isset($produto) ? '/'.$produto->id : ''?>" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="inputNomeProduto">Nome do produto:</label>
		    <input type="text" class="form-control" id="inputNomeProduto" name="inputNomeProduto" value="<?=isset($produto) ? $produto->nome: ""?>">
		  </div>
		  <div class="form-group">
		    <label for="inputDescricaoProduto">Descrição do produto:</label>
		    <input type="text" class="form-control" id="inputDescricaoProduto" name="inputDescricaoProduto" value="<?=isset($produto) ? $produto->descricao: ""?>">
		  </div>
		  <div class="form-group">
	    	  <input type="file" id="inputFoto" name="inputFoto">
    	  </div>
    	  <div class="form-group">
		    <label for="selectCategorias">Categoria</label>
		    <select multiple="multiple" class="form-control" id="selectCategorias" name="selectCategorias[]">
		    	<?php foreach($categorias as $c): 

		    		if(isset($categoria_produto)){

		    		foreach($categoria_produto as $categoria):

		    		if($categoria->categoria_id == $c->id){
		    			?>
		    				<option value="<?=$c->id?>" selected><?=$c->nome?></option>
		    			<?php
		    		}else{
		    		?>	
		      			<option value="<?=$c->id?>"><?=$c->nome?></option>
		      			<?php 
		      		}
		      		endforeach; 
		      	}else{
		      		?>
		      			<option value="<?=$c->id?>"><?=$c->nome?></option>
		      		<?php
		      	}
		      	endforeach; 
		      		?>
		    </select>
		  </div>    	  
		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</body>
</html>