<a class="btn btn-dark" href="?pagina=inserir_filial" role="button">Inserir Filial</a>
<br><br>

<table class="table table-hover table-striped" id="filial">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><center>ID</center></th>
      <th scope="col"><center>Filial</center></th>
      <th scope="col"><center>CEP</center></th>
      <th scope="col"><center>Deletar</center></th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($linha = mysqli_fetch_array($consulta_filial)){
      print '<tr><th scope="row"><center>'.$linha['id_filial'].'</center></th>';
      print '<td><center>'.$linha['nome_filial'].'</center></td>';
      print '<td><center>'.$linha['endereco_filial'].'</center></td>';
      ?>
      <td><center><a href="deleta_filial.php?id_filial=<?php echo $linha['id_filial']; ?>"><i class="fas fa-trash-alt"></i></a></center></td></tr>
    
    <?php
      }
    ?>

  </tbody>
</table>
