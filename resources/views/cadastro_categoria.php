<html>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="inputNomeCategoria">Nome da Categoria:</label>
		    <input type="text" class="form-control" id="inputNomeCategoria">
		  </div>
		  <div class="form-group">
			  {{ csrf_field() }}
	    	  <input type="file" name="photo">
    	  </div>
    	  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</body>
</html>