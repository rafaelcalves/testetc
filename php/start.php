<?php
$cod_usr = $_REQUEST["codigo"];
$senha = $_REQUEST["senha"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testetc";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT tipo FROM cadastro_usuario WHERE codigo_usuario = '$cod_usr' AND senha = '$senha'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    // output data of each row
    if ($row["tipo"] == 1) {
      header('Location: ../malas_setor.php?usr='.$cod_usr);
    } else {
      header('Location: ../menu.html');
    }
} else {
    header('Location: ../index.php');
}

$conn->close();
?>
