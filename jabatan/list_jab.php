<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jabatan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .table th,
    .table td {
        vertical-align: middle;
    }

    .sidebar {
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        width: 230px;
        background-color: #343a40;
        color: #fff;
        padding-top: 1rem;
    }

    .sidebar a {
        color: #fff;
        display: block;
        padding: 20px;
        text-decoration: none;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .content {
        margin-left: 10rem;
        padding: 2rem;
    }
</style>

<body class="container">
    <div class="sidebar">
        <h5 class="text-center fw-bold text-uppercase">admin dashboard</h5>
        <a href="../index.php" class="fw-bold ">Karyawan</a>
        <a href="list_jab.php">Jabatan</a>
    </div>
    <div class="content">

        <center>
            <h2 class="mt-4">Data Jabatan</h2>
        </center>
        <br />
        <br />
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

                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo htmlspecialchars($d['nama_jab']); ?></td>
                        <td><?php echo "Rp" . number_format(htmlspecialchars($d['gaji_pokok']), 2, ",", "."); ?></td>
                        <td><?php echo "Rp" . number_format(htmlspecialchars($d['tunjangan']), 2, ",", "."); ?></td>
                        <td>
                            <a href="edit_jab.php?id=<?php echo $d['id_jab']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus_jab.php?id=<?php echo $d['id_jab']; ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="input_jab.php" class="btn btn-primary">Tambah Jabatan</a>
    </div>
</body>

</html>