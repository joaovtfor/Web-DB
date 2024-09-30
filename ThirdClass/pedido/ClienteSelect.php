<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Lista CLIENTES</b>
    </br>
    <table border="1">
        <tr>
            <td><b>Código</b></td>
            <td><b>Nome</b></td>
        </tr>

        <?php
            //criar conexão
            $conn = mysqli_connect("localhost", "root", "", "pedido");
            if (!$conn) {
                die("Conexão falhou: ". mysqli_connect_error());
            } else {
                echo "Conexão bem-sucedida";
            }

            //criar query
            $cliente = "SELECT * FROM Cliente";
            $resultado = mysqli_query($conn, $cliente);

            while($i = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td><?php echo $i['codCliente']?></td>
                <td><?php echo $i['nome']?></td>
            </tr>
        <?php 
            }
        ?>
    </table>
    <h4><a href="ClienteFormInsert.html">Cadastrar novo CLIENTE</a></h4>
</body>
</html>