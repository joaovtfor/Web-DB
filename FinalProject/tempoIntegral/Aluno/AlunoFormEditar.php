<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<body>
   <?php
   $get1 = filter_input(INPUT_GET, "var_cod");
   $get2 = filter_input(INPUT_GET, "var_nome");
   $get3 = filter_input(INPUT_GET, "var_matricula");
   $get4 = filter_input(INPUT_GET, "var_observacoes");
   $get5 = filter_input(INPUT_GET, "var_escola");
   ?>

   <b>
      <font color="#0000FF">Tela de Edição de ALUNOS</font>
   </b>
   </br> </br>

   <form action="../_update.php" method="post">

      <input type=hidden name=tabela value="aluno">

      <b> Código:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1 ?>" readonly>
      </br></br>

      <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get2 ?>">
      </br></br>

      <b> Matrícula:</b> <input type="text" name="input_matricula" size="15" value="<?php echo $get3 ?>">
      </br></br>

      <b> Observações:</b> <input type="text" name="input_observacoes" size="500" value="<?php echo $get4 ?>">
      </br></br>

      <b> Código da Escola:</b> <input type="text" name="input_escola" size="30" value="<?php echo $get5 ?>">
      </br></br>

      <input type="submit" value="Salvar">

   </form>

</body>

</HTML>