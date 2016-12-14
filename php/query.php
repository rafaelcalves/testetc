<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testetc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM cadastro_usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "codigo: " . $row["codigo_usuario"]. " - nome_completo: " . $row["nome_completo"]. " - rg: " . $row["rg"] . " - cpf: " . $row["cpf"] . " - telefone: " . $row["telefone"] . " - email: " . $row["email"] . " - senha: " . $row["senha"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
