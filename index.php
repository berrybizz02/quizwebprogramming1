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
        <form action="#">
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

            <button type="submit" class="btn-simpan">SUBMIT</button>        </form>
    </div>

</body>
</html>