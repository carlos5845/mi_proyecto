<?php
$servername="localhost";
$username="root";
$password="";
$dbname="prueba";

$conexion=mysqli_connect($servername,$username,$password,$dbname);
if(!$conexion){
    die("la conexion fallo" . mysqli_connect_error());

}else{
    echo "conexion exitosa <br>";
}
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
echo "Nombre: $nombre <br>";
echo "Email: $email <br>";
echo "Edad: $edad <br>";

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, email, edad) VALUES ('$nombre', '$email', $edad)";

// Ejecutar la consulta SQL
if (mysqli_query($conexion, $sql)) {
    echo "Registro insertado correctamente";
} else {
    echo "Error al insertar registro: " . mysqli_error($conn);
}
?>