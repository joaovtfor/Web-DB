<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<body>
   <?php
   $get1 = filter_input(INPUT_GET, "var_cod");
   $get2 = filter_input(INPUT_GET, "var_data");
   $get3 = filter_input(INPUT_GET, "var_status");
   $get4 = filter_input(INPUT_GET, "var_aluno");
   $get5 = filter_input(INPUT_GET, "var_turma");
   ?>

   <b>
      <font color="#0000FF">Tela de Edição de FREQUÊNCIAS</font>
   </b>
   </br> </br>

   <form action="../_update.php" method="post">

      <input type=hidden name=tabela value="chamada_frequencia">

      <b> Código:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1 ?>" readonly>
      </br></br>

      <b> Data:</b> <input type="date" name="input_data" size="15" value="<?php echo $get2 ?>">
      </br></br>

      <b> Status:</b> <input type="text" name="input_status" size="15" value="<?php echo $get3 ?>">
      </br></br>

      <b> Código do Aluno:</b> <input type="text" name="input_aluno" size="50" value="<?php echo $get4 ?>">
      </br></br>

      <b> Código da Turma:</b> <input type="text" name="input_turma" size="8" value="<?php echo $get5 ?>">
      </br></br>

      <input type="submit" value="Salvar">

   </form>

</body>

</HTML>