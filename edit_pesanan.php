<?php include 'koneksi.php'; ?>
<?php include 'header.php';

// Ambil ID pesanan dari URL
$id = $_GET['id'];

// Ambil data pesanan berdasarkan ID
$sql = "SELECT * FROM pemesanan WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "<div class='bg-red-500 text-white p-4 rounded'>Pesanan tidak ditemukan!</div>";
    exit;
}

$pesan = ''; // Variabel untuk pesan keberhasilan atau error

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $durasi_sewa = $_POST['durasi_sewa'];
    $properti = isset($_POST['properti']) ? json_encode($_POST['properti']) : json_encode([]);
    $harga_paket = str_replace(['Rp', '.'], '', $_POST['harga_paket']); // Menghapus 'Rp' dan titik
    $jumlah_tagihan = str_replace(['Rp', '.'], '', $_POST['jumlah_tagihan']);

    // Update data pesanan
    $sql = "UPDATE pemesanan SET 
                nama_pemesan='$nama', 
                phone='$phone',  
                durasi_sewa='$durasi_sewa', 
                properti='$properti', 
                harga_paket='$harga_paket', 
                total_tagihan='$jumlah_tagihan' 
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $pesan = "<div class='bg-green-500 text-white p-4 rounded mt-3'>Pesanan berhasil diperbarui!</div>";
        // Refresh data setelah update
        $sql = "SELECT * FROM pemesanan WHERE id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    } else {
        $pesan = "<div class='bg-red-500 text-white p-4 rounded mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>

    <div class="container mx-auto mt-10 p-6 bg-gray-800 rounded-lg">
        <h2 class="text-center text-2xl font-bold mb-6">Edit Pemesanan Rental Properti</h2>
        <form action="" method="POST" id="formPemesanan" class="space-y-4">
            <div>
                <label for="nama" class="block">Nama Pemesan:</label>
                <input type="text" class="w-full p-2 bg-gray-700 rounded" id="nama" name="nama" value="<?php echo $row['nama_pemesan']; ?>" required>
            </div>
            <div>
                <label for="phone" class="block">Nomor HP/Telp:</label>
                <input type="text" class="w-full p-2 bg-gray-700 rounded" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>
            </div>
            <div>
                <label for="durasi_sewa" class="block">Durasi Sewa (bulan):</label>
                <input type="number" class="w-full p-2 bg-gray-700 rounded" id="durasi_sewa" name="durasi_sewa" value="<?php echo $row['durasi_sewa']; ?>" min="1" required>
            </div>
            <div>
                <label for="properti" class="block">Jenis Properti:</label><br>
                <?php
                $propertiDipilih = json_decode($row['properti']);
                $propertiList = [
                    ['id' => 'kamar', 'label' => 'Kamar', 'value' => 500000],
                    ['id' => 'pavilion', 'label' => 'Pavilion', 'value' => 1000000],
                    ['id' => 'rumah', 'label' => 'Rumah', 'value' => 2000000],
                    ['id' => 'kios', 'label' => 'Kios', 'value' => 1500000],
                    ['id' => 'ruko', 'label' => 'Ruko', 'value' => 2500000],
                ];
                foreach ($propertiList as $item) {
                    $checked = in_array($item['value'], $propertiDipilih) ? 'checked' : '';
                    echo '<div class="inline-block mr-4">
                            <input class="form-radio" type="radio" id="'.$item['id'].'" name="properti[]" value="'.$item['value'].'" '.$checked.'>
                            <label class="ml-2" for="'.$item['id'].'">'.$item['label'].'</label>
                          </div>';
                }
                ?>
            </div>
            <div>
                <label for="harga_paket" class="block">Harga Rental:</label>
                <input type="text" class="w-full p-2 bg-gray-700 rounded" id="harga_paket" name="harga_paket" value="Rp<?php echo number_format($row['harga_paket'], 0, ',', '.'); ?>" readonly>
            </div>
            <div>
                <label for="jumlah_tagihan" class="block">Jumlah Tagihan:</label>
                <input type="text" class="w-full p-2 bg-gray-700 rounded" id="jumlah_tagihan" name="jumlah_tagihan" value="Rp<?php echo number_format($row['total_tagihan'], 0, ',', '.'); ?>" readonly>
            </div>
            <div class="flex space-x-4">
                <button type="button" class="bg-blue-600 hover:bg-blue-700 p-2 rounded" onclick="hitungTotal()">Hitung</button>
                    <button type="submit" name="submit" class="bg-green-600 hover:bg-green-700 p-2 rounded">Simpan</button>
                    <button type="reset" class="bg-red-600 hover:bg-red-700 p-2 rounded">Reset</button>
                    <a href="order.php" class="bg-gray-600 hover:bg-gray-700 p-2 rounded">Kembali</a>
            </div>
        </form>

        <!-- Pesan keberhasilan atau error akan muncul di bawah tombol -->
        <?php echo $pesan; ?>
    </div>

    <script>
        function hitungTotal() {
            const month = parseInt(document.getElementById('durasi_sewa').value);
            if (isNaN(month) || month < 1) {
                alert('Durasi sewa harus lebih dari 0!');
                return;
            }
            let total = 0;
            const propertiChecked = document.querySelectorAll('input[name="properti[]"]:checked');
            if (propertiChecked.length === 0) {
                alert('Pilih jenis properti!');
                return;
            }
            propertiChecked.forEach((item) => {
                total += parseInt(item.value);
            });
            const packagePrice = total;
            const totalBill = month * packagePrice;

            document.getElementById('harga_paket').value = 'Rp' + packagePrice.toLocaleString('id-ID');
            document.getElementById('jumlah_tagihan').value = 'Rp' + totalBill.toLocaleString('id-ID');
        }
    </script>
</body>
<?php include 'footer.php'; ?>
</html>
