<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="container mx-auto mt-10 p-5 bg-gray-800 shadow-lg rounded-lg">
    <h2 class="text-center text-2xl font-bold">Daftar Pesanan</h2>
    <table class="min-w-full bg-gray-800 mt-4 rounded-lg">
        <thead>
            <tr class="bg-gray-700">
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Nama</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Nomor HP</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Durasi Sewa (bulan)</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Jenis Properti</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Harga Paket</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Total Tagihan</th>
                <th class="py-3 px-4 text-left text-sm font-medium text-gray-300">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil semua pesanan
            $sql = "SELECT * FROM pemesanan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Iterasi melalui semua pesanan
                while($row = $result->fetch_assoc()) {
                    // Decode properti yang dipesan dalam bentuk JSON
                    $properti = json_decode($row['properti']);

                    // Buat array untuk menyimpan jenis properti yang dipilih
                    $jenisProperti = [];

                    // Memeriksa properti yang dipesan berdasarkan harga
                    if (in_array(500000, $properti)) {
                        $jenisProperti[] = "Kamar";
                    }
                    if (in_array(1000000, $properti)) {
                        $jenisProperti[] = "Pavilion";
                    }
                    if (in_array(2000000, $properti)) {
                        $jenisProperti[] = "Rumah";
                    }
                    if (in_array(1500000, $properti)) {
                        $jenisProperti[] = "Kios";
                    }
                    if (in_array(2500000, $properti)) {
                        $jenisProperti[] = "Ruko";
                    }

                    // Gabungkan properti yang dipilih menjadi string terpisah oleh koma
                    $jenisPropertiStr = implode(", ", $jenisProperti);

                    // Tampilkan data di dalam tabel
                    echo "<tr class='hover:bg-gray-700'>
                            <td class='py-3 px-4'>".$row['nama_pemesan']."</td>
                            <td class='py-3 px-4'>".$row['phone']."</td>
                            <td class='py-3 px-4'>".$row['durasi_sewa']."</td>
                            <td class='py-3 px-4'>".$jenisPropertiStr."</td>
                            <td class='py-3 px-4'>Rp".number_format($row['harga_paket'], 0, ',', '.')."</td>
                            <td class='py-3 px-4'>Rp".number_format($row['total_tagihan'], 0, ',', '.')."</td>
                            <td class='py-3 px-4'>
                                <a href='edit_pesanan.php?id=".$row['id']."' class='bg-yellow-500 hover:bg-yellow-400 text-white px-2 py-1 rounded'>Edit</a> 
                                <a href='hapus_pesanan.php?id=".$row['id']."' class='bg-red-500 hover:bg-red-400 text-white px-2 py-1 rounded'>Hapus</a>
                            </td>
                          </tr>";
                }
            } else {
                // Tampilkan pesan jika tidak ada pesanan
                echo "<tr><td colspan='7' class='text-center py-3'>Tidak ada pesanan ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="index.php" class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded mt-4 inline-block">Kembali</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include 'footer.php'; ?>
</html>
