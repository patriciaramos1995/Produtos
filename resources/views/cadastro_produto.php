<html>
	<head>
		<link href="/DesafioProdutos/public/css/custom.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/DesafioProdutos/public/js/bootstrap.min.js" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
		<div class="col-lg-6">
			<h1>Informações do produto:</h1>
			<br>
		<form action="/DesafioProdutos/public/produtos/adiciona<?= isset($produto) ? '/'.$produto->id : ''?>" enctype="multipart/form-data" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
		  <div class="form-group">
		    <label for="inputNomeProduto">Nome do produto:</label>
		    <input type="text" class="form-control" id="inputNomeProduto" name="inputNomeProduto" value="<?=isset($produto) ? $produto->nome: ""?>">
		  </div>
		  <div class="form-group">
		    <label for="inputDescricaoProduto">Descrição do produto:</label>
		    <input type="text" class="form-control" id="inputDescricaoProduto" name="inputDescricaoProduto" value="<?=isset($produto) ? $produto->descricao: ""?>">
		  </div>
		  <div class="form-group">
		  	  <label for="selectCategorias">Foto:</label><br>
	    	  <input type="file" id="inputFoto" name="inputFoto">
    	  </div>
    	  <div class="form-group">
		    <label for="selectCategorias">Categorias:</label>
		    <select multiple="multiple" class="form-control" id="selectCategorias" name="selectCategorias[]">
		    	<?php foreach($categorias as $c): 

		    		if(isset($categoria_produto)){
						$json = json_encode($categoria_produto);

		    			if(strpos($json, 'categoria_id":'.$c->id.'') !== false){
		    			?>
		    				<option value="<?=$c->id?>" selected><?=$c->nome?></option>
		    			<?php
			    		}
			    		else{
			    			?>
			    			<option value="<?=$c->id?>"><?=$c->nome?></option>
			    			<?php
			    		}
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
		</div>
	</body>
</html>