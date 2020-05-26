<a class="btn btn-dark" href="?pagina=inserir_leitor" role="button">Inserir Leitor</a>
<br><br>

<table class="table table-hover table-striped" id="leitores">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Leitor</th>
      <th scope="col">RG</th>
      <th scope="col">Endereço</th>
      <th scope="col">E-mail</th>
      <th scope="col">Data de Nasc</th>
      <th scope="col">Telefone</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($linha = mysqli_fetch_array($consulta_leitor)){
      print '<tr><th scope="row">'.$linha['nome_leitor'].'</th>';
      print '<td>'.$linha['rg_leitor'].'</td>';
      print '<td>'.$linha['endereco_leitor'].'</td>';
      print '<td>'.$linha['email_leitor'].'</td>';
      print '<td style="text-align:center">'.$linha['data_nascimento'].'</td>';
      print '<td style="text-align:center">'.$linha['telefone_leitor'].'</td>';
      ?>
      <td><a href="?pagina=inserir_leitor&editar=<?php echo $linha['id_leitor']; ?>"><center><i class="fas fa-user-edit"></i></center></a></td>

      <td><a href="deleta_leitor.php?id_leitor=<?php echo $linha['id_leitor']; ?>"><center><i class="fas fa-trash-alt"></i></center></a></td></tr>
    
    <?php
      }
    ?>

  </tbody>
</table>