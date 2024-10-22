<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista PEDIDOS</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Número</b></td>
        <td><b>Código Cliente</b></td>
        <td><b>Nome Cliente</b></td>
        <td><b>Data</b></td>
        <td><b>Total</b></td>
     </tr>

       <?php
            // criar conexão
            $conn= mysqli_connect("localhost","root","","pedido");
            if(!$conn){
                die("Conexão falhou! ".mysqli_connect_error());
            }else{
                echo "Conexão realizada!";
            }


            $tipos = "SELECT nroPedido, Pedido.codCliente as pedcodcli, nome, 
                      data, total FROM Pedido JOIN Cliente ON 
                                       Pedido.codCliente = Cliente.codCliente";
            $resultado = mysqli_query($conn,$tipos);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['nroPedido'];?></td>
                <td><?php echo $i['pedcodcli'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['data'];?></td>
                <td><?php echo $i['total'];?></td>
             </tr>
            <?php
           }
            ?>
     </table>

     <h4><a href="PedidoFormInsert.html">Cadastrar novo PEDIDO</a></h4>

</BODY>
</HTML>
