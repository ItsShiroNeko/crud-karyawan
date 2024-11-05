<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jabatan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container-fluid">
 
    <center><h2 class="mt-4">List Jabatan</h2></center>
    <br/>
    <br/>
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No</th>
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
                <td><?php echo $no++?></td>
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
    <a href="input_jab.php" class="btn btn-primary">Tambah Jabatan</a>
    <a href="../index.php" class="btn btn-danger">Kembali</a>
</body>
</html>
