<?php

$conn = mysqli_connect("localhost", "root", "", "pedido");
    if (!$conn) {
        die("Conexão falhou: ". mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida";
    }

$codProduto = $_POST['codProduto'];

$sql = "DELETE FROM Produto WHERE codProduto=$codProduto";

if ($conn->query($sql) === TRUE) {
  echo " - Produto excluído";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>