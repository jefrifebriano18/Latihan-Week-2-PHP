<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 500px;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 12px;
        }
        label {
            display: block;
            margin-bottom: 4px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 8px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Data Pengguna</h2>

    <!-- Form HTML dengan Method POST -->
    <form action="" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label>Nomor Telepon:</label>
            <input type="text" name="no_telp" required>
        </div>

        <button type="submit" name="submit">Submit Data</button>
    </form>

    <!-- Pemrosesan PHP -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jk = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_telp = htmlspecialchars($_POST['no_telp']);
    ?>
        <div class="hasil">
            <h3>Hasil Input Data:</h3>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo $jk; ?></p>
            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
            <p><strong>No. Telepon:</strong> <?php echo $no_telp; ?></p>
        </div>
    <?php
    }
    ?>
</div>

</body>
</html>