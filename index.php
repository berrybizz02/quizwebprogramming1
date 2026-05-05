<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web - NIM Genap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="form-header">
            <h2>Form Input Data (NIM Genap)</h2>
        </div>
        
        <form action="" method="POST">
            <div class="input-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>
            </div>

            <div class="input-group">
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas" required>
            </div>

            <div class="input-group">
                <label for="matakuliah">Mata Kuliah</label>
                <input type="text" id="matakuliah" name="matakuliah" placeholder="Nama Mata Kuliah" required>
            </div>

            <div class="input-group">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="SI">Sistem Informasi (SI)</option>
                    <option value="TI">Teknik Informatika (TI)</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>
    </div>

</body>
</html>