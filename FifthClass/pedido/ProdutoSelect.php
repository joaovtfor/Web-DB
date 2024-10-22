<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista PRODUTOS</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Nome</b></td>
        <td><b>Preço</b></td>
     </tr>

       <?php
            // criar conexão
            $conn= mysqli_connect("localhost","root","","pedido");
            if(!$conn){
                die("Conexão falhou! ".mysqli_connect_error());
            }else{
                echo "Conexão realizada!";
            }


            $tipos = "SELECT * FROM Produto";
            $resultado = mysqli_query($conn,$tipos);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codProduto'];?></td>
                <td><?php echo $i['descricao'];?></td>
                <td><?php echo $i['preco'];?></td>
             </tr>
            <?php
           }
            ?>
     </table>

     <h4><a href="ProdutoFormInsert.html">Cadastrar novo PRODUTO</a></h4>

</BODY>
</HTML>
