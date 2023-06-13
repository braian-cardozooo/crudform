<!DOCTYPE html>
<html>
<head>
    <style>
        div{
            margin-top: 20px;
            float: right;
        }
        a{font-size: 15px;
    text-align: center;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    margin: 0;
    border-radius: 5px;
    margin-top: 40px;}
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_v1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Sentencia SQL para crear la tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS personas (
    Nombre VARCHAR(50)  PRIMARY KEY NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Telefono VARCHAR(15) NOT NULL,
    Mensaje TEXT
)";

// Ejecutar la sentencia SQL
if ($conn->query($sql) === TRUE) {
    echo "Tabla creada exitosamente o ya existente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
<a href="pp.html">OK</a></div>
</body>
</html>

