<?php
include("ligacao_bd.php");
session_start();
if (isset ($_POST['enviado']) && ($_POST['enviado']==1)){
    $uname=(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
    $pass=($_POST['password']);
    $sql="SELECT * FROM clientes WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if( mysqli_num_rows($result)==1){
        $linha=mysqli_fetch_assoc($result);
        if (password_verify($pass,$linha['password'])==TRUE){
            $_SESSION['username']=$_POST['username'];
            header("location:home.php");
        }
        else{
            header("location:index.html");
        }
    }
    else{
        header("location:index.html");
    }

}
?>