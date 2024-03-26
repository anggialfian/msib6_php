<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pribadi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
        }
        .profile-pic {
            display: block;
            margin: 0 auto;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            object-position: center;
            margin-bottom: 20px;
        }
        .info {
            text-align: center;
        }
        .info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biodata Pribadi</h1>
        <img src="https://media.licdn.com/dms/image/C5603AQEDAZzzXl8lrA/profile-displayphoto-shrink_800_800/0/1632510309321?e=2147483647&v=beta&t=rDYgraf2kv8ZfbH4AUJYvZ5xeb_rxURTDev_IFKaMRA" alt="Foto Profil" class="profile-pic">
        <div class="info">
            <?php
                $nama = "Anggi Alfian";
                $umur = "23 tahun";
                $alamat = "Kp. Cimanggis RT 005/001, Mekarwangi, Tanah Sareal, Kota Bogor";
                $email = "angg21042ti@student.nurulfikri.ac.id";
                $no_telepon = "+62895414792428";
                $pendidikan = "STT Terpadu Nurul Fikri Teknik Informatika";
                $pekerjaan = "Mahasiswa";

                echo "<p><strong>Nama:</strong> $nama</p>";
                echo "<p><strong>Umur:</strong> $umur</p>";
                echo "<p><strong>Alamat:</strong> $alamat</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>No. Telepon:</strong> $no_telepon</p>";
                echo "<p><strong>Pendidikan:</strong> $pendidikan</p>";
                echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
            ?>
        </div>
    </div>
</body>
</html>
