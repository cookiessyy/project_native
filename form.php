<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

    <div class="container mx-auto mt-10 p-5 bg-gray-800 shadow-lg rounded-lg">
        <h2 class="text-center text-2xl font-bold">Form Pemesanan Rental Properti</h2>
        <form action="form.php" method="POST" id="formPemesanan" class="mt-4">
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium">Nama Pemesan:</label>
                <input type="text" class="mt-1 block w-full border border-gray-600 rounded-md p-2 bg-gray-700 text-white" id="nama" name="nama" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium">Nomor HP/Telp:</label>
                <input type="text" class="mt-1 block w-full border border-gray-600 rounded-md p-2 bg-gray-700 text-white" id="phone" name="phone" required>
            </div>
            <div class="mb-4">
                <label for="durasi_sewa" class="block text-sm font-medium">Durasi Sewa (bulan):</label>
                <input type="number" class="mt-1 block w-full border border-gray-600 rounded-md p-2 bg-gray-700 text-white" id="durasi_sewa" name="durasi_sewa" min="1" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Jenis Properti:</label>
                <div class="flex space-x-4">
                    <label class="flex items-center">
                        <input class="form-radio text-indigo-600" type="radio" name="properti[]" value="500000">
                        <span class="ml-2">Kamar</span>
                    </label>
                    <label class="flex items-center">
                        <input class="form-radio text-indigo-600" type="radio" name="properti[]" value="1000000">
                        <span class="ml-2">Pavilion</span>
                    </label>
                    <label class="flex items-center">
                        <input class="form-radio text-indigo-600" type="radio" name="properti[]" value="2000000">
                        <span class="ml-2">Rumah</span>
                    </label>
                    <label class="flex items-center">
                        <input class="form-radio text-indigo-600" type="radio" name="properti[]" value="1500000">
                        <span class="ml-2">Kios</span>
                    </label>
                    <label class="flex items-center">
                        <input class="form-radio text-indigo-600" type="radio" name="properti[]" value="2500000">
                        <span class="ml-2">Ruko</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="harga_paket" class="block text-sm font-medium">Harga Rental:</label>
                <input type="text" class="mt-1 block w-full border border-gray-600 rounded-md p-2 bg-gray-700 text-white" id="harga_paket" name="harga_paket" readonly>
            </div>
            <div class="mb-4">
                <label for="jumlah_tagihan" class="block text-sm font-medium">Jumlah Tagihan:</label>
                <input type="text" class="mt-1 block w-full border border-gray-600 rounded-md p-2 bg-gray-700 text-white" id="jumlah_tagihan" name="jumlah_tagihan" readonly>
            </div>
            <div class="flex space-x-4">
                <button type="button" class="bg-blue-600 px-4 py-2 rounded-md" onclick="hitungTotal()">Hitung</button>
                <button type="submit" name="submit" class="bg-green-600 px-4 py-2 rounded-md">Pesan</button>
                <button type="reset" class="bg-red-600 px-4 py-2 rounded-md">Reset</button>
            </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $phone = $_POST['phone'];
            $durasi_sewa = $_POST['durasi_sewa'];
            $properti = json_encode($_POST['properti']);
            $harga_paket = str_replace(['Rp', '.'], '', $_POST['harga_paket']);
            $jumlah_tagihan = str_replace(['Rp', '.'], '', $_POST['jumlah_tagihan']);

            $sql = "INSERT INTO pemesanan (nama_pemesan, phone, durasi_sewa, properti, harga_paket, total_tagihan) VALUES ('$nama', '$phone', '$durasi_sewa', '$properti', '$harga_paket', '$jumlah_tagihan')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='bg-green-600 text-white p-2 mt-3 rounded'>Pemesanan berhasil disimpan!</div>";
            } else {
                echo "<div class='bg-red-600 text-white p-2 mt-3 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

        function validasiForm() {
            const nama = document.getElementById('nama').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const durasi = document.getElementById('durasi_sewa').value;
            const propertiDipilih = document.querySelectorAll('input[name="properti[]"]:checked').length;
            const hargaPaket = document.getElementById('harga_paket').value.trim();
            const jumlahTagihan = document.getElementById('jumlah_tagihan').value.trim();

            if (nama === "") {
                alert("Nama pemesan harus diisi!");
                return false;
            }
            if (phone === "") {
                alert("Nomor HP/Telp harus diisi!");
                return false;
            }
            if (durasi === "" || durasi < 1) {
                alert("Durasi sewa minimal 1 bulan!");
                return false;
            }
            if (propertiDipilih === 0) {
                alert("Anda harus memilih salah satu properti!");
                return false;
            }
            if (hargaPaket === "" || jumlahTagihan === "") {
                alert("Anda harus menghitung total harga sebelum memesan!");
                return false;
            }
            return true;
        }
    </script> 
</body>
<?php include 'footer.php'; ?>
</html>
