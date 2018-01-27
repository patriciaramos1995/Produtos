<html>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="inputNomeCategoria">Nome do produto:</label>
		    <input type="text" class="form-control" id="inputNomeCategoria">
		  </div>
		  <div class="form-group">
			  {{ csrf_field() }}
	    	  <input type="file" name="photo">
    	  </div>
    	  <div class="form-group">
		    <label for="selectCategorias">Categoria</label>
		    <select multiple class="form-control" id="selectCategorias">
		      <option>1</option>
		      <option>2</option>
		      <option>3</option>
		      <option>4</option>
		      <option>5</option>
		    </select>
		  </div>    	  
		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</body>
</html>