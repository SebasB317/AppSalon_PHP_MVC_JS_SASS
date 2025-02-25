<?php
$host = 'localhost';
$usuario = 'root';
$contraseña = ''; // La contraseña por defecto de WampServer es vacía
$nombre_base_datos = 'appsalon'; // Reemplaza esto con el nombre de tu base de datos

// Crear la conexión
$db = mysqli_connect($host, $usuario, $contraseña, $nombre_base_datos);

// Verificar la conexión
if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

// Opcional: Establecer el conjunto de caracteres (UTF-8)
mysqli_set_charset($db, "utf8");

echo "Conexión exitosa a la base de datos.";
?>