<!DOCTYPE html>
<html>
<head>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        a {
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            margin-right: 20px;
            float: right;
        }
        .ke {
            font-size: 15px;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            margin: 0;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .ke:hover {
            transform: scale(1.1);
        }
      
    </style>
</head>
<body>
    <?php
   
//conexión con a la base de datos

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_v1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM personas";
$result = $conn->query($sql);

//  Aqui creamos la estructura de la tabla en HTML
echo "<table>";
echo "<tr>";
echo "<th>nombre</th>";
echo "<th>email</th>";
echo "<th>telefono</th>";
echo "<th>mensaje</th>";

echo "</tr>";

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar los datos en cada fila
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Telefono"] . "</td>";
        echo '<td> ' . $row['Mensaje'] . '<br>';
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No se encontraron resultados</td></tr>";
}

echo "</table>";
 


    ?>

    <div>
<a class="ke" href="pp.html">volver</a></div>
</body>
</html>

