<?php
session_start();
if (isset($_GET["sair"]) &&  $_GET["sair"]==1){
    session_destroy();
    header("location: index.html");
}
else if(!isset($_SESSION['username'])){
    header("location: index.html");
}
?>