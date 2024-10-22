<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
    <b>
        <font color="#0000FF">Lista Itens</font>
    </b>
    </br> </br>

    <p>Itens do Pedido: <?php echo $i['nroPedido']; ?></p>
    </br> </br>

    <table border="1">
        <tr>
            <td><b>Código Produto</b></td>
            <td><b>Quantidade</b></td>
            <td><b>Preco</b></td>
        </tr>

        <?php
        // criar conexão
        $conn = mysqli_connect("localhost", "root", "", "pedido");
        if (!$conn) {
            die("Conexão falhou! " . mysqli_connect_error());
        } else {
            echo "Conexão realizada!";
        }


        $tipos = "SELECT Pedido.nroPedido AS 'nroPedido', Produto.codProduto AS 'codProduto', quantidade, preco FROM Itens JOIN Produto ON 
                                       Itens.codProduto = Produto.codProduto
                                       JOIN Pedido ON 
                                       Itens.nroPedido = Pedido.nroPedido";
        $resultado = mysqli_query($conn, $tipos);
        echo $resultado;


        while ($i = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $i['codProduto']; ?></td>
                <td><?php echo $i['quantidade']; ?></td>
                <td><?php echo $i['preco']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h4><a href="PedidoFormInsert.html">Cadastrar novo PEDIDO</a></h4>

</BODY>

</HTML>