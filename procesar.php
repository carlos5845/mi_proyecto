<?php
// Conexión a la base de datos
$host = "localhost";
$dbname = "formulario_db";
$username = "root"; // El usuario por defecto de XAMPP MySQL
$password = ""; // Por defecto, XAMPP MySQL no tiene contraseña

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);

    if (empty($nombre)) {
        echo "Por favor, completa todos los campos del formulario.";
    } else {
        // Insertar el nombre en la base de datos
        $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

        if ($conn->query($sql) === TRUE) {
            echo "Nuevo registro creado con éxito";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    header("Location: formulario.html");
}

$conn->close();
?>
