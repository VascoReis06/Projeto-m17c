<?php
include("ligacao_bd.php");
include("registro.html");

session_start();
$nif=$_POST['nif'];
$pass=password_hash($_POST['password1'],PASSWORD_BCRYPT);
$nome1=$_POST['nome1'];
$email=$_POST['email'];
$sql="SELECT * FROM clientes WHERE email='$email'";
$result=$conn->query($sql);
if($result->num_rows==1){
    header("location:erro_voltar.html");
    die();
}
$sql="INSERT INTO clientes(nome,email,password,nif) VALUES ('$nome1','$email','$pass','$nif')";
$result=$conn->query($sql);
header("location:index.html");
?>