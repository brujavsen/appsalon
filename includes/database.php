<?php

$db = mysqli_connect('127.0.0.1', 'root', 'root', 'appsalon', '3306');

if(!$db) {
    echo 'Error en la conexión';
    exit;
}

// echo "Conexión correcta";