<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// Variables del fomrulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Conexion a Data
$con = new SQLite3("../data/tuvsa.db") or die("Problemas para conectar");

// Consulta a SQL
$cs = $con -> query("INSERT INTO registro (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')");

echo '<script>alert("Datos Insertados")</script>';
echo '<script>window.location="../../registro.html"</script>';


?>