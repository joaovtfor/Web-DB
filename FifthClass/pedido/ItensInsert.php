<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Gravação
   $nroPedido  = $_POST["input_cod"];
   $codProduto = $_POST["input_codproduto"];
   $Quantidade = $_POST["input_quantidade"];
   $Preco      = $_POST["input_preco"];

   $varSQL= "INSERT INTO Itens(nroPedido, codProduto, Quantidade, Preco) VALUES ({$nroPedido}, {$codProduto}, {$Quantidade}, {$Preco})";
   
   mysqli_query($conn,$varSQL) or die(mysqli_error());

// encerrar conexão
   mysqli_close($conn);
?>
