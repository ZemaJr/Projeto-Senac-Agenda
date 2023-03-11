<?php

    include 'config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        // Comando SQL.
        $sql = 'insert into contato (nome, telefone, email) values (?, ?, ?)';

        // Preparando meu comando SQL;
        $stmt = mysqli_prepare($link, $sql);

        // Substituindo as '?' pelas variáveis.
        mysqli_stmt_bind_param($stmt, "sss", $nome, $telefone, $email);

        // Executando o comando SQL e testando o retorno.
        if (mysqli_stmt_execute($stmt)) {
            echo "Contato Inserido.";
        } else {
            echo "Ocorreu um erro!";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
</head>
<body>
    
    <h3>Cadastrar contatos na agenda.</h3>

    <form method='POST'>
        <p>
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="">Telefone</label>
            <input type="text" name="telefone" id="telefone">
        </p>
        <p>
            <label for="">E-mail</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <button type="submit">Gravar</button>
        </p>
    </form>
    <a href="index.php">Voltar.</a>

</body>
</html>