<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <b>Lista PRODUTOS</b>
    </br>
    <table border="1">
        <tr>
            <td><b>Código</b></td>
            <td><b>Descrição</b></td>
            <td><b>Preço</b></td>
        </tr>

        <?php
            //criar conexão
            $conn = mysqli_connect("localhost", "root", "", "pedido");
            if (!$conn) {
                die("Conexão falhou: ". mysqli_connect_error());
            } else {
                echo "Conexão bem-sucedida";
            }

            //criar query
            $produto = "SELECT * FROM Produto";
            $resultado = mysqli_query($conn, $produto);

            while($i = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td><?php echo $i['codProduto']?></td>
                <td><?php echo $i['descricao']?></td>
                <td><?php echo $i['preco']?></td>
            </tr>
        <?php 
            }
        ?>
    </table>
    <h4><a href="ProdutoFormInsert.html">Cadastrar novo PRODUTO</a></h4>
    <h4><a href="ProdutoFormDelete.html">Excluir PRODUTO</a></h4>
</body>
</html>