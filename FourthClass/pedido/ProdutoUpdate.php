<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Update
   $codigo = $_POST["codigo"];
   $descricao   = $_POST["descricao"];
   $preco   = $_POST["preco"];

   $varSQL = "UPDATE Produto
              SET    descricao = '$descricao',
                     preco     = $preco
              WHERE  codProduto = {$codigo};";

   mysqli_query($conn, $varSQL) or die(mysqli_error());

// encerrar conexão
   mysqli_close($conn);
?>
