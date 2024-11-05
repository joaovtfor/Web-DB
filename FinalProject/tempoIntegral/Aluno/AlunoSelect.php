<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <b>
      <font color="#0000FF">Lista de ALUNOS</font>
   </b>
   </br> </br>

   <table border="1">
      <tr>
         <td><b>Código</b></td>
         <td><b>Nome</b></td>
         <td><b>Matrícula</b></td>
         <td><b>Observações</b></td>
         <td><b>Escola</b></td>
      </tr>

      <?php
      include_once("../_conexao.php");
      $conn = conectaBD();

      $alunos = "SELECT * FROM Aluno";
      $resultado = mysqli_query($conn, $alunos);

      while ($i = mysqli_fetch_assoc($resultado)) {
         ?>
         <tr>
            <td><?php echo $i['ID']; ?></td>
            <td><?php echo $i['Nome']; ?></td>
            <td><?php echo $i['Matricula']; ?></td>
            <td><?php echo $i['Observacoes']; ?></td>
            <td><?php echo $i['Escola_ID']; ?></td>

            <td><a
                  href="<?php echo "AlunoFormEditar.php?var_cod=" . $i['ID'] . "&var_nome=" . $i['Nome'] . "&var_matricula=" . $i['Matricula'] . "&var_observacoes=" . $i['Observacoes'] . "&var_escola=" . $i['Escola_ID'] ?>">Alterar</a>
            </td>
            <td><a href="<?php echo "../_delete.php?var_cod=" . $i['ID'] . "&tabela=Aluno" ?>">Excluir</a></td>
         </tr>
         <?php
      }
      ?>
   </table>

   <h4><a href="AlunoFormInsert.html">Cadastrar novo Aluno(a)</a></h4>

</BODY>

</HTML>