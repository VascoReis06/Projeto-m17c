<?php
$servername = "localhost";
$username = "root";
$password = "";
$basedados="tvr_limpezas";

$conn = new mysqli($servername, $username, $password,$basedados);

if ($conn->connect_error) {
  die("Erro de ligação: " . $conn->connect_error);
}

?>