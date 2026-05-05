<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .hasil { margin-top: 20px; padding: 10px; border: 1px solid #ccc; background-color: #f9f9f9; width: fit-content; }
        form div { margin-bottom: 10px; }
        label { display: inline-block; width: 100px; }
    </style>
</head>
<body>

    <h2>Form Input Data (NIM Genap)</h2>

    <form method="POST" action="">
        <div>
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM Anda" required>
        </div>
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Masukkan Kelas" required>
        </div>
        <div>
            <label>Mata Kuliah</label>
            <input type="text" name="matkul" placeholder="Nama Mata Kuliah" required>
        </div>
        <div>
            <label>Jurusan</label>
            <select name="jurusan" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
            </select>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Logika untuk menampilkan data setelah tombol Submit diklik
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $matkul = $_POST['matkul'];
        $jurusan = $_POST['jurusan'];

        echo "<div class='hasil'>";
        echo "<h3>Data yang Dikirim:</h3>";
        echo "NIM: " . $nim . "<br>";
        echo "Kelas: " . $kelas . "<br>";
        echo "Mata Kuliah: " . $matkul . "<br>";
        echo "Jurusan: " . $jurusan;
        echo "</div>";
    }
    ?>

</body>
</html>