<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "paginawebbd";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $baseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
