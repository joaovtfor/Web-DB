<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Gravação
   $codCliente    = $_POST["cod"];
   $Nome = $_POST["nome"];

   $varSQL= "INSERT INTO Cliente(codCliente, Nome) VALUES ({$codCliente},'{$Nome}')";
    mysqli_query($conn,$varSQL) or die(mysqli_error());

// encerrar conexão
   mysqli_close($conn);
?>
