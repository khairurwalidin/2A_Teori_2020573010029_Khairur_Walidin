<?php 
session_start();
if(!empty($_SESSION['username'])){
    session_destroy();
    echo "<script>window.location='../login/index.php';</script>";
} else if(empty($_SESSION['username'])){
    echo "<script>window.location='../login/index.php';</script>";
}
?>