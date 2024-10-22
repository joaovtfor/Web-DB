<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $cod = $_POST["cod"];

      // criar conexão
      $conn= mysqli_connect("localhost","root","","pedido");
      if(!$conn){
          die("Conexão falhou! ".mysqli_connect_error());
      }else{
          echo "Conexão realizada!";
      }

      $SQL = "SELECT * FROM Cliente where codCliente = $cod";
      $resultado = mysqli_query($conn, $SQL);

      $i = mysqli_fetch_assoc($resultado);
      $codCliente = $i['codCliente'];
      $Nome       = $i['nome'];
   ?>

</br> </br>
   <b><font color="#0000FF">Tela de Edição de CLIENTES</font></b>
      </br> </br>

    <form action="ClienteUpdate.php" method="post">

     <b> Código: </b> <input type="text" name="codigo" size="8" value="<?php echo $codCliente?>" readonly>
       </br></br>

    <b> Nome: </b> <input type="text" name="nome" size="20" value="<?php echo $Nome?>">

       </br></br>
    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
