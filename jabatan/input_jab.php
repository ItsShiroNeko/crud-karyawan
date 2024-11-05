<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jabatan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Input Jabatan</h2>
        <form action="add_jab.php" method="POST">
            <div class="form-group">
                <label for="jabatan">Nama Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" required placeholder="direktur">
            </div>

            <div class="form-group">
                <label for="gaji">Gaji Pokok</label>
                <input type="number" id="gaji" name="gaji" class="form-control" required placeholder="123456789">
            </div>

            <div class="form-group">
                <label for="tunjangan">Tunjangan</label>
                <input type="number" id="tunjangan" name="tunjangan" class="form-control" required placeholder="123456789">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-danger" href="list_jab.php">Kembali</a>
        </form>
    </div>
</body>
</html>
