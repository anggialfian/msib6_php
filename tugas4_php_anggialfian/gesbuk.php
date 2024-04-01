<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gesbuk</title>
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
        form input[type="text"], form textarea {
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
        .guest-list {
            list-style: none;
            padding: 0;
        }
        .guest-list-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .guest-name {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <form action="#" method="post" id="guestForm">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            
            <input type="submit" value="Tambahkan">
        </form>
        <h2>Daftar Tamu</h2>
        <ul class="guest-list" id="guestList">
        </ul>
    </div>

    <script>
        document.getElementById('guestForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var nameInput = document.getElementById('name').value;
            var messageInput = document.getElementById('message').value;

            var listItem = document.createElement('li');
            listItem.className = 'guest-list-item';
            listItem.innerHTML = '<span class="guest-name">' + nameInput + '</span>: ' + messageInput;

            document.getElementById('guestList').appendChild(listItem);

            document.getElementById('name').value = '';
            document.getElementById('message').value = '';
        });
    </script>
</body>
</html>
