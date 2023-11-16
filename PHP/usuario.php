<?php

        require("conexao.php");


        $email = $_POST["email"];
        $senha = $_POST["senha"];


    $sql = mysqli_query("SELECT Email, senha FROM cadastro WHERE Email = "$email" AND senha = "$senha" ");

    if($sql && mysqli_num_rows($sql)){
        echo "Login bem sucedido";
    }else{
        echo "Usuario ou Senha estão incorretos" ;
    }
    
?>
