<?php

// criar conexão e ligação com Banco de Dados
   $conn = mysqli_connect("localhost","root","","pedido");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }

// faz Exclusão
  $codProduto = $_POST["cod"];
  
  $varSQL= "DELETE FROM Produto WHERE codProduto = {$codProduto}";
  mysqli_query($conn,$varSQL) or die(mysqli_error());

  echo "Comando DELETE executado com Sucesso!";

// encerrar conexão
   mysqli_close($conn);
?>