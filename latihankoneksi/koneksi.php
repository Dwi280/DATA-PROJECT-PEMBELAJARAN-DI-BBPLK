<?php 

$serverName = "localhost";
$userName = "root";
$password = "Sahabat12345*";
$dbName = "db_toko_dwi";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    die("Koneksi Gagal");
}

?>