<?php 

        require("conexao.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"]; 
        
        
    
        
          
    $sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome' ,'$email' ,'$senha')";

    // $stmt = $conn->prepare($sql);

    // $stmt->bind_param("sss", $nome, $email, $senha);

    if(mysqli_query($conn, $sql)) {
        echo "Inserção bem-sucedida";
    }else{
        echo "Erro na Inserção" . $stmt->error;
    }

    // $stmt->close();
    $conn->close();




    


?>