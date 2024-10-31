<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Karyawan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Input Karyawan</h2>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="no_induk">No Induk</label>
                <input type="text" id="no_induk" name="no_induk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_jab">Jabatan</label>
                <select name="id_jab" id="id_jab" class="form-control" required>
                    <option value="">---</option>
                    <?php
                    include "conn.php";
                    $query = mysqli_query($conn, "SELECT * FROM jabatan") or die (mysqli_errno($conn));
                    while($data = mysqli_fetch_array($query)){
                        echo "<option value='$data[id_jab]'>$data[nama_jab]</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-danger" href="index.php">Kembali</a>
        </form>
    </div>
</body>
</html>
