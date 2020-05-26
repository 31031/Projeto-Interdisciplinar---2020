

<div class="container">
  <div class="row">
    <div class="col">
    
    </div>
    <div class="col-6 text-center">
    	<div class="alert alert-secondary" role="alert">
  			<h1 style="text-align:center">Bem-vindo</h1><br>

			<form method="post" action="login.php">
				<input type="text" name="funcionario" placeholder="Nome do funcionário" class="form-control" required>
				<br>
				<input type="password" name="senha" placeholder="Digite a senha" class="form-control" required>
				<br>
				<input type="submit" value="Entrar" class="btn btn-primary">
			</form>
			<br>

		<?php if(isset($_GET['erro'])){ ?>

			<div class="alert alert-danger" role="alert">
				Usuário e/ou senha inválidos.
			</div>
		<?php } ?>

	    </div>
		</div>
    		
	    <div class="col">
      
    </div>
  </div>
</div>