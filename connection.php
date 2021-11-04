<?php

$serverName = 'localhost';
$userName = 'root';
$passWord = 'bcd127';
$dataBase = 'cadastro';

$conn =  new mysqli($serverName, $userName, $passWord, $dataBase);

// echo '<pre>';
// var_dump($conn);
// echo'</pre>';

if ($conn->connect_error) {
    die("Connection error".$conn->connect_error);
}

return $conn;