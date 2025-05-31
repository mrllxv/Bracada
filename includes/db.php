<?php
function connect() {
    $servidor = "localhost";      
    $database = "bracada_final";  
    $usuario = "root";            
    $senha = "mrllsql9090@";                  

    $conn = mysqli_connect($servidor, $usuario, $senha, $database);

    if (!$conn) {
        die("Erro na conexão: " . mysqli_connect_error());
    }

    return $conn;
}