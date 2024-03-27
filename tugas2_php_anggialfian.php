<!DOCTYPE html>
<html>
<head>
    <title>Form Belanja - Anggi Alfian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width:50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        select {
            width: 105%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }


        input[type="submit"] {
            width: 105%;
            padding: 10px;
            border: none;
            background-color: #00BFFF;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #1E90FF;
        }
        .output {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Belanja</h2>
        <form method="post" action="tugas2_php_anggialfian.php">
            <label for="nama_pelanggan">Nama Pelanggan:</label><br>
            <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Anda" required><br>

            <label for="produk">Produk Pilihan:</label><br>
            <select id="produk" name="produk" required>
                <option value="null">-- Pilih Produk Anda --</option>
                <option value="TV">TV</option>
                <option value="KULKAS">KULKAS</option>
                <option value="MESIN CUCI">MESIN CUCI</option>
                <option value="AC">AC</option>
            </select><br>

            <label for="jumlah_beli">Jumlah Beli:</label><br>
            <input type="number" id="jumlah_beli" name="jumlah_beli" min="1" placeholder="Masukkan Jumlah Barang" required><br>

            <input type="submit" name="submit" value="Beli">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $produk = $_POST['produk'];
            $jumlah_beli = $_POST['jumlah_beli'];

            // Harga Satuan
            switch($produk) {
                case 'TV':
                    $harga_satuan = 1250000;
                    break;
                case 'KULKAS':
                    $harga_satuan = 2500000;
                    break;
                case 'MESIN CUCI':
                    $harga_satuan = 1500000;
                    break;
                case 'AC':
                    $harga_satuan = 4000000;
                    break;
                default:
                    $harga_satuan = 0;
            }

            // Total Belanja
            $total_belanja = $harga_satuan * $jumlah_beli;

            // Potongan diskon 20%
            $diskon = 0.2 * $total_belanja;

            // PPN 10%
            $ppn = 0.1 * ($total_belanja - $diskon);

            // Harga Bersih
            $harga_bersih = ($total_belanja - $diskon) + $ppn;

            // Output Pesanan
            echo "<div class='output'>";
            echo "<h2>Total Pesanan:</h2>";
            echo "<p><strong>Nama Pelanggan:</strong> $nama_pelanggan</p>";
            echo "<p><strong>Produk Pilihan:</strong> $produk</p>";
            echo "<p><strong>Jumlah Beli:</strong> $jumlah_beli</p>";
            echo "<p><strong>Harga Satuan:</strong> Rp " . $harga_satuan . "</p>";
            echo "<p><strong>Total Belanja:</strong> Rp " . $total_belanja . "</p>";
            echo "<p><strong>Potongan Diskon:</strong> Rp " . $diskon . "</p>";
            echo "<p><strong>PPN:</strong> Rp " . $ppn . "</p>";
            echo "<p><strong>Harga Bersih:</strong> Rp " . $harga_bersih . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
