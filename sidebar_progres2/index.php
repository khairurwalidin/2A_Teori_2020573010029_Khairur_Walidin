<?php
session_start();
    if(empty($_SESSION['username'])) {
        echo "<script>window.location='login/index.php';</script>";
    } else if (empty($_GET['x'])){
        echo "<script>window.location='home';</script>";
    }else if ($_GET['x'] == 'home'){
        require "file.php";
    }else if ($_GET['x'] == 'mahasiswa'){
        require "mahasiswa.php";
    }else if ($_GET['x'] == 'peminjaman'){
        require "peminjaman.php"; 
    }else if ($_GET['x'] == 'barang'){
        require "barang.php";  
    }else if ($_GET['x'] == 'dosen'){
        require "dosen.php";
    }else if ($_GET['x'] == 'profile'){
        require "profile.php";
    }else if ($_GET['x'] == 'setting'){
        require "setting.php";
    }
?>