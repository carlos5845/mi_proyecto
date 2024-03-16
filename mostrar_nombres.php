<?php
$host = "localhost";
$dbname = "formulario_db";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>Nombre: " . $row["nombre"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
