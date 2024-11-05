<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <b>
      <font color="#0000FF">Lista de ESCOLAS</font>
   </b>
   </br> </br>

   <table border="1">
      <tr>
         <td><b>Código</b></td>
         <td><b>Nome</b></td>
      </tr>

      <?php
      include_once("../_conexao.php");
      $conn = conectaBD();

      $turmas = "SELECT * FROM Escola";
      $resultado = mysqli_query($conn, $turmas);

      while ($i = mysqli_fetch_assoc($resultado)) {
         ?>
         <tr>
            <td><?php echo $i['ID']; ?></td>
            <td><?php echo $i['Nome']; ?></td>

            <td><a
                  href="<?php echo "EscolaFormEditar.php?var_cod=" . $i['ID'] . "&var_Nome=" . $i['Nome'] ?>">Alterar</a>
            </td>
            <td><a href="<?php echo "../_delete.php?var_cod=" . $i['ID'] . "&tabela=Escola" ?>">Excluir</a></td>
         </tr>
         <?php
      }
      ?>
   </table>

   <h4><a href="EscolaFormInsert.html">Cadastrar nova ESCOLA</a></h4>

</BODY>

</HTML>