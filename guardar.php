<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "abili"
);

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contacto(nombre, correo, mensaje)
VALUES ('$nombre', '$correo', '$mensaje')";

mysqli_query($conexion, $sql);

echo "
<h2>Mensaje enviado correctamente</h2>
<a href='index.html'>Volver</a>
";

?>