<div class="container">
  <div class="row">
    <div class="col">
  
    </div>
    <div class="col-6">
      
    	<div class="alert alert-secondary" role="alert">
  
    		<?php if(!isset($_GET['editar'])){ ?>

		   <h2 style="text-align:center">Inserir Livro</h2><br>
			<form  method="post" action="processa_livro.php">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Nome do novo livro:</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" name="nome_livro" placeholder="Insira o nome do livro" required>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Gênero:</label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="genero_livro" placeholder="Insira o Gênero" required>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Editora: </label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="editora_livro" placeholder="Insira a Editora" required>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Autor: </label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="autor_livro" placeholder="Insira o nome do Autor" required>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Quantidade de Exemplares: </label>
			    <input type="number" class="form-control" id="formGroupExampleInput2" name="quant_exemp" placeholder="Insira a Quantidade de Exemplares" required><br>
			   <center> <input class="btn btn-dark" type="submit" value="Inserir"></center>
			  </div>
			</form>

	<?php } else{ ?>
		<?php while($linha = mysqli_fetch_array($consulta_livro)){ ?>
			<?php if($linha['id_livro'] == $_GET['editar']){ ?>

			<form  method="post" action="edita_livro.php">
		 		<div class="form-group">
		 		<input type= "hidden" name="id_livro" value="<?php print $linha['id_livro']; ?>">
		    	<label for="formGroupExampleInput">Nome do livro:</label>
		    	<input type="text" class="form-control" id="formGroupExampleInput" name="nome_livro" placeholder="Insira o nome do livro" value="<?php print $linha['nome_livro']; ?>">
		 		</div>
		 		<div class="form-group">
		 		<input type= "hidden" name="id_livro" value="<?php print $linha['id_livro']; ?>">
			    <label for="formGroupExampleInput2">Gênero:</label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="genero_livro" placeholder="Insira o Gênero" value="<?php print $linha['genero_livro']; ?>">
			  </div>
			  <div class="form-group">
			  	<input type= "hidden" name="id_livro" value="<?php print $linha['id_livro']; ?>">
			    <label for="formGroupExampleInput2">Editora: </label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="editora_livro" placeholder="Insira a Editora" value="<?php print $linha['editora_livro']; ?>">
			  </div>
			  <div class="form-group">
			  	<input type= "hidden" name="id_livro" value="<?php print $linha['id_livro']; ?>">
			    <label for="formGroupExampleInput2">Autor: </label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="autor_livro" placeholder="Insira o nome do Autor" value="<?php print $linha['autor_livro']; ?>">
			  </div>
			  <div class="form-group">
			  	<input type= "hidden" name="id_livro" value="<?php print $linha['id_livro']; ?>">
			    <label for="formGroupExampleInput2">Quantidade de Exemplares: </label>
			    <input type="number" class="form-control" id="formGroupExampleInput2" name="quant_exemp" placeholder="Insira a Quantidade de Exemplares" value="<?php print $linha['quant_exemp']; ?>"> <br>
			    <center><input class="btn btn-dark" type="submit" value="inserir"></center>
			  </div>
			</form>
			<?php } ?>
		<?php } ?>
	<?php } ?>

		</div>

    	

    </div>
    <div class="col">
      
    </div>
  </div>
</div>