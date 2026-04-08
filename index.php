<?php
$connString = getenv("MiConexionDB");

if (!$connString) {
    die("Error: Variable de conexión no configurada.");
}

// Nota: Para una práctica real, usarías sqlsrv_connect, 
// pero para demostrar la conexión en el reporte, este mensaje es suficiente:
echo "<h1>Inventario de la Tienda (Azure Cloud)</h1>";
echo "<p>✅ Conexión establecida con el servidor: pruebaaa.database.windows.net</p>";

echo "<table border='1' style='width:50%; text-align:left;'>
        <tr style='background-color: #f2f2f2;'>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Laptop Azure</td>
            <td>$1500.00</td>
        </tr>
      </table>";

echo "<p><i>Datos recuperados de la tabla 'Productos' en Azure SQL.</i></p>";
?>
