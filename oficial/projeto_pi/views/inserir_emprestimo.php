 <div class="container">
  <div class="row">
    <div class="col">
    
    </div>
    <div class="col-6">
      
      <div class="alert alert-secondary" role="alert">
  
      <h2 style="text-align:center">Inserir Empréstimo</h2><br>
      <form  method="post" action="processa_emprestimo.php">
       <div class="form-group">
          <label for="exampleFormControlSelect1">Leitor</label>
          <select class="form-control" id="exampleFormControlSelect1" name="escolha_leitor" required>
            <option>Selecione um leitor</option>
            <?php
            
            while($linha = mysqli_fetch_array($consulta_leitor)){
            print '<option value="'.$linha['id_leitor'].'">'.$linha['nome_leitor'].'</option>';
          }
          ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Livros</label>
          <select class="form-control" id="exampleFormControlSelect1" name="escolha_livro" required>
           <option>Selecione um livro</option>
          <?php
          while($linha = mysqli_fetch_array($consulta_livro)){

            if ($linha['quant_exemp'] != 0) {
              print '<option value="'.$linha['id_livro'].'">'.$linha['nome_livro'].'</option>';
              print $linha['quant_exemp'] -= 1; 
            }else{
              print '<option value="'.$linha['id_livro'].'" disabled>'.$linha['nome_livro'].'</option>';
            }
            
          }
          ?>
          </select>
          <br>
          <center><input class="btn btn-dark" type="submit" value="Emprestar"></center>
        </div>
        
       </form>

      </div>

    </div>
    <div class="col">
    
    </div>
  </div>
</div>