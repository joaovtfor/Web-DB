<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<body>
   <?php
   $get1 = filter_input(INPUT_GET, "var_cod");
   $get2 = filter_input(INPUT_GET, "var_Nome");
   ?>

   <b>
      <font color="#0000FF">Tela de Edição de ESCOLAS</font>
   </b>
   </br> </br>

   <form action="../_update.php" method="post">

      <input type=hidden name=tabela value="escola">

      <b> Código:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1 ?>" readonly>
      </br></br>

      <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get2 ?>">
      </br></br>

      <input type="submit" value="Salvar">

   </form>

</body>

</HTML>