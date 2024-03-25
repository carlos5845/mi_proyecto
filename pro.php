<?php
session_start();
$_SESSION['usuario'] = "juan";
$usuario = $_SESSION['usuario'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];

echo "Nombre: $nombre <br>";
echo "Email: $email <br>";

// Establecer una cookie llamada 'idioma' con el valor 'español' que expira en 1 hora
setcookie('idioma', 'español', time() + 3600);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Correo electrónico inválido";
}
?>