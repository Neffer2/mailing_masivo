<?php
date_default_timezone_set('America/Bogota'); 
try {
    $conexion = new PDO("mysql:host=localhost;dbname=modulo_correos", "root", '');
} catch (PDOException $message) {
    echo $message->getMessage();
}

?>