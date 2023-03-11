<?php

    // Realizar conexão com o MySQL.
    $SERVIDOR = 'localhost';
    $USUARIO = 'root';
    $SENHA = '';
    $BD = 'agenda';

    $link = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BD);

    if($link === false){
        echo('Erro!');
    } else {
        echo('Ok!');
    }

?>