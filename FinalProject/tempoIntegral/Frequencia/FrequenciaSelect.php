<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <b>
      <font color="#0000FF">Lista de FREQUÊNCIAS</font>
   </b>
   </br> </br>

   <table border="1">
      <tr>
         <td><b>Código</b></td>
         <td><b>Data</b></td>
         <td><b>Status</b></td>
         <td><b>Código de Aluno</b></td>
         <td><b>Código da Turma</b></td>
      </tr>

      <?php
      include_once("../_conexao.php");
      $conn = conectaBD();

      $frequencias = "SELECT * FROM Chamada_frequencia";
      $resultado = mysqli_query($conn, $frequencias);

      while ($i = mysqli_fetch_assoc($resultado)) {
         ?>
         <tr>
            <td><?php echo $i['ID']; ?></td>
            <td><?php echo $i['Data']; ?></td>
            <td><?php echo $i['Status']; ?></td>
            <td><?php echo $i['Aluno_ID']; ?></td>
            <td><?php echo $i['Turma_ID']; ?></td>

            <td><a
                  href="<?php echo "FrequenciaFormEditar.php?var_cod=" . $i['ID'] . "&var_data=" . $i['Data'] . "&var_status=" . $i['Status'] . "&var_aluno=" . $i['Aluno_ID'] . "&var_turma=" . $i['Turma_ID'] ?>">Alterar</a>
            </td>
            <td><a href="<?php echo "../_delete.php?var_cod=" . $i['ID'] . "&tabela=Chamada_frequencia" ?>">Excluir</a></td>
         </tr>
         <?php
      }
      ?>
   </table>

   <h4><a href="FrequenciaFormInsert.html">Cadastrar nova Frequência</a></h4>

</BODY>

</HTML>