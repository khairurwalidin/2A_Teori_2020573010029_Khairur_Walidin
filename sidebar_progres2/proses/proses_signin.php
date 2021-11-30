<?php
session_start();
require "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

echo $username . "-" . $password;

$hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password ='$password'");
$row = mysqli_fetch_array($hasil);
if ($hasil) {
    if (isset($row["username"]) && isset($row['password']) && $row['username'] == $username && $row['password'] == $password) {
        echo "username ada";
        $_SESSION['username'] = $row['username'];
        echo "<script>window.location='../home';</script>";
    } else {
        echo '<script>alert("mohon maaf username salah");</script>';
        echo "<script>window.location='../login/index.php';</script>";
    }
}
