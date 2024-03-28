<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa by Anggi Alfian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
// Data Mahasiswa
$mahasiswa = [
    ["No" => 1, "Nama Mahasiswa" => "Anggi Alfian", "NIM" => "0110221042", "Nilai" => 90],
    ["No" => 2, "Nama Mahasiswa" => "Reza Gunawan", "NIM" => "0110212935", "Nilai" => 72],
    ["No" => 3, "Nama Mahasiswa" => "Fayza Yurida", "NIM" => "0110226758", "Nilai" => 80],
    ["No" => 4, "Nama Mahasiswa" => "Ihram Al Abillah", "NIM" => "0110229896", "Nilai" => 55],
    ["No" => 5, "Nama Mahasiswa" => "Apri Yansyah", "NIM" => "0110224567", "Nilai" => 88],
    ["No" => 6, "Nama Mahasiswa" => "Rika Oktavia", "NIM" => "0110217659", "Nilai" => 83],
    ["No" => 7, "Nama Mahasiswa" => "Gigih Zhafrans", "NIM" => "0110229876", "Nilai" => 95],
    ["No" => 8, "Nama Mahasiswa" => "Siti Nur Halimah", "NIM" => "0110214454", "Nilai" => 82],
    ["No" => 9, "Nama Mahasiswa" => "Adhelia Ananda", "NIM" => "0110228976", "Nilai" => 95],
    ["No" => 10, "Nama Mahasiswa" => "Sekar Suciana", "NIM" => "0110229999", "Nilai" => 63],
    ["No" => 11, "Nama Mahasiswa" => "Abdullah Azzam", "NIM" => "0110212311", "Nilai" => 87],
    ["No" => 12, "Nama Mahasiswa" => "M. Hilmi Faishal", "NIM" => "0110216513", "Nilai" => 79],
    ["No" => 13, "Nama Mahasiswa" => "Dhodi Yoga Sahida", "NIM" => "0110229946", "Nilai" => 70],
    ["No" => 14, "Nama Mahasiswa" => "Nabila Reza", "NIM" => "0110226578", "Nilai" => 88],
    ["No" => 15, "Nama Mahasiswa" => "Basirudin", "NIM" => "0110228814", "Nilai" => 65]
];

// Nilai Tertinggi
$max = max(array_column($mahasiswa, 'Nilai'));

// Nilai Terendah
$min = min(array_column($mahasiswa, 'Nilai'));

// Nilai Rata-rata
$avg = array_sum(array_column($mahasiswa, 'Nilai')) / count($mahasiswa);

// Jumlah Mahasiswa
$totalMahasiswa = count($mahasiswa);

// Jumlah Keseluruhan Nilai
$totalNilai = array_sum(array_column($mahasiswa, 'Nilai'));

// Fungsi Ternary untuk Keterangan
function getKeterangan($nilai) {
    return $nilai >= 65 ? "Lulus" : "Tidak Lulus";
}

// Fungsi Grade Multi Kondisi
function getGrade($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 65) {
        return "C";
    } elseif ($nilai >= 55) {
        return "D";
    } else {
        return "E";
    }
}

// Fungsi Switch Case untuk Predikat
function getPredikat($grade) {
    switch ($grade) {
        case 'A':
            return "Memuaskan";
            break;
        case 'B':
            return "Bagus";
            break;
        case 'C':
            return "Cukup";
            break;
        case 'D':
            return "Kurang";
            break;
        case 'E':
            return "Buruk";
            break;
        default:
            return "Tidak Diketahui";
            break;
    }
}
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Data Nilai Mahasiswa</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">NIM</th>
                <th scope="col">Nilai</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Grade</th>
                <th scope="col">Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mahasiswaTabel): ?>
                <tr>
                    <td><?php echo $mahasiswaTabel["No"]; ?></td>
                    <td><?php echo $mahasiswaTabel["Nama Mahasiswa"]; ?></td>
                    <td><?php echo $mahasiswaTabel["NIM"]; ?></td>
                    <td><?php echo $mahasiswaTabel["Nilai"]; ?></td>
                    <td><?php echo getKeterangan($mahasiswaTabel["Nilai"]); ?></td>
                    <td><?php echo getGrade($mahasiswaTabel["Nilai"]); ?></td>
                    <td><?php echo getPredikat(getGrade($mahasiswaTabel["Nilai"])); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align: right">Nilai Tertinggi</td>
                <td colspan="4" style="text-align: center"><?php echo $max; ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right">Nilai Terendah</td>
                <td colspan="4" style="text-align: center"><?php echo $min; ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right">Nilai Rata-rata</td>
                <td colspan="4" style="text-align: center"><?php echo round($avg, 2); ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right">Jumlah Mahasiswa</td>
                <td colspan="4" style="text-align: center"><?php echo $totalMahasiswa; ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right">Jumlah Keseluruhan Nilai</td>
                <td colspan="4" style="text-align: center"><?php echo $totalNilai; ?></td>
            </tr>
        </tfoot>
    </table>
    <footer class="text-center mt-5">
        <p>&copy; Dibuat oleh Anggi Alfian</p>
    </footer>
</div>

</body>
</html>
