<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Produk Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
        }
        form input[type="text"], form input[type="email"], form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        form textarea {
            resize: none;
            height: 100px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemesanan Produk Mobil</h1>
        <form action="proses_pemesanan.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" required>
            
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
            
            <label for="produk">Produk yang Dipesan:</label>
            <select id="produk" name="produk" required>
                <option value="">Pilih Produk</option>
                <option value="Mobil 1">Daihatsu Ayla</option>
                <option value="Mobil 2">Toyota Avanxa</option>
                <option value="Mobil 2">Toyota Rush</option>
            </select>
            
            <input type="submit" value="Pesan Sekarang">
        </form>
    </div>
</body>
</html>
