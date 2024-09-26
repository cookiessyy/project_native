<!-- koneksi.php -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "sewa_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>