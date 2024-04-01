<?php include_once 'webmenu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Anggi Alfian</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin-top: 0;
        }

        .menu-container {
            padding: 10px;
            text-align: center;
            background-color: khaki;
            color: blue;
        }

        .menu-container a {
            text-decoration: none;
            color: blue;
            margin-right: 10px;
        }

        .menu-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>MobilKu</h1>
    </header>
    <div class="menu-container">
        <?php foreach ($menu_atas as $key => $value) : ?>
            <a href="index.php?hal=<?php echo $key; ?>"><?php echo $value; ?></a>
        <?php endforeach; ?>
    </div>