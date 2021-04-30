<?php
$server= 'cuidadosenfermeros.ar';
$username= 'Admin';
$password= 'cuidados_enfermeros2021';
$database= 'cuidados_enfermeros';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch (PDOException $e) {
    die('Connected failed: ' .$e->getMessage());
}
?>