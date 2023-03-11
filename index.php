<?php

    include 'config.php';

    $sql = 'select * from contato';
    $resultado = mysqli_query($link, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>

    <h3>Lista de Contatos</h3>
    
    <a href="cadastro.php">Cadastrar Contato</a>
    <hr>
    <table border="1">

        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo($row['id'])?></td>
            <td><?php echo($row['nome'])?></td>
            <td><?php echo($row['telefone'])?></td>
            <td><?php echo($row['email'])?></td>
        </tr>
        <?php
            }
        ?>

    </table>

    
</body>
</html>