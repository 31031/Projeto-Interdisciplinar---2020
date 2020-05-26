<a class="btn btn-dark" href="?pagina=inserir_emprestimo" role="button">Inserir Empréstimo</a>
<br><br>

<table class="table table-hover table-striped" id="emprestimo">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome do Leitor</th>
      <th scope="col">Nome do Livro</th>
      <th scope="col"><center>Data de Empréstimo</center></th>
      <th scope="col"><center>Data de Entrega</center></th>
      <th scope="col"><center>Deletar</center></th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  $data_atual = date("d/m/Y");

  $mes_entrega = 0;
  $mes = date('m');
  $ano = date('Y');
  $dia = date('d');
  if($mes == 12){
    $mes_entrega = $mes - 11;
    $ano++;
  }else{
    $mes_entrega = $mes + 1;
  }
  if($dia == 31){
    $dia ==30;
  }

  $data_entrega = date("$dia/$mes_entrega/$ano");


    while($linha = mysqli_fetch_array($consulta_emprestimo)){
      print'
    <tr>
      <th scope="row">'.$linha['nome_leitor'].'</th>';
      print '<td>'.$linha['nome_livro'].'</td>';
      print '<td><center>'.$data_atual.'</center></td>';
      print '<td><center>'.$data_entrega.'</center></td>';
      ?>
      <td><center><a href="deleta_emprestimo.php?id_emprestimo=<?php echo $linha['id_emprestimo']; ?>"><i class="fas fa-trash-alt"></i></a></center></td>
    </tr>
    
    <?php
      }
    ?>
    
  </tbody>
</table>