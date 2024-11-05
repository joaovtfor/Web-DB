<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <b>
      <font color="#0000FF">Lista de TURMAS</font>
   </b>
   </br> </br>

   <table border="1">
      <tr>
         <td><b>Código</b></td>
         <td><b>Nome</b></td>
         <td><b>Turno</b></td>
      </tr>

      <?php
      include_once("../_conexao.php");
      $conn = conectaBD();

      $turmas = "SELECT * FROM Turma";
      $resultado = mysqli_query($conn, $turmas);

      while ($i = mysqli_fetch_assoc($resultado)) {
         ?>
         <tr>
            <td><?php echo $i['ID']; ?></td>
            <td><?php echo $i['Nome']; ?></td>
            <td><?php echo $i['Turno']; ?></td>

            <td><a
                  href="<?php echo "TurmaFormEditar.php?var_cod=" . $i['ID'] . "&var_nome=" . $i['Nome'] . "&var_turno=" . $i['Turno'] ?>">Alterar</a>
            </td>
            <td><a href="<?php echo "../_delete.php?var_cod=" . $i['ID'] . "&tabela=Turma" ?>">Excluir</a></td>
         </tr>
         <?php
      }
      ?>
   </table>

   <h4><a href="TurmaFormInsert.html">Cadastrar nova Turma</a></h4>

</BODY>

</HTML>