<?php

require("usuario.php");


    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $sql = "SELECT * FROM cadastro (email, senha) VALUES ('$email', '$senha')";

    if(mysqli_query($conn, $sql)){
        echo "Login feito com Sucesso";
    }else{
        echo "Falha no login" . $stmt->error;
    }

    $conn->close();






?>
