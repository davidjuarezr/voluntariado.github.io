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
$servername = "162.241.61.120";
$database = "vkproduc_sargazo";
$username = "vkproduc_osvaldo";
$password = "Os215849371";
// Create connection
$conn = mysql_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: ". mysql_connect_error());
}
echo "Connected successfully";
mysql_close($conn);


$conectar=conn();
$sql="INSERT INTO registro (nombre, paterno, materno, email, genero, edad, entidad, municipio, notificaciones)
      VALUES ('$nombre', '$paterno', '$materno', '$email', '$genero', '$edad', '$entidad', '$municipio', 'notificaciones')";
$resul = mysql_query($conectar,$sql) or trigger_error("Query falló SQL- Error: ".mysql_error($conectar), E_USER_ERROR);
?>





