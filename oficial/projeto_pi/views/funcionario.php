<a class="btn btn-dark" href="?pagina=inserir_funcionario" role="button">Inserir Funcionário</a>
<br><br>

<table class="table table-hover table-striped" id="funcionario">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FUNCIONÁRIO</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($linha = mysqli_fetch_array($consulta_funcionario)){
      print '<tr><th scope="row">'.$linha['ID'].'</th>';
      print '<td>'.$linha['FUNCIONARIO'].'</td>';
      ?>
      <?php
      if($_SESSION['funcionario'] == 'admin'){

        if ($linha['ID'] != 1) {

          ?><td><a href="deleta_funcionario.php?ID=<?php echo $linha['ID']; ?>"><i class="fas fa-trash-alt"></i></a></td></tr>

        <?php
          }else print'<td>----------</td></tr>';

        }else print'<td>----------</td></tr>';
      };
      ?>
 
  </tbody>
</table>
