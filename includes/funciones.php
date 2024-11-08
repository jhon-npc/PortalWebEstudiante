<?php
require 'app.php';

function incluirTemplate($nombre)
{
    include TEMPLATES_URL . "/$nombre.php";
}
?>

<?php
function conectarDB2()
{
    $dbHost = 'node207553-portalweb6019.sp1.br.saveincloud.net.br:3306'; // Puede ser 'localhost' si estás usando XAMPP o WAMP
    $dbUsuario = 'root';
    $dbPassword = 'EIMtyh11903';
    $dbName = 'bdportal';
	    // Crear una conexión
    $db = mysqli_connect($dbHost, $dbUsuario, $dbPassword, $dbName);

    // Verificar si la conexión fue exitosa
    if (!$db) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit; // Finalizar el script si no hay conexión
    }

    return $db;
}
?>

<?php

$con = new mysqli('localhost', 'root', '', 'bdportal');
if ($con->connect_errno) {
    die('fail');
}

function file_name($string) {

    // Tranformamos todo a minusculas

    $string = strtolower($string);

    //Rememplazamos caracteres especiales latinos

    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

    $repl = array('a', 'e', 'i', 'o', 'u', 'n');

    $string = str_replace($find, $repl, $string);

    // Añadimos los guiones

    $find = array(' ', '&', '\r\n', '\n', '+');
    $string = str_replace($find, '-', $string);

    // Eliminamos y Reemplazamos otros carácteres especiales

    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

    $repl = array('', '-', '');

    $string = preg_replace($find, $repl, $string);

    return $string;
}
