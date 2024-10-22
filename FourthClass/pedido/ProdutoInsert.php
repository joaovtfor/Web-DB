<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Gravação
   $codProduto = $_POST["cod"];
   $Descricao  = $_POST["descricao"];
   $Preco      = $_POST["preco"];

   $varSQL= "INSERT INTO Produto(codProduto, descricao, preco) VALUES ({$codProduto},'{$Descricao}', {$Preco})";
    mysqli_query($conn,$varSQL) or die(mysqli_error());

// encerrar conexão
   mysqli_close($conn);
?>
