<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $cod = $_POST["cod"];

      // criar conexão
      $conn= mysqli_connect("localhost","root","","pedido");
      if(!$conn){
          die("Conexão falhou! ".mysqli_connect_error());
      }else{
          echo "Conexão realizada!";
      }

      $SQL = "SELECT * FROM Produto where codProduto = $cod";
      $resultado = mysqli_query($conn, $SQL);

      $i = mysqli_fetch_assoc($resultado);
      $codProduto = $i['codProduto'];
      $Descricao       = $i['descricao'];
      $Preco       = $i['preco'];
   ?>

</br> </br>
   <b><font color="#0000FF">Tela de Edição de PRODUTOS</font></b>
      </br> </br>

    <form action="ProdutoUpdate.php" method="post">

     <b> Código: </b> <input type="text" name="codigo" size="8" value="<?php echo $codProduto?>" readonly>
       </br></br>

    <b> Descrição: </b> <input type="text" name="descricao" size="30" value="<?php echo $Descricao?>">
    </br></br>

    <b> Preço: </b> <input type="numeric" name="preco" size="20" value="<?php echo $Preco?>">

       </br></br>
    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
