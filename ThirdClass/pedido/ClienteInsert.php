<?php
    //criar conexão
    $conn = mysqli_connect("localhost", "root", "", "pedido");
    if (!$conn) {
        die("Conexão falhou: ". mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida";
    }
    //faz gravação
    $codCliente = $_POST['cod'];
    $Nome = $_POST['nome'];

    $varSQL = "INSERT INTO Cliente (codCliente, nome) VALUES ('$codCliente', '$Nome')";
    mysqli_query($conn, $varSQL) or die(mysqli_error());

    //encerra conexão
    mysqli_close($conn);
?>