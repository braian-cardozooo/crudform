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

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Realizar la conexión a la base de datos
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'formulario_v1';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//se verifica
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Insertar los datos en la tabla de la base de datos
$sql = "INSERT INTO personas (Nombre, Email, Telefono, Mensaje)
        VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo 'Datos guardados correctamente';
} else {
    echo 'Error al guardar los datos: ' . $conn->error;
}


// Cerrar la conexión
$conn->close();
?>
<a href="pp.html">volver</a></div>
</body>
</html>
