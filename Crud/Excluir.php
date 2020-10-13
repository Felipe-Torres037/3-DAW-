<!DOCTYPE html>
<html>
<body>
<?php

$servername = "localhost";
$username = "Felipe-Torres";
$password = "4815162342";
$DBname = "banco_dados_alunos";
// Criar conexão com o banco
$conn = new mysqli($servername, $username, $password, $DBname);
// Testar conexão
if ($conn->connect_error) {
  die("Falha da conexão: " . $conn->connect_error);
}
echo "Conectado ao servidor!";
//Recebendo matricula
$matricula= $_POST["matricula"];
$sql= "DELETE FROM alunos WHERE matricula='" . $matricula . "';";
if ($conn->query($sql) === TRUE){
echo "<p>Aluno Excluido.</p>";
}


?>
<button onclick="document.location='index.php'">Voltar ao menu</button>
</body>
</html>