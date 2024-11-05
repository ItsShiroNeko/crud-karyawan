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
            <a class="btn btn-danger" href="../index.php">Kembali</a>
        </form>
    </div>
</body>
<body class="container-fluid">
 
    <center><h2 class="mt-4">List Jabatan</h2></center>
    <br/>
    <br/>
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include '../conn.php';
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM jabatan  ");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                
                <td><?php echo htmlspecialchars($d['nama_jab']); ?></td>
                <td><?php echo "Rp" . number_format(htmlspecialchars($d['gaji_pokok']), 2, ",", "."); ?></td>
                <td><?php echo "Rp" . number_format(htmlspecialchars($d['tunjangan']), 2, ",", "."); ?></td>
                <td>
                    <a href="edit_jab.php?id=<?php echo $d['id_jab']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus_jab.php?id=<?php echo $d['id_jab']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
            </td>
            </tr>   
            <?php 
        }
        ?>
        </tbody>
    </table>
</body>
</html>
