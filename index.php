<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Form Input Barang</h2>
        <form id="barangForm">
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" id="kode" placeholder="Contoh: BRG-001" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" id="nama" placeholder="Masukkan nama barang" required>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" id="jumlah" min="1" value="1" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga (Rp)</label>
                    <input type="number" id="harga" placeholder="0" required>
                </div>
            </div>

            <button type="submit" class="btn-simpan">SUBMIT</button>
        </form>

        <div id="hasil" class="hasil" style="display: none;">
            <h3>Hasil Input:</h3>
            <p><strong>Kode Barang:</strong> <span id="hasilKode"></span></p>
            <p><strong>Nama Barang:</strong> <span id="hasilNama"></span></p>
            <p><strong>Jumlah:</strong> <span id="hasilJumlah"></span></p>
            <p><strong>Harga:</strong> <span id="hasilHarga"></span></p>
            <p><strong>Total Harga:</strong> Rp <span id="hasilTotal"></span></p>
        </div>
    </div>

    <script>
        document.getElementById('barangForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form

            // Ambil nilai dari input
            const kode = document.getElementById('kode').value;
            const nama = document.getElementById('nama').value;
            const jumlah = parseInt(document.getElementById('jumlah').value);
            const harga = parseFloat(document.getElementById('harga').value);

            // Hitung total harga
            const total = jumlah * harga;

            // Tampilkan hasil
            document.getElementById('hasilKode').textContent = kode;
            document.getElementById('hasilNama').textContent = nama;
            document.getElementById('hasilJumlah').textContent = jumlah;
            document.getElementById('hasilHarga').textContent = harga.toLocaleString('id-ID');
            document.getElementById('hasilTotal').textContent = total.toLocaleString('id-ID');

            // Tampilkan div hasil
            document.getElementById('hasil').style.display = 'block';

            // Scroll ke hasil
            document.getElementById('hasil').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

</body>
</html>