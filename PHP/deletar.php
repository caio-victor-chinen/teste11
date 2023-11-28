<?php 

require('./conexao.php');

$id_excluir = $_POST['id_excluir'];

$sql = "DELETE FROM oberonproject WHERE idnew_table = '$id_excluir'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>