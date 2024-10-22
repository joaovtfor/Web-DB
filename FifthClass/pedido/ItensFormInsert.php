<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Cadastro de ITENS do PEDIDO</font></b>
      </br> </br>

    <form action="Itensinsert.php" method="post">

    <input type=hidden name=tabela value="itens">

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
    ?>

     <input type=hidden name="input_cod" value="<?php echo $get1?>">

     </br>
     <b> Produto: </b> <input type="text" name="input_codproduto" size="12">
      </br></br>


    </br>
     <b> Quantidade: </b> <input type="text" name="input_quantidade" size="12">
      </br></br>

    <b> Preço: </b> <input type="text" name="input_preco" size="12">
     </br></br>

    </br></br>
    <input type="reset" value="Reset">   <input type="submit" value="Cadastrar">

   </form>

</BODY>
</HTML>
