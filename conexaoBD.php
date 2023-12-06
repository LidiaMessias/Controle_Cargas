<?php  

$servername = "localhost"; 
$username = "root"; 
$password = "usbw"; 
$dbname = "controle_carga"; 
$port = 3307;

$conexao = new mysqli($servername, $username, $password, $dbname, $port); 
if ($conexao->connect_error) { 
    die("Connection failed: " . $conexao->connect_error); 
}  

?>