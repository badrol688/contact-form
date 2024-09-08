    <!DOCTYPE html>
    <html>

    <head>
        <title>Formulir Pengisian</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #e9ecef;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            h2 {
                color: #343a40;
                text-align: center;
            }

            form {
                background-color: #ffffff;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                width: 100%;
            }

            label {
                font-weight: bold;
                margin-bottom: 8px;
                display: block;
                color: #495057;
            }

            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ced4da;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 16px;
                background-color: #f8f9fa;
            }

            input[type="text"]:focus,
            input[type="email"]:focus,
            textarea:focus {
                border-color: #007bff;
                background-color: #ffffff;
                outline: none;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            }

            input[type="submit"] {
                background-color: #007bff;
                color: #ffffff;
                padding: 12px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                width: 100%;
                transition: background-color 0.3s ease;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <form action="" method="post">
            <h2>Formulir Pengisian</h2>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="nama" required>

            <label for="nim">Nim:</label>
            <input type="text" name="nim" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="hobi">Hobi:</label>
            <input type="text" name="hobi" required>

            <label for="address">Alamat:</label>
            <textarea name="alamat" rows="4" cols="50" required></textarea>

            <label for="message">Pesan:</label>
            <textarea name="pesan" rows="4" cols="50" required></textarea>

            <input type="submit" name="proses" value="kirim">
        </form>
    </body>

    </html>

    <?php
    include "koneksi.php";

    if (isset($_POST['proses'])) {
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $hobi = mysqli_real_escape_string($koneksi, $_POST['hobi']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);

        $sql = "INSERT INTO biodata (nama, nim, email, hobi, alamat, pesan) VALUES ('$nama', '$nim', '$email', '$hobi', '$alamat', '$pesan')";
        $result = mysqli_query($koneksi, $sql);
    }
    ?>