<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jabatan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 230px;
            background-color: #1e3a8a;
            color: #fff;
            padding-top: 1rem;
        }

        .sidebar h5 {
            font-weight: bold;
            color: #f8f9fa;
        }

        .sidebar a {
            color: #f8f9fa;
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
            font-weight: 500;
        }

        .sidebar a:hover {
            background-color: #3b82f6;
        }

        .content {
            margin-left: 240px;
            padding: 2rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>

<body class="container">
    <div class="sidebar">
        <h5 class="text-center text-uppercase">Admin Dashboard</h5>
        <a href="../index.php" class="fw-bold">Karyawan</a>
        <a href="list_jab.php">Jabatan</a>
    </div>

    <div class="content">
        <div class="text-center">
            <h2 class="mt-4">Data Jabatan</h2>
        </div>
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
                $data = mysqli_query($conn, "SELECT * FROM jabatan");

                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
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