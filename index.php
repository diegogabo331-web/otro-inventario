<?php
echo "<h1>¡Servidor de Azure funcionando!</h1>";

// Intentar obtener la variable de entorno que configuramos en Azure
$cadena_de_conexion = getenv("MiConexionDB");

if ($cadena_de_conexion) {
    echo "<p>La variable de conexión se detectó correctamente.</p>";
} else {
    echo "<p>Error: No se encuentra la variable 'MiConexionDB' en la configuración de Azure.</p>";
}
?>
