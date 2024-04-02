<?php
require_once 'Mahasiswa.php';
session_start();

if (isset($_SESSION['mahasiswa'])) {
    $mahasiswa = $_SESSION['mahasiswa'];
    unset($_SESSION['mahasiswa']);
} else {
    header("Location: objMahasiswa.php");
    exit();
}
?>

<html>
<head>
    <title>Raport Mahasiswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center; padding: 20px">Data Nilai Ujian Mahasiswa</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Universitas</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $mahasiswa->nim; ?></td>
                    <td><?php echo $mahasiswa->nama; ?></td>
                    <td><?php echo $mahasiswa->universitas; ?></td>
                    <td><?php echo $mahasiswa->mataKuliah; ?></td>
                    <td><?php echo $mahasiswa->nilai; ?></td>
                    <td><?php echo $mahasiswa->getGrade(); ?></td>
                    <td><?php echo $mahasiswa->getPredikat(); ?></td>
                    <td><?php echo $mahasiswa->getStatus(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
    <div class="container"  style="text-align: center; padding-top: 642px;">
        <p>&copy; 2024 Hak Cipta Milik Anggi Alfian Grup 1 MSIB 6</p>
    </div>
</footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
