
<?php

require("conexao.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT email, senha  FROM oberonproject WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if($result->num_rows  > 0){
    echo "Login bem sucedido";
    header("Location:Menu.php");
}else{
    echo "Usuario ou Senha estão incorretos" ;
}

$conn->close();

?>
