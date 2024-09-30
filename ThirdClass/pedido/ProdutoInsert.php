<?php
    //criar conexão
    $conn = mysqli_connect("localhost", "root", "", "pedido");
    if (!$conn) {
        die("Conexão falhou: ". mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida";
    }


    //faz gravação
    $codProduto = $_POST['codProduto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $varSQL = "INSERT INTO Produto (codProduto, descricao, preco) VALUES ('$codProduto', '$descricao', '$preco')";
    mysqli_query($conn, $varSQL) or die(mysqli_error());

    //encerra conexão
    mysqli_close($conn);
?>