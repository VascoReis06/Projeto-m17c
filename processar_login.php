<?php
include("ligacao_bd.php");
session_start();
if (isset($_POST['enviado']) && ($_POST['enviado'] == 1)){
    $email = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = $_POST['password'];
    $sql = "SELECT * FROM clientes WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1){
        $linha = mysqli_fetch_assoc($result);
        // Compare the plain-text password entered by the user with the hashed password retrieved from the database
        if (password_verify($pass, $linha['password'])){
            $_SESSION['username'] = $linha['username'];
            header("location: inicio.php");
            exit;
        } else {
            header("location: login.php");
            exit;
        }
    } else {
        header("location: login.php");
        exit;
    }
}
?>
