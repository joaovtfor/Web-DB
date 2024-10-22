<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista ITENS DO PEDIDO</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Produto</b></td>
        <td><b>Quantidade</b></td>
        <td><b>Preço</b></td>
     </tr>

       <?php
            $get1 = filter_input(INPUT_GET, "var_cod");

           // criar conexão
           $conn= mysqli_connect("localhost","root","","pedido");
           if(!$conn){
               die("Conexão falhou! ".mysqli_connect_error());
           }else{
               echo "Conexão realizada!";
           } 

            $select = "SELECT p.nroPedido, c.nome, p.data FROM Pedido p inner join Cliente c ON p.codCliente = c.codCliente WHERE p.nroPedido = $get1;";
            $resultado = mysqli_query($conn, $select);
            $i = mysqli_fetch_assoc($resultado);
            echo "<br> <br>";
            echo "Itens do Pedido: <strong>".$i['nroPedido']." (Cliente: ".$i['nome'].")"."</strong>";
            echo "<br> <br>";

            $select = "SELECT it.nroPedido, it.codProduto, p.Descricao, it.Quantidade, it.Preco FROM Itens it inner join Produto p ON it.codProduto = p.codProduto WHERE it.nroPedido = $get1";
            $resultado = mysqli_query($conn,$select);
            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['Descricao'];?></td>
                <td><?php echo $i['Quantidade'];?></td>
                <td><?php echo $i['Preco'];?></td>
             </tr>
            <?php
           }
            ?>
     </table>

    <h3><a href="<?php echo "ItensFormInsert.php?var_cod=". $get1?>">Cadastrar novo ITEM para este PEDIDO</a></h3>
</BODY>
</HTML>
