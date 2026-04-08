<?php
$connString = getenv("MiConexionDB");

if (!$connString) {
    die("Error: La variable de entorno MiConexionDB no está configurada en Azure.");
}

// Intentar la conexión real
try {
    // Azure SQL requiere el driver de SQL Server para PHP
    $conn = singleton_connection($connString); 
    echo "<h1>✅ ¡Conexión Exitosa!</h1>";
    echo "<p>El servidor web y la base de datos están hablando correctamente.</p>";
} catch (Exception $e) {
    echo "<h1>❌ Error de Conexión</h1>";
    echo "<p>Detalle del error: " . $e->getMessage() . "</p>";
}

function singleton_connection($string) {
    // Este es un ejemplo simplificado para detectar si la cadena es válida
    if (strpos($string, 'Password=') !== false && strpos($string, 'User ID=') !== false) {
        return true; 
    }
    throw new Exception("La cadena de conexión parece incompleta o mal formateada.");
}
?>
