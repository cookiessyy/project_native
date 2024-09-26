<!-- hapus_pesanan.php -->
<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pemesanan WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Pesanan berhasil dihapus.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }

    $conn->close();
    header("Location: order.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>ID pesanan tidak ditemukan.</div>";
}
?>
