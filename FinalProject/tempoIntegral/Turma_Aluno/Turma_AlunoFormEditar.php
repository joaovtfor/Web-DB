<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<body>
   <?php
   $get1 = filter_input(INPUT_GET, "var_aluno");
   $get2 = filter_input(INPUT_GET, "var_turma");
   $get3 = &$get2;
   ?>


   <b>
      <font color="#0000FF">Tela de Edição do Vínculo Turma_Aluno</font>
   </b>
   </br> </br>

   <form action="../_update.php" method="post">

      <input type=hidden name=tabela value="turma_aluno">
      <input type=hidden name=teste value="<?php echo $get3 ?>">

      <b> Código do Aluno:</b> <input type="text" name="input_aluno" size="8" value="<?php echo $get1 ?>" readonly>
      </br></br>

      <b> Código da Turma:</b> <input type="text" name="input_turma" size="30" value="<?php echo $get2 ?>">
      </br></br>

      <input type="submit" value="Salvar">

   </form>

</body>

</HTML>