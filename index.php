<?php
$servername = "34.173.99.143";
$username = "root";
$password = "123456"; 
$dbname = "PersonalDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Realizar consulta SQL
$sql = "SELECT * FROM Personal"; // Aquí debes poner el nombre de tu tabla
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
  // Mostrar los datos en una tabla
  echo "<style>
          table { width: 100%; border-collapse: collapse; }
          th, td { padding: 8px 12px; border: 1px solid #ddd; text-align: left; }
          th { background-color: #f2f2f2; }
        </style>";

  echo "<table><tr><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Edad</th><th>Telefono</th><th>Email</th></tr>";

  // Mostrar los datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido_paterno"] . "</td>
            <td>" . $row["apellido_materno"] . "</td>
            <td>" . $row["edad"] . "</td>
            <td>" . $row["telefono"] . "</td>
            <td>" . $row["email"] . "</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "No hay resultados";
}

// Cerrar la conexión
$conn->close();
?>
