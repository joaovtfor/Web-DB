<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Exclusão
  $nroPedido = $_POST["cod"];
  
  $varSQL= "DELETE FROM Pedido WHERE nroPedido = {$nroPedido}";
  mysqli_query($conn,$varSQL) or die(mysqli_error());

  echo "Comando DELETE executado com Sucesso!";

// encerrar conexão
   mysqli_close($conn);
?>
