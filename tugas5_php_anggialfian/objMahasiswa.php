<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $universitas = $_POST['universitas'];
    $mataKuliah = $_POST['mataKuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $universitas, $mataKuliah, $nilai);

    session_start();
    $_SESSION['mahasiswa'] = $mahasiswa;

    header("Location: raportMahasiswa.php");
    exit();
}
?>

<html>
<head>
    <title>Form Nilai Ujian - Anggi Alfian </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 style="text-align:center; padding: 0 0 20px 0">Form Nilai Ujian</h1>
    <form action="" method="post">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="nim" class="col-sm-4 col-form-label">NIM:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="universitas" class="col-sm-4 col-form-label">Universitas:</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="universitas" name="universitas">
                            <option value="">-- Pilih Universitas --</option>
                            <option value="STT Terpadu Nurul Fikri">STT Terpadu Nurul Fikri</option>
                            <option value="Universitas Indonesia">Universitas Indonesia</option>
                            <option value="Universitas Ibnu Khaldun">Universitas Ibnu Khaldun</option>
                            <option value="UNIGA">UNIGA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mataKuliah" class="col-sm-4 col-form-label">Mata Kuliah:</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="mataKuliah" name="mataKuliah">
                            <option value="">-- Pilih Mata Kuliah --</option>
                            <option value="PHP">PHP</option>
                            <option value="Javascript">Javascript</option>
                            <option value="Laravel">Laravel</option>
                            <option value="MySQL Database">MySQL Database</option>
                            <option value="HTML">HTML</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-sm-4 col-form-label">Nilai:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nilai" name="nilai">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group" style="text-align: center;">
             <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<footer>
    <div class="container"  style="text-align: center; padding-top: 400px;">
        <p>&copy; 2024 Hak Cipta Milik Anggi Alfian Grup 1 MSIB 6</p>
    </div>
</footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
