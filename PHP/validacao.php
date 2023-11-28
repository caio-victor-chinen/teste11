<?php
include_once('../PHP/conexao.php');
    // Obter dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL
    $sql = "SELECT nome, email FROM oberonproject WHERE email = '$username' AND senha = '$password'";
    $result = $conn->query($sql);

    // Verificar se há resultados e se a senha está correta
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
            // Iniciar a sessão e armazenar o ID do usuário
            $_SESSION['email'] = $row['email'];
            $_SESSION['nome'] = $row['nome'];

            echo $_SESSION['email'];

            // Redirecionar para a página do usuário
            // header("Location:../HTML/menu.php");     
    } else {
        echo 'Senha ou login incorretos';
    }

    // Fechar a conexão

?>