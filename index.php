<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body class="container-fluid">
 
    <center><h2 class="mt-4">CRUD Data Karyawan</h2></center>
    <br/>
    <br/>
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>No. Induk</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include 'conn.php';
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM karyawan JOIN jabatan ON karyawan.id_jab = jabatan.id_jab");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($d['no_induk']); ?></td>
                <td><?php echo htmlspecialchars($d['nama']); ?></td>
                <td><?php echo htmlspecialchars($d['nama_jab']); ?></td>
                <td><?php echo htmlspecialchars($d['gaji_pokok']); ?></td>
                <td><?php echo htmlspecialchars($d['tunjangan']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id_kar']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?php echo $d['id_kar']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php 
        }
        ?>
        </tbody>
    </table>
    <a href="input.php" class="btn btn-primary mb-3">+ Tambah Karyawan</a>
</body>
</html>
