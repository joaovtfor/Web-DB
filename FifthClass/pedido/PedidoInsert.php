<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Gravação
   $nroPedido  = $_POST["cod"];
   $data       = $_POST["data"];
   $codCliente = $_POST["codcliente"];

   $varSQL= "INSERT INTO Pedido(nroPedido, data, codCliente) VALUES ({$nroPedido},'{$data}', {$codCliente})";
    mysqli_query($conn,$varSQL) or die(mysqli_error());

// encerrar conexão
   mysqli_close($conn);
?>
