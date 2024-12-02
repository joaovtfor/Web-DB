<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista CLIENTES</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Nome</b></td>
        <td><b>Data de Nascimento</b></td>
        <td><b>Cidade</b></td>
     </tr>

       <?php
            $conn= mysqli_connect("localhost","root","","pedido");
            if(!$conn){
                die("Conexão falhou! ".mysqli_connect_error());
            }else{
                echo "Conexão realizada!";
            }


            $tipos = "SELECT cliente.codCliente as codCliente, cliente.nome as nome, cliente.dataNasc as dataNasc, cidade.nome as cidade 
                            FROM Cliente
                            JOIN Cliente ON cliente.CodCidade = cidade.codigo";
            $resultado = mysqli_query($conn,$tipos);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codCliente'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['dataNasc'];?></td>
                <td><?php echo $i['cidade'];?></td>
             </tr>
            <?php
           }
            ?>
     </table>

     <h4><a href="ClienteFormInsert.html">Cadastrar novo CLIENTE</a></h4>
</BODY>
</HTML>
