<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>

<?php
//Recibo datos de formulario
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$entidad=$_POST['entidad'];
$municipio=$_POST['municipio'];
$notificaciones=$_POST['notificaciones'];

echo"Registrado con éxito";

//Conexión cob DB
// Create connection
$conn = mysqli_connect("localhost", "vkproduc_osvaldo", "Os215849371", "vkproduc_sargazo");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";


$sql="INSERT INTO registro (nombre, paterno, materno, email, genero, edad, entidad, municipio, notificaciones) VALUES ('$nombre', '$paterno', '$materno', '$email', '$genero', '$edad', '$entidad', '$municipio', '$notificaciones')";
$resul = mysqli_query($conn,$sql);

$consulta = "SELECT * FROM registro";

$result = mysqli_query($conn, $consulta);
echo "<table>";
echo "<tr>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Apellido Paterno</th></h1>";
echo "<th><h1>Apellido Materno</th></h1>";
echo "<th><h1>Email</th></h1>";
echo "<th><h1>Genero</th></h1>";
echo "<th><h1>Edad</th></h1>";
echo "<th><h1>Entidad</th></h1>";
echo "<th><h1>Municipio</th></h1>";
echo "<th><h1>Notificaciones</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['paterno'] . "</td></h2>";
    echo "<td><h2>" . $colum['materno'] . "</td></h2>";
    echo "<td><h2>" . $colum['email']. "</td></h2>";
    echo "<td><h2>" . $colum['genero']. "</td></h2>";
    echo "<td><h2>" . $colum['edad']. "</td></h2>";
    echo "<td><h2>" . $colum['entidad']. "</td></h2>";
    echo "<td><h2>" . $colum['municipio']. "</td></h2>";
    echo "<td><h2>" . $colum['notificaciones']. "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $conn );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';

?>





