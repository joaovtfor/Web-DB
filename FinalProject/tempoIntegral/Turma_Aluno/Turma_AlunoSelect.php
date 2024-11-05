<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <b>
      <font color="#0000FF">Lista de vínculo Turma_Aluno</font>
   </b>
   </br> </br>

   <table border="1">
      <tr>
         <td><b>Código do Aluno</b></td>
         <td><b>Código da Turma</b></td>
      </tr>

      <?php
      include_once("../_conexao.php");
      $conn = conectaBD();

      $turmas = "SELECT * FROM Turma_Aluno";
      $resultado = mysqli_query($conn, $turmas);

      while ($i = mysqli_fetch_assoc($resultado)) {
         ?>
         <tr>
            <td><?php echo $i['Aluno_ID']; ?></td>
            <td><?php echo $i['Turma_ID']; ?></td>

            <td><a
                  href="<?php echo "Turma_AlunoFormEditar.php?var_aluno=" . $i['Aluno_ID'] . "&var_turma=" . $i['Turma_ID'] ?>">Alterar</a>
            </td>
            <td><a href="<?php echo "../_delete.php?var_aluno=" . $i['Aluno_ID'] . "&var_turma=" . $i['Turma_ID'] . "&tabela=Turma_aluno" ?>">Excluir</a></td>
         </tr>
         <?php
      }
      ?>
   </table>

   <h4><a href="Turma_AlunoFormInsert.html">Cadastrar nova vínculo Turma_Aluno</a></h4>

</BODY>

</HTML>