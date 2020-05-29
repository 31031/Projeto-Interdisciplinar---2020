

<div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col-6">

    	<div class="alert alert-secondary" role="alert">
 
    

    	<h2 style="text-align:center">Inserir Funcionário</h2><br>
				
		<form  method="post" action="processa_funcionario.php">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nome do Funcionário: </label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="funcionario" placeholder="Insira o nome do funcionário" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Senha: </label>
		    <input type="password" class="form-control" id="formGroupExampleInput" name="senha" placeholder="Insira a senha" required>
		  </div>
		    <?php
      		if($_SESSION['funcionario'] == 'admin'){?>
		   <center><input class="btn btn-dark" type="submit" value="Inserir"></center>
		<?php } else if($_SESSION['funcionario'] != 'admin'){
			?>
		    <center><input class="btn btn-dark" type="submit" value="Inserir" disabled></center>
		    <center><p>*NÃO PERMITIDO</p></center>
		<?php } ?>
		</form>

		

		</div>
 
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
