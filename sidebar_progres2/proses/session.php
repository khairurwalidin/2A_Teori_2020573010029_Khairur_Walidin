<?php
require "koneksi.php";
    if(empty($_SESSION['username'])){
        echo "<script>window.location='../login/index.php';</script>";
}
