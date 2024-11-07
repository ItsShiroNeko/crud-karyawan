<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
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
            display: flex;
            align-items: center;
            padding: 15px 20px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #3b82f6;
        }

        .content {
            margin-left: 240px;
            padding: 2rem;
        }

        .table {
            margin-top: 1.5rem;
        }

        .table thead {
            background-color: #f1f1f1;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table-striped tbody tr:hover {
            background-color: #f9f9f9;
        }

        .btn {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h5 class="text-center text-uppercase">Admin Dashboard</h5>
        <a href="index.php"><i class="mr-2"></i> Karyawan</a>
        <a href="jabatan/list_jab.php"><i class="mr-2"></i> Jabatan</a>
    </div>

    <div class="content">
        <div class="container">
            <div class="text-center">
                <h2 class="mt-4">Data Karyawan</h2>
            </div>
            <br />

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

                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($d['no_induk']); ?></td>
                            <td><?php echo htmlspecialchars($d['nama']); ?></td>
                            <td><?php echo htmlspecialchars($d['nama_jab']); ?></td>
                            <td><?php echo "Rp" . number_format(htmlspecialchars($d['gaji_pokok']), 2, ",", "."); ?></td>
                            <td><?php echo "Rp" . number_format(htmlspecialchars($d['tunjangan']), 2, ",", "."); ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $d['id_kar']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?php echo $d['id_kar']; ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <a href="input.php" class="btn btn-primary mt-4">Tambah Jabatan</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>