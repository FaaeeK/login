<?php

include('conexao.php');

    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($connectdb, "select * from tlogin where user = '$user' and senha = '$senha'");

    if(mysqli_num_rows($sql) > 0) {
        header('location: menu.html');
        exit();
    } else {
        echo "Usuário ou senha inválidos";
        exit();
    }
?>