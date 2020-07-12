<?php
require_once "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_users WHERE id_user='$id'";

if($conn->query($sql) === TRUE){
    echo "<script>alter('Data berhasil DiHapus')</script>";
    echo "<script>window.location.assign('formInputUser.php')</script>";
} else {
    echo "<script>alter('Data Gagal DiHapus $conn->error')</script>";
    echo "<script>window.location.assign('formInputUser.php')</script>";
}

?> 