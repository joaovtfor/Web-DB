<?php

   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

   $codCliente    = $_POST["cod"];
   $Nome = $_POST["nome"];
   $dataNasc = $_POST["dataNasc"];
   $codCidade = $_POST["codCidade"];

   $varSQL= "INSERT INTO Cliente(codCliente, Nome, dataNasc, codCidade) VALUES ({$codCliente},'{$Nome}','{$dataNasc}','{$codCidade}')";
    mysqli_query($conn,$varSQL) or die(mysqli_error());

   mysqli_close($conn);
?>
