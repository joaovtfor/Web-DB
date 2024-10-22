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

      $SQL = "SELECT * FROM Pedido where nroPedido = $cod";
      $resultado = mysqli_query($conn, $SQL);

      $i = mysqli_fetch_assoc($resultado);
      $nroPedido   = $i['nroPedido'];
      $codCliente  = $i['codCliente'];
      $Data        = $i['data'];
   ?>

</br> </br>
   <b><font color="#0000FF">Tela de Edição de PEDIDOS</font></b>
      </br> </br>

    <form action="PedidoUpdate.php" method="post">

     <b> Número: </b> <input type="text" name="codigo" size="8" value="<?php echo $nroPedido?>" readonly>
       </br></br>

    <b> Código Cliente: </b> <input type="text" name="descricao" size="30" value="<?php echo $codCliente?>">
    </br></br>

    <b> Data: </b> <input type="numeric" name="preco" size="20" value="<?php echo $Data?>">

       </br></br>
    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
