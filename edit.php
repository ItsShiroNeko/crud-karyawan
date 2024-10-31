<!DOCTYPE html> 
<html> 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
<div class="container"> 
    <br /> 
    <br /> 
    <br /> 
    <div class="col-md-5 col-md-offset-3"> 
        <div class="panel"> 
            <div class="panel-heading"> 
                <h3>Edit Karyawan</h3> 
            </div> 
            <div class="panel-body"> 
                <?php 
                include 'conn.php'; 
                $id = $_GET['id']; 

                $karyawanQuery = mysqli_query($conn, "SELECT * FROM karyawan WHERE id_kar='$id'"); 
                if ($d = mysqli_fetch_array($karyawanQuery)) { 
                    
                    $jabatanQuery = mysqli_query($conn, "SELECT * FROM jabatan WHERE id_jab='" . $d['id_jab'] . "'") or die (mysqli_errno($conn));
                    $jabatanData = mysqli_fetch_array($jabatanQuery);
                ?> 
                    <form method="post" action="update.php"> 
                        <div class="form-group"> 
                            <label>Id</label> 
                            <input type="hidden" name="id_kar" value="<?php echo $d['id_kar']; ?>"> 
                            <input type="text" class="form-control" name="id_kar" value="<?php echo $d['id_kar']; ?>" readonly> 
                        </div> 
                        <div class="form-group"> 
                            <label>Nama</label> 
                            <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" required> 
                        </div> 
                        <div class="form-group"> 
                            <label>No Induk</label> 
                            <input type="number" class="form-control" name="no_induk" value="<?php echo $d['no_induk']; ?>" required> 
                        </div>
                        <div class="form-group">
                            <label for="id_jab">Jabatan</label>
                            <select name="id_jab" id="id_jab" class="form-control" required>
                                <option value="<?php echo isset($jabatanData['id_jab']) ? $jabatanData['id_jab'] : ''; ?>">
                                    <?php echo isset($jabatanData['nama_jab']) ? $jabatanData['nama_jab'] : 'Jabatan tidak ditemukan'; ?>
                                </option>
                                <?php
                                $jabatanOptions = mysqli_query($conn, "SELECT * FROM jabatan") or die (mysqli_errno($conn));
                                while($jabatan = mysqli_fetch_array($jabatanOptions)){
                                    echo "<option value='$jabatan[id_jab]'>$jabatan[nama_jab]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <br /> 
                        <input type="submit" class="btn btn-primary" value="Update Karyawan"> 
                        <a class="btn btn-danger" href="index.php">Back</a>
                    </form> 
                <?php 
                } else {
                    echo "<p>Karyawan tidak ditemukan.</p>";
                }
                ?> 
            </div> 
        </div> 
    </div> 
</div> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body> 
</html>
