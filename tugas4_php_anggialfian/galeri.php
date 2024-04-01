<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Produk Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }
        .gallery-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .gallery-item img {
            width: 400px;
            height: auto;
            border-radius: 5px 5px 0 0;
        }
        .gallery-item-content {
            padding: 15px;
        }
        .gallery-item h3 {
            margin-top: 0;
        }
        .gallery-item p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Galeri Produk Mobil</h1>
        <div class="gallery">
            <div class="gallery-item">
                <img src="img/mobil1.jpg" alt="Mobil 1">
                <div class="gallery-item-content">
                    <h3>Daihatsu Ayla</h3>
                    <p>Hatchback</p>
                    <p>Harga: Rp.134.000.000</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="img/mobil2.jpg" alt="Mobil 2">
                <div class="gallery-item-content">
                    <h3>Toyota Avanza</h3>
                    <p>MPV</p>
                    <p>Harga: Rp.235.100.000</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="img/mobil3.jpg" alt="Mobil 2">
                <div class="gallery-item-content">
                    <h3>Mobil 2</h3>
                    <p>SUV</p>
                    <p>Harga: Rp.282.700.000</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>