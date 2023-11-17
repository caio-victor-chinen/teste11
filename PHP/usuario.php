<?php

        require("conexao.php");


        $email = $_POST["email"];
        $senha = $_POST["senha"];


    $sql = mysqli_query("SELECT * FROM cadastro WHERE Email = '$email' AND Senha = '$senha' ")

    if($sql -> num_rows($sql)){
        echo "Login bem sucedido";
    }else{
        echo "Usuario ou Senha estão incorretos" ;
    }
    
?>
